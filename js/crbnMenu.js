(function ($) {

    $.fn.crbnMenu = function (options) {

        var opts = $.extend({}, $.fn.crbnMenu.defaults, options);
        var menu = $('.crbnMenu');

        $('#nav-toggle').click(function () {
            var toggle = $(this);
            toggle.toggleClass('nav-open');

            menu.find('.menu').slideToggle();
        });

        var subMenus = $(this).find('.nav-link');

        subMenus.each(function () {
            var subMenu = $(this);

            subMenu.click(function () {
                $(this).find('.menu-toggle > i').toggleClass('fa-angle-down fa-angle-up');

                var isOpen = subMenu.parent().find('> ul').hasClass('active');

                if (!isOpen) {
                    if (opts.hideActive == true) {
                        var openMenus = menu.find('.active');

                        openMenus.each(function () {
                            $(this).parent().find('.menu-toggle > i').toggleClass('fa-angle-down fa-angle-up');
                            $(this).slideUp();
                            $(this).removeClass('active');
                        });
                    }

                    subMenu.parent().find('> ul').slideToggle();
                    subMenu.parent().find('> ul').toggleClass('active');
                } else {
                    subMenu.parent().find('> ul').slideUp();
                    subMenu.parent().find('> ul').removeClass('active');
                }
            });
        });

        return this;
        // var navs = $(this).find('> li > a');

        // navs.each(function() {
        //     var navigationLink = $(this);

        //     navigationLink.click(function() {
        //         var subNav = $(this).parent().find('> ul');
        //         var subNavIcon = $(this).parent().find('.menu-toggle > i');

        //         if (subNav.hasClass('active')) {
        //             subNav.slideUp(function() {
        //                 subNav.removeClass('active');
        //                 subNavIcon.removeClass('fa-angle-down');
        //                 subNavIcon.addClass('fa-angle-up');
        //             });
        //         } else {
        //             $allMenus = $('.menu > li > ul');
        //             $allMenus.slideUp(function() {
        //                 $allMenuIcons = $('.menu-toggle > i');
        //                 $allMenuIcons.removeClass('fa-angle-down');
        //                 $allMenuIcons.addClass('fa-angle-up');
        //             });

        //             subNav.slideDown(function() {
        //                 subNavIcon.removeClass('fa-angle-up');
        //                 subNavIcon.addClass('fa-angle-down');
        //                 subNav.addClass('active');
        //             });
        //         }
        //     });
        // });
        // return this;
    };

}(jQuery));

$.fn.crbnMenu.defaults = {
    hideActive: true
};