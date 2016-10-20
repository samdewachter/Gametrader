$(document).ready(function(){

    $("#toggle-console").click(function(){
        $("#consoles-toggle").slideToggle();
        $('#toggle-arrow-console').toggleClass('rotated');
    });

    $("#toggle-genre").click(function(){
       	$("#genres-toggle").slideToggle();
        $('#toggle-arrow-genre').toggleClass('rotated');
    });
});