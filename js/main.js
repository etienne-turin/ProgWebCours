$(document).ready(function()
{
    $('#connexion-form').submit()function () {
    $.ajax({
        //url = connexion.php
        // method = post
        'url': $(this).attr('action'),
        'post': $(this).attr('method'),
        'data': $(this).serialize()
    }).done(function(data){
        /* appel réussi !*/
    }).fail(){
        $.('body').html('Une erreur est survenue...');
        console.log('3');
    });
$.(this).find('button').prop("disabled",true);
return false;
}

$("#connexion-button").click(function(){
    $("#connexion-form").toggle();
});
});