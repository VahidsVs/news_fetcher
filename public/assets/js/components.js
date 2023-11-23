const Url_Home_Category = '/posts/';

function getPostsByCategory(categoryId) {

    var route = Url_Home_Category + categoryId;
    // region Fetch
    fetch(route).then((response) => {
        if (response.ok) {
            return response.text();
        }
        $('.posts-content').html("<h3 class='colorr posts-content-error'>❌ There was a problem fetching the data!!!</h3>");
        console.log('Problem fetching data from url')

    })
        .then((responseHTML) => {
            $('.posts-content').html(responseHTML);
        })
        .catch((error) => {
            $('.posts-content').html("<h3 class='colorr posts-content-error'>❌ There was a server error!!!</h3>");
            console.log(error);
        });
     //endregion Fetch

     /*region AJAX
    $.ajax({
        type: "GET",
        url: route,
        success: function(response) {
            $('.posts-content').html(response);
        },
        error: function() {
            $('.posts-content').html("<h3 class='colorr posts-content-error'>❌ There was a problem reading the data!!!</h3>");
        }
    });
     endregion AJAX*/
}
