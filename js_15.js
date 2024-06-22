/**
 * @file plugins/themes/default/js/main.js
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Handle JavaScript functionality unique to this theme.
 */
(function($) {
    var breadcumps = $('.cmp_breadcrumbs').detach();
    //var ads = $('.header-ads').detach();
    //$('header').prepend(ads);
    $('header').append(breadcumps);
        
        
        $(window).scroll(function(){
      var sticky = $('header'),
          scroll = $(window).scrollTop();
    
      if (scroll >= 80) {
          sticky.addClass('fixed');
          var height = sticky.height()+80;
          var fakeHeaderContainer = '<div class="fakeContainer" style="height:'+height+'px; width:100%"></div>';
          $('.fakeContainer').remove();
          $('header').after(fakeHeaderContainer);
      }
      else
      {
          sticky.removeClass('fixed');
          $('.fakeContainer').remove();
          
      }
    });
    })(jQuery);