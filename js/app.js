$(document).ready(function () {
    
    $('#link-inscription').click(function () {
        $('#main-inscription').toggleClass('open');
        if ($("#main-inscription").hasClass("open")) {
            $("#main-connexion").removeClass('open');
        }
    });
    $('#link-connexion').click(function () {
        $('#main-connexion').toggleClass('open');
        if ($("#main-connexion").hasClass("open")) {
            $("#main-inscription").removeClass('open');
        }
    });
});