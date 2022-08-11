jQuery(document).ready(function ($) 
{
    //Function for add toggleClass to anything that you want
    function toggle_anything(event, selector, selectorTarget, AddClass)
    {
        selector.on(event, function ()
        {
            selectorTarget.toggleClass(AddClass);
        });
    }
    toggle_anything("click", $('li#loop_search'), $('#Search_Widget'), 'Show_search');
    toggle_anything("click", $('header .burger_menu'), $('.nav_menu'), 'Menu_toggleShow');
    toggle_anything("click", $('header .burger_menu'), $('header .burger_menu'), 'Show_toggleMenu');

    //SlideUp - SlideDown mobile and tablette menu
    var widthScreen = $(window).width();
    if (widthScreen <= 1024)
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
                if (!$(this).hasClass('OpenSubMenu'))
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

    //Feature brand envirronnement Uniquement sur page archive
    $('.filterDynamiqueArchive').each(function ()
    {
        $(this).click(function ()
        {
            var color_brand = $(this).attr('data-univers-color');
            var title_brand = $(this).attr('data-unives-title');
            var logo_brand = $(this).attr('data-univers-logo');

            if ($(this).hasClass('allProducts'))
            {
                $('section.title_breadCrumb').css('background', '#000000');
                $('#titleBrandBreadcrumb').text("");
                $('.customDataHeroArchive').html('<h2 class="title_Modulus h2_SUBhero light">PRODUCTS<br><span class="bold h2_SUBhero2">SLOT CABINETS</span></h2><div class="line-3-70-stick-B"></div>');
            }
            else
            {
                $('section.title_breadCrumb').css('background', color_brand);
                $('#titleBrandBreadcrumb').text(title_brand);
                $('.customDataHeroArchive').html('<div class="thumbBrandArchive"><img src="' + logo_brand + '"></div>')
            }

        });
    });

    //Carousel Slick
    $('.sliderRelatedProduct').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });


});// END Ready