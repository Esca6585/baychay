$(document).on('click', '#add-to-cart', function (event) {
    var id = $(this).attr('data-tea-id');
    
    var data = 'id=' + id;

    $.ajax({
        url: '/api/add-shopping-cart',
        data: data,
        type: 'POST',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        success: function (data) {
            console.log('add-session = ' + data);
        },
        error: function () {
            console.log('error');
        }
    });
});