jQuery(document).ready(function ($) 
{
    //Function for add toggleClass to anything that you want
    function toggle_anything(event, selector, selectorTarget, AddClass)
    {
        selector.on(event, function()
        {
            selectorTarget.toggleClass(AddClass);
        });
    }
    toggle_anything("click", $('li#loop_search'), $('#Search_Widget'), 'Show_search');
    toggle_anything("click", $('header .burger_menu'), $('.nav_menu'), 'Menu_toggleShow');
    toggle_anything("click", $('header .burger_menu'), $('header .burger_menu'), 'Show_toggleMenu');
    
    //SlideUp - SlideDown mobile and tablette menu
    var widthScreen = $(window).width();
    if ( widthScreen <= 1024 )
    {
        $('.fade-out-submenu').slideUp();
        $('.level_0').each(function () 
        {

            if ($(this).hasClass('has_child')) // Check if has child for add arrows menu
            {
                $(this).addClass('arrow_submenu');
            }

            $(this).click(function () //Function slide sub menu
            { 
                if (! $(this).hasClass('OpenSubMenu'))
                {
                    $(this).find('.fade-out-submenu').slideDown();
                    $(this).addClass('OpenSubMenu'); 
                }
                else if ($(this).hasClass('OpenSubMenu'))
                {
                    $(this).find('.fade-out-submenu').slideUp();
                    $(this).removeClass('OpenSubMenu');             
                }
                $(".level_0").not(this).find('.fade-out-submenu').slideUp(); 
                $(".level_0").not(this).removeClass('OpenSubMenu'); 
            });
        });
    }
});