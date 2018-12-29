"use strict";

(function($) {
    $(function() {
        // console.log('dice-menu inited');

        //dice-menu onclick event
        $('.dice-menu li').click(function() {
            if($(this).find('span').attr('class') == $(this).parent().find('li:first-child > span').attr('class')) {
                //click on root element
                // console.log('click dice-menu root element');

                if($(this).parent().find('li:nth-child(2)').css('opacity') == 0) {
                    //show dice-menu
                    $(this).parent().find('li:nth-child(1n+2) > span').each(function() {
                        // console.log($(this).attr('class'));
                        $(this).parent().animate({'opacity': 0.8}, 50);
                    });
                } else {
                    //hide dice-menu
                    $(this).parent().find('li:nth-child(1n+2) > span').each(function() {
                        // console.log($(this).attr('class'));
                        $(this).parent().animate({'opacity': 0}, 50);
                    });
                }
            } else {
                //click on other menu buttons
                // console.log("goto link:" + $(this).find('span').attr('href'));

                var href = $(this).find('span').attr('href');
                var target = $(this).find('span').attr('target');

                // console.log('href: ' + href);
                // console.log('target: ' + target);

                if(/^http|https/.test(href)) {
                    // console.log('this is a url');

                    //url
                    if(target == '_blank') {
                        window.open(href);
                    } else {
                        //open in self page
                        self.location.href = href;
                    }
                } else {
                    // console.log('this is a internal link');

                    //internal link
                    $('html, body').animate({scrollTop: $(href).offset().top},
                    {duration: 'slow', easing: 'easeInOutCubic'});
                }

                //collapse the floating navbar
                $(this).parent().find('li:nth-child(1n+2) > span').each(function() {
                    // console.log($(this).attr('class'));
                    $(this).parent().animate({'opacity': 0}, 50);
                });
            }
        });

        //dice-menu mouseenter event
        $('.dice-menu li').mouseenter(function() {
            if($(this).find('span').attr('class') != $(this).parent().find('li:first-child > span').attr('class')) {
                //non root element
                if($(this).css('opacity') == 0.8) {
                    //reset all the other buttons to opacity 0
                    $(this).parent().find('li:nth-child(1n+2) > span').each(function() {
                        // console.log($(this).attr('class'));
                        $(this).parent().animate({'opacity': 0.8}, 50);
                    });

                    //fade in
                    $(this).animate({opacity: 1}, 50);
                }
            }
        });

        $('.dice-menu li').mouseout(function() {
            if($(this).find('span').attr('class') != $(this).parent().find('li:first-child > span').attr('class')) {
                //non root element
                if($(this).css('opacity') == 1) {
                    //fade out
                    $(this).animate({opacity: 0.8}, 50);
                }
            }
        });
    });
})(jQuery);