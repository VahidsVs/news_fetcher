const Url_Home_Category = "/posts/";

function removeAllClassDsiplay() {
    $("#likeBtn").removeClass("d-none");
    $("#likeBtn").removeClass("d-inline-block");
    $("#disLikeBtn").removeClass("d-none");
    $("#disLikeBtn").removeClass("d-inline-block");
}

function removeAllClassColor(catid = null) {
    for (let index = 1; index < catid; index++) {
        var element = $("#nameSelector" + index);
        element.removeClass('fcolor-FF0000');
    }

}

function getPostsByCategory(categoryId, countCategoryName) {
    removeAllClassColor(countCategoryName);
    var element = $("#nameSelector" + categoryId);
    element.addClass('fcolor-FF0000');
    var route = $("#nameSelector").attr("data-url");
    //#region fetch
    fetch(route)
        .then((response) => {
            if (response.ok) {
                return response.text();
            }
            $(".posts-content").html(
                "<h3 class='colorr posts-content-error'>❌ There was a problem fetching the data!!!</h3>"
            );
            console.log("Problem fetching data from url");
        })
        .then((responseHTML) => {
            $(".posts-content").html(responseHTML);
        })
        .catch((error) => {
            $(".posts-content").html(
                "<h3 class='colorr posts-content-error'>❌ There was a server error!!!</h3>"
            );
            console.log(error);
        });
    //#endregion fetch

    //#region ajax
    //    $.ajax({
    //        type: "GET",
    //        url: route,
    //        success: function(response) {
    //            $('.posts-content').html(response);
    //        },
    //        error: function() {
    //            $('.posts-content').html("<h3 class='colorr posts-content-error'>❌ There was a problem reading the data!!!</h3>");
    //        }
    //    });
    //#endregion
}

function elementValueIsRequired(element) {
    if (!element.val()) {
        element.addClass("border border-danger");
        return false;
    }
    element.removeClass("border border-danger");
    element.addClass("border border-success");
    return true;
}

//#region comment-ajax
// function addComment() {
//     var url = $("#submitForm").attr("data-url");
//     $.ajaxSetup({
//         headers: {
//             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//         },
//     });
//     $.ajax({
//         type: "POST",
//         url: url,
//         data: $("#commentForm").serialize(),
//         // means: _token=JAPF5R&post_id=10&comment=wow&name=farshid&email=farshidasadi9421@gmail.com&website=
//         success: function (response) {
//             if (response.status) {
//                 Swal.fire({
//                     icon: "success",
//                     title: "Successful",
//                     text: "Your comment will be successfully registered and displayed on the site after approval by experts",
//                     timer: 3000,
//                     confirmButtonText: "Ok",
//                 });
//                 removeAllClassDsiplay();
//                 $("#likeBtn").addClass("d-inline-block");
//                 $("#disLikeBtn").addClass("d-none");
//             } else {
//                 Swal.fire({
//                     icon: "error",
//                     title: "error!",
//                     text: "Communication was not established",
//                     timer: 3000,
//                     confirmButtonText: "Ok",
//                 });
//             }
//         },
//         error: function () {
//             Swal.fire({
//                 icon: "error",
//                 title: "error!",
//                 text: "Communication was not established",
//                 timer: 3000,
//                 confirmButtonText: "Ok",
//             });
//         },
//     });
// }
//#endregion

function createCommentForPost() {
    var route = $("#btnSubmitComment").attr("data-url");
    const data = new Object();
    data.comment = $("#" + "comment").val();
    data.name = $("#" + "name").val();
    data.email = $("#" + "email").val();
    data.website = $("#" + "website").val();

    if (data.comment && data.name && data.email)
        (async () => {
            const rawResponse = await fetch(route, {
                method: "POST",
                headers: {
                    Accept: "application/json",
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                body: JSON.stringify(data),
            });
            const content = await rawResponse.json();
            if (content.result) {
                $("." + "comment-info").val(null);
                var title = "Comment";
                var text = "Successfully submited";
                var icon = "success";
                Swal.fire({
                    icon: icon,
                    title: title,
                    text: text,
                    timer: 3000,
                });
            }
            console.log(content);
        })();
}

function likeBtn() {
    var url = $("#likeBtn").attr("data-url");
    removeAllClassDsiplay();
    $("#likeBtn").addClass("d-none");
    $("#disLikeBtn").addClass("d-inline-block");
    $.ajax({
        type: "GET",
        url: url,
        success: function (response) {
            if (response.status) {
                // Swal.fire({
                //     icon: 'success',
                //     title: 'Successful',
                //     text: 'Successfully liked',
                //     timer: 3000,
                //     confirmButtonText: 'Ok'
                // })
            }
            // else {
            //     Swal.fire({
            //         icon: 'error',
            //         title: 'error!',
            //         text: 'Communication was not established',
            //         timer: 3000,
            //         confirmButtonText: 'Ok'
            //     })
            // }
        },
        error: function () {
            Swal.fire({
                icon: "error",
                title: "error!",
                text: "Communication was not established",
                timer: 3000,
                confirmButtonText: "Ok",
            });
        },
    });
}

function disLikeBtn() {
    var url = $("#disLikeBtn").attr("data-url");
    removeAllClassDsiplay();
    $("#likeBtn").addClass("d-inline-block");
    $("#disLikeBtn").addClass("d-none");
    $.ajax({
        type: "GET",
        url: url,
        success: function (response) {
            if (response.status) {
                // Swal.fire({
                //     icon: 'success',
                //     title: 'Successful',
                //     text: 'Successfully unliked',
                //     timer: 3000,
                //     confirmButtonText: 'Ok'
                // })
            }
            //     } else {
            //         Swal.fire({
            //             icon: 'error',
            //             title: 'error!',
            //             text: 'Communication was not established',
            //             timer: 3000,
            //             confirmButtonText: 'Ok'
            //         })
            //     }
            // },
        },
        error: function () {
            Swal.fire({
                icon: "error",
                title: "error!",
                text: "Communication was not established",
                timer: 3000,
                confirmButtonText: "Ok",
            });
        },
    });
}
// Function to validate email
function isEmailValid(email) {
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}
