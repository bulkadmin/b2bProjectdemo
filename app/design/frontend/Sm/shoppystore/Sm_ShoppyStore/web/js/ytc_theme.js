/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
 define( [ "jquery" ], function ( $ ) {
$(document).ready(function(){	 
$('body').bind('touchstart', function() {});

	$('.header-container .switcher .dropdown .mage-dropdown-dialog').css({'display':'none'});
     setInterval(function(){
        $('[data-toggle="tooltip"]').tooltip();
    },99);
   

    $(window).on('load resize change', function(event){
        Move();
    });

    function Move() {
      

         if($(window).width() < 760) {
             $('.header-style-1 .header-container .menu-cart .cart-wrapper').prependTo($('.header-style-1 .header-bottom .headerbt-wrapper .inner-search'));
            $('.header-style-3 .header-middle .search-form-action').prependTo($('.header-style-3 .header-bottom .headerbt-wrapper .menu-cart .cart-wrapper'));

      }
        else {
            $('.header-style-1 .header-bottom .headerbt-wrapper  .cart-wrapper').prependTo($('.header-style-1 .header-container .menu-cart'));
            $('.header-style-3 .header-bottom .headerbt-wrapper .menu-cart  .search-form-action').prependTo($('.header-style-3 .header-middle .warpper-search'));
        }

        if($(window).width() < 998) {
             $('.header-style-1 .header-middle .menu-cart .navigation-mobile-container').prependTo($('.header-style-1 .header-bottom .headerbt-wrapper .inner-search'));
      }
        else {
            $('.header-style-1 .header-bottom .headerbt-wrapper  .navigation-mobile-container').prependTo($('.header-style-1 .header-container .menu-cart'));
          
        }
  
}
});
});
