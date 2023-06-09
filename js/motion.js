$(document).ready(function(){
 
    $('.menu_btn>a').on('click', function(){
        $('.menu_bg').show(); 
        $('.sidebar_menu').show().animate({
            left:0
        }); 
        const body = document.querySelector('body');
        body.style.overflow = 'hidden'
    });
    $('.close_btn>a').on('click', function(){
        $('.menu_bg').hide();
        $('.sidebar_menu').animate({
            left: '-' + 50 + '%'
        },
        function(){
            $('.sidebar_menu').hide();          
        });
        const body = document.querySelector('body');
        body.style.overflow = "auto"
    });
});
