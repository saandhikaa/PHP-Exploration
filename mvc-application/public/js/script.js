$(function() {
    $('.formNewTalent').on('click', function() {
        $('#modalLabel').html('New Talent');
    });
    
    $('.formEditTalent').on('click', function() {
        $('#modalLabel').html('Edit Talent');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://127.0.0.1:8080/PHP-Exploration/mvc-application/public/talent/edit', 
            data: {id : id}, 
            method: 'post', 
            dataType: 'json', 
            success: function(data) {
                console.log(data);
            }
        });
    });
});