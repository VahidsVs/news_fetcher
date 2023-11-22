function showPostsByCategory(categoryId) {
    var Route = '/posts/' + categoryId;

    // Via Ajax
    $.ajax({
        type: "GET",
        url: Route,
        success: function(response) {
            $('.posts-content').html(response);
        },
        error: function() {
            $('.posts-content').html("<h3 class='colorr posts-content-error'>❌ There was a problem reading the data!!!</h3>");
        }
    });

    // Via Fetch
    // fetch(Route).then(function(response) {
    //     return response.text();
    // }).then(function(html) {
    //     $('.posts-content').html(html);
    // })
    // .catch(function(err) {
    //     err.preventDefault();
    //     $('.posts-content').html("<h3 class='colorr posts-content-error'>❌ There was a problem reading the data!!!</h3>");
    // });
}
