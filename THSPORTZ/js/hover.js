$(document).ready(function(){
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(230);
        },
        function(){
            $(this).find('.caption').slideUp(230);
        }
    );
});