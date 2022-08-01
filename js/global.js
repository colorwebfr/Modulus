jQuery(document).ready(function ($) 
{
    //Function for add toggleClass to anything that you want
    function toggle_anything(event, selector, AddClass)
    {
        selector.on(event, function()
        {
            selector.toggleClass(AddClass);
        });
    }
    toggle_anything("click", $('li#loop_search'), 'Show_search');
    
    
});