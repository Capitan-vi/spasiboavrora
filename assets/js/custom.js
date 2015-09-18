jQuery.noConflict()(function($) {
    "use strict";
    var $container = $('.oi_port_container');

    if ($container.length) {
        $('.oi_portfolio_page_holder').css('min-height', $(window).height())
        $container.waitForImages(function() {

            // initialize isotope
            $container.isotope({
                itemSelector: '.oi_strange_portfolio_item',
                layoutMode: 'masonry',
            });

            $('#filters a:first-child').addClass('filter_current');
            // filter items when filter link is clicked
            $('#filters a').click(function() {
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector
                });
                $(this).removeClass('filter_button').addClass('filter_button filter_current').siblings().removeClass('filter_button filter_current').addClass('filter_button');

                return false;
            });

        }, null, true);
    }
    if ($("div").is("#cbox")) {
        $('#cbox').jflickrfeed({
            limit: 10,
            qstrings: {
                id: "52617155@N08"
            },
            itemTemplate: '<div class="oi_flickr_item">' +
                '<a data-lightbox="roadtrip" href="{{image_b}}" title="{{title}}">' +
                '<img src="{{image_s}}"/>' +
                '</a>' +
                '</div>'
        });
	}
    if ($("div").is("#port_slider")) {
        $('#port_slider').flexslider({
            prevText: "", //String: Set the text for the "previous" directionNav item
            nextText: "",
            animation: "fade",
            useCSS: false,
            controlNav: false,
            animationLoop: true,
            slideshow: true,
            slideshowSpeed: 3000,
            pauseOnHover: true,
            start: function(slider) {
                slider.removeClass('oi_flex_loading');
            }
        });
    }

	if ($("div").is("#map")) {
		$("#map").gmap3({
			marker: {
				// address:"93 Worth St, New York, NY",
				address: "7th Ave, New York, NY",
				options: {
					icon: "http://html.orange-idea.com/rockfolio/wp-content/themes/rockfolio/framework/css/img/marker.png"
				}
			},
			map: {
				options: {
					styles: [{
						stylers: [{
							"saturation": -100
						}, {
							"lightness": 0
						}, {
							"gamma": 0.5
						}]
					}, ],
					zoom: 13,
					scrollwheel: false,
					draggable: true
				}
			}
		});
	}

    $('.oi_vc_clock').click(function() {
        $('#clockmodal').modal('toggle')
    });

    $(window).load(function() {
        $('#blog_snipet_slider').flexslider({
            animation: "fade",
            controlNav: true,
            directionNav: false,
            prevText: "Previous",
            nextText: "Next",
        });

        $(".oi_posts_ul li").each(function(index) {
            setTimeout(function(el) {
                el.css('opacity', 1);
                el.find(('.oi_post_content_holder_inner')).css('height', el.height());
            }, index * 100, $(this));

        });
    });




    if ($('body').outerWidth() > 1100) {
        if ($('body').hasClass('admin-bar')) {
            $('.oi_head_holder').css('margin-top', '-32px')
        };
        $(window).scroll(function() {
            if ($(this).scrollTop() < 40) {
                $('.oi_head_holder').css('margin-top', '-' + $(this).scrollTop() + 'px')
            };
            if ($(this).scrollTop() > 80) {
                $('.oi_head_holder').css('margin-top', '-40px');
                $('.oi_head_holder').addClass('oi_sticky');
            } else {
                $('.oi_head_holder').removeClass('oi_sticky');
                if ($('body').hasClass('admin-bar')) {
                    $('.oi_head_holder').css('margin-top', '-32px')
                };
            }

        });
    };

    $('.oi_xs_menu').click(function() {
        $('.oi_header_menu').toggleClass('oi_v_menu');
    });
	
	$(document).ready(function ()
	{ // after loading the DOM
		$("#ajax-contact-form").submit(function ()
		{
			// this points to our form
			var str = $(this).serialize(); // Serialize the data for the POST-request
			var result = '';
			$.ajax(
			{

				type: "POST",
				url: 'contact.php',
				data: str,
				success: function (msg)
				{	
						if (msg == 'OK'){
							result = '<div class="alert alert-info">Message was sent to website administrator, thank you!</div>';
							$("#fields").hide();
						}else{
							result = msg;
						}
						$("#note").html(result);
				
				}
			});
			return false;
		});
	});
});