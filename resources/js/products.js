$(document).ready(function() {
    $.ajax({
        url: '/products',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            $('#products-container').html(response.html);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});