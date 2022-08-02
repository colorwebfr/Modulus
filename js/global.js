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
    
    
});