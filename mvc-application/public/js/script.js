const BASEURL = 'http://127.0.0.1:8080/PHP-Exploration/mvc-application/public';

$(function() {
    $('.formNewTalent').on('click', function() {
        $('#modalLabel').html('New Talent');
    });
    
    $('.formEditTalent').on('click', function() {
        $('#modalLabel').html('Edit Talent');
        const id = $(this).data('id');
        
        $.ajax({
            url: BASEURL + '/talent/getdetail', 
            data: {id : id}, 
            method: 'post', 
            dataType: 'json', 
            success: function(data) {
                $('#name').val(data.name_);
                $('#birthdate').val(data.birthdate_);
                $('#birthplace').val(data.birthplace_);
                $('#occupation').val(data.occupation_);
                $('#nationality').val(data.nationality_);
            }
        });
    });
});