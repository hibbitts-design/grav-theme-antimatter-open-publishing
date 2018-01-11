$(document).ready(function(){

   $("a.newwindow").attr("target","_blank");

   $("a.topwindow").attr("target","_top");

    $('#body').on('click', 'a:not(.external-link):not([href^="#"])', function(e){

        e.preventDefault();
        var url  = window.location.href;

        if (url.indexOf("chromeless:true") >= 0) {

            var clickedLink = $(this).attr('href') + "/chromeless:true";
            window.location.href = clickedLink;

        }else {

            window.location.href = $(this).attr('href');

        }
    });

});
