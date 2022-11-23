$(document).ready(function (){
    $('.form').on('sumbit', function (e){
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        })
        .done(function( msg ) {
            alert( "Data Saved: " + msg );
        });

    })


});

