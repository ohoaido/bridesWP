jQuery(document).ready(function() {
	var width_device = jQuery(window).width();
	var wow = new WOW(
	  	{
		    boxClass:     'wow',      // animated element css class (default is wow)
		    animateClass: 'animated', // animation css class (default is animated)
		    offset:       0,          // distance to the element when triggering the animation (default is 0)
		    mobile:       true,       // trigger animations on mobile devices (default is true)
		    live:         true,       // act on asynchronously loaded content (default is true)
		    callback:     function(box) {
		      // the callback is fired every time an animation is started
		      // the argument that is passed in is the DOM node being animated
		    },
		    scrollContainer: null // optional scroll container selector, otherwise use window
	  	}
	);
	wow.init();

	header();
	jQuery(window).scroll(function(){
		header();
	});

	//SHOW AND HIDE LIGHBOX
		jQuery(document).on('click','.md-trigger',function(event){    	
	    	var value = jQuery(this).attr('data-modal');
	    	event.preventDefault();
	    	jQuery('#md-forgot form, #md-login form').trigger("reset");
	    	jQuery('#md-forgot form .text-warning, #md-login form .text-warning').text("");
	    	jQuery('#md-forgot form .input-control, #md-login form .input-control').removeClass("error").removeClass("success-value");
	    	jQuery('.md-modal').removeClass('md-show');
	    	jQuery('#menu-active').removeClass('active');
	    	jQuery('#dark-shadow').removeClass('active');
	        jQuery(value).addClass('md-show');
	        // jQuery('body').addClass('none-scroll');
	        jQuery(value).find('form').trigger("reset");
	    });

	    jQuery(document).on('click','.md-close, .md-overlay, .md-cancel',function(){
	        jQuery('.md-modal').removeClass('md-show');
	        jQuery('body').removeClass('none-scroll');
	        var src = jQuery(this).parent().find('iframe').attr('src');		
			jQuery(this).parent().find('iframe').attr('src', '');
			jQuery(this).parent().find('iframe').attr('src', src);
	    }); 


		jQuery(document).on('click','.md-popup',function(event){    	
	    	var value = jQuery(this).attr('data');
	    	event.preventDefault();
	    	// jQuery('#request__popup form').trigger("reset");
	    	jQuery('#' + value).addClass('active');
	    	jQuery('body').addClass('none-scroll');
	    });

	    jQuery(document).on('click','.popup__close, .darknight',function(){
	        jQuery('.box__popup').removeClass('active');
	    	jQuery('body').removeClass('none-scroll');
	    }); 

    /*=================================================
        					Custom
	=====================================================*/
	if(jQuery('.content-banner .box_sliders').length > 0){
		var owl = jQuery('.content-banner .box_sliders');
		jQuery('.content-banner .box_sliders').owlCarousel({
		    loop: false,
		    autoplayTimeout:5000,
		    nav: false,
		    autoplay: false,
		    rewind: true,
		    dots: false,
	        lazyLoad:true,
			autoplayHoverPause:true,
		  	autoplaySpeed: 700,
		  	navSpeed: 700,
		  	dragEndSpeed: 700,
		  	items: 1,
		    animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
		});
		jQuery('.content-banner .slider__arrow .arrow__next').click(function() {
			if(Number(jQuery('.content-banner .slider__arrow .number__current').text()) != Number(jQuery('.content-banner .slider__arrow .number__max').text())){
			    owl.trigger('next.owl.carousel');
			    jQuery('.content-banner .slider__arrow .number__current').text(Number(jQuery('.content-banner .slider__arrow .number__current').text()) + 1);
			}
		})
		// Go to the previous item
		jQuery('.content-banner .slider__arrow .arrow__prev').click(function() {
		    // With optional speed parameter
		    // Parameters has to be in square bracket '[]'		    
			if(Number(jQuery('.content-banner .slider__arrow .number__current').text()) != 1){
			    owl.trigger('prev.owl.carousel', [300]);
			    jQuery('.content-banner .slider__arrow .number__current').text(Number(jQuery('.content-banner .slider__arrow .number__current').text()) - 1);
			}
		})
	}

	if(jQuery('.content-gallery .box__captions').length > 0){
		var owl1 = jQuery('.content-gallery .box__captions');
		jQuery('.content-gallery .box__captions').owlCarousel({
		    loop: false,
		    autoplayTimeout:5000,
		    nav: false,
		    autoplay: false,
		    rewind: true,
		    dots: false,
	        lazyLoad:true,
			autoplayHoverPause:true,
		  	autoplaySpeed: 700,
		  	navSpeed: 700,
		  	dragEndSpeed: 700,
		  	items: 1,
		    animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
		});
		var owl2 = jQuery('.content-gallery .box__images');
		jQuery('.content-gallery .box__images').owlCarousel({
		    loop: false,
		    autoplayTimeout:5000,
		    nav: false,
		    autoplay: false,
		    rewind: true,
		    dots: false,
	        lazyLoad:true,
			autoplayHoverPause:true,
		  	autoplaySpeed: 700,
		  	navSpeed: 700,
		  	dragEndSpeed: 700,
		  	items: 1,
		    animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
		});	

		jQuery('.content-gallery .box__arrow .arrow__next').click(function() {
			if(Number(jQuery('.content-gallery .box__arrow .number__current').text()) != Number(jQuery('.content-gallery .box__arrow .number__max').text())){
			    owl1.trigger('next.owl.carousel');
			    owl2.trigger('next.owl.carousel');
			    jQuery('.content-gallery .box__arrow .number__current').text(Number(jQuery('.content-gallery .box__arrow .number__current').text()) + 1);
			}
		})
		// Go to the previous item
		jQuery('.content-gallery .box__arrow .arrow__prev').click(function() {
		    // With optional speed parameter
		    // Parameters has to be in square bracket '[]'		    
			if(Number(jQuery('.content-gallery .box__arrow .number__current').text()) != 1){
			    owl1.trigger('prev.owl.carousel', [300]);
			    owl2.trigger('prev.owl.carousel', [300]);
			    jQuery('.content-gallery .box__arrow .number__current').text(Number(jQuery('.content-gallery .box__arrow .number__current').text()) - 1);
			}
		})
	}

	if(jQuery('.content-albums .box__sliders').length > 0){
		var owl3 = jQuery('.content-albums .box__sliders');
		owl3.owlCarousel({
		    loop: false,
		    autoplayTimeout:5000,
		    nav: false,
		    autoplay: false,
		    rewind: true,
		    dots: false,
	        lazyLoad:true,
			autoplayHoverPause:true,
		  	autoplaySpeed: 700,
		  	navSpeed: 700,
		  	dragEndSpeed: 700,
		  	autoWidth: true,
		  	margin: 20,
		});
		jQuery('.content-albums .box__control .arrow__next').click(function() {
		    owl3.trigger('next.owl.carousel');
		})
		// Go to the previous item
		jQuery('.content-albums .box__control .arrow__prev').click(function() {
		    owl3.trigger('prev.owl.carousel', [300]);
		})
	}

	if(jQuery('.intro__slider').length > 0){
		var owl4 = jQuery('.intro__slider');
		owl4.owlCarousel({
		    loop: true,
		    autoplayTimeout:5000,
		    nav: false,
		    autoplay: true,
		    rewind: true,
		    dots: false,
	        lazyLoad:true,
			autoplayHoverPause:true,
		  	margin: 0,
		  	items: 1,
		    animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
		});
		jQuery('.intro .arrow__next').click(function() {
		    owl4.trigger('next.owl.carousel');
		})
		// Go to the previous item
		jQuery('.conintro .arrow__prev').click(function() {
		    owl4.trigger('prev.owl.carousel', [300]);
		})

		setInterval(function(){ jQuery('.intro .arrow__next').trigger('click') }, 3000);
	}	

	if(jQuery('.content-grid2-slider').length > 0){
		var owl5 = jQuery('.content-grid2-slider .left__slider');
		owl5.owlCarousel({
		    loop: false,
		    autoplayTimeout:5000,
		    nav: false,
		    autoplay: false,
		    rewind: true,
		    dots: false,
	        lazyLoad:true,
			autoplayHoverPause:true,
		  	autoplaySpeed: 700,
		  	navSpeed: 700,
		  	dragEndSpeed: 700,
		  	items: 1,
		    animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
		});
		var owl6 = jQuery('.content-grid2-slider .right__slider');
		owl6.owlCarousel({
		    loop: false,
		    autoplayTimeout:5000,
		    nav: false,
		    autoplay: false,
		    rewind: true,
		    dots: false,
	        lazyLoad:true,
			autoplayHoverPause:true,
		  	autoplaySpeed: 700,
		  	navSpeed: 700,
		  	dragEndSpeed: 700,
		  	items: 1,
		    animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
    		onInitialized: setOwlStageHeight,
		    onResized: setOwlStageHeight,
		    onTranslated: setOwlStageHeight,  
		});	

	    function setOwlStageHeight(event) {
		    var maxHeight = 0;
		    jQuery('.content-grid2-slider .right__slider .owl-item').each(function () { // LOOP THROUGH ACTIVE ITEMS
		        var thisHeight = parseInt( jQuery(this).height() );
		        maxHeight=(maxHeight>=thisHeight?maxHeight:thisHeight);
		    });
		    if(jQuery(window).width() > 992){		    	
			    jQuery('.content-grid2-slider .right__slider .owl-item').css('height', maxHeight);
			    jQuery('.content-grid2-slider .left__slider .owl-item').css('height', maxHeight);
		    }
		}		

		jQuery('.content-grid2-slider .arrow__next').click(function() {
		    owl5.trigger('next.owl.carousel');
		    owl6.trigger('next.owl.carousel');
		})
		// Go to the previous item
		jQuery('.content-grid2-slider .arrow__prev').click(function() {
		    // With optional speed parameter
		    // Parameters has to be in square bracket '[]'		    
		    owl5.trigger('prev.owl.carousel', [300]);
		    owl6.trigger('prev.owl.carousel', [300]);
		})
	}
	
	// Menu
	if(jQuery(window).width() > 992) {
		jQuery('#menu-active .menu').mCustomScrollbar({
			theme: "dark",
			advanced:{
				autoExpandHorizontalScroll:true
			}
		});	
	}

	jQuery(window).resize(function(event) {
		if(jQuery(window).width() > 992) {
			jQuery('#menu-active .menu').mCustomScrollbar({
				theme: "dark",
				advanced:{
					autoExpandHorizontalScroll:true
				}
			});	
		} else {
			jQuery('#menu-active .menu').mCustomScrollbar('destroy');
		}
	});

	jQuery('#header .hambuger__line, #header-responsive .toggle-action').click(function(event) {
		/* Act on the event */
		jQuery('#menu-active').addClass('active');
		jQuery('#dark-shadow').addClass('active');
		jQuery('body').addClass('none-scroll');		
	});

	jQuery('#menu-active .close__menu').click(function(event) {
		/* Act on the event */
		jQuery('#menu-active').removeClass('active');
		jQuery('#dark-shadow').removeClass('active');
		jQuery('body').removeClass('none-scroll');		
	});


	jQuery('#dark-shadow').click(function(event) {
		jQuery(this).removeClass('active');
		jQuery('#menu-active').removeClass('active');
    	jQuery('body').removeClass('none-scroll');		
	});

	jQuery(document).on('click', '.content-collections .filter__category > li > a', function(event) {
		event.preventDefault();
		jQuery(this).parent().find('.sub-menu').slideToggle(300);
		jQuery(this).parent().toggleClass('open');
	});

	jQuery(document).on('click', '.content-collections .share__button', function(event) {
		event.preventDefault();
		jQuery(this).parent().find('.share__social').slideToggle(300);
		jQuery(this).parent().toggleClass('active');
	});

	jQuery(document).on('click', '.content-collection-detail .share__button', function(event) {
		event.preventDefault();
		jQuery(this).parent().find('.share__social').slideToggle(300);
		jQuery(this).parent().toggleClass('active');
	});

	var heightItem = jQuery('.content-collections .item:eq(3)').outerHeight() + jQuery('.content-collections .item:eq(4)').outerHeight() - jQuery('.content-collections .item:eq(4) .item__caption').outerHeight()  + 43;
	jQuery('.content-collections .item:eq(2) .img').css('height', heightItem);

	var heightItem2 = jQuery('.content-collections .item:eq(11)').outerHeight() + jQuery('.content-collections .item:eq(12)').outerHeight() - jQuery('.content-collections .item:eq(4) .item__caption').outerHeight()  + 43;
	jQuery('.content-collections .item:eq(10) .img').css('height', heightItem2);

	jQuery(window).resize(function(event) {
		var heightItem = jQuery('.content-collections .item:eq(3)').outerHeight() + jQuery('.content-collections .item:eq(4)').outerHeight() - jQuery('.content-collections .item:eq(4) .item__caption').outerHeight()  + 43;
		jQuery('.content-collections .item:eq(2) .img').css('height', heightItem);

		var heightItem2 = jQuery('.content-collections .item:eq(11)').outerHeight() + jQuery('.content-collections .item:eq(12)').outerHeight() - jQuery('.content-collections .item:eq(4) .item__caption').outerHeight()  + 43;
		jQuery('.content-collections .item:eq(10) .img').css('height', heightItem2);
	});

	jQuery(document).on('click', '.content-collection-detail .has__col .item__title', function(event) {
		event.preventDefault();
		if(jQuery(this).hasClass('active')){
			jQuery(this).removeClass('active');
			jQuery(this).parent().find('.item__col').slideUp(300);
		} else {
			jQuery(this).addClass('active');
			jQuery(this).parent().find('.item__col').slideDown(300);			
		}
	});

	jQuery(document).on('click', 'section.content-designers-cdetail .content_bottom .detail__back, section.content-collection-detail .content_box .box__sidebar .box__back .back__history', function(event) {
		event.preventDefault();
		window.history.back();
	});
});

function header(){
    // Scroll article
    var position = $(window).scrollTop(); 
    jQuery(window).scroll(function(event) {
    	var scroll = $(window).scrollTop();
	    if(scroll > 200) {
    		jQuery('#header').addClass('active');
	    } else {
			jQuery('#header').removeClass('active');
	    }

		if(jQuery(this).scrollTop() > 400){
		    if( scroll > position) {
	    		jQuery('.go-to-top').removeClass('active');
		    } else {
				jQuery('.go-to-top').addClass('active');
		    }
		} else {
			jQuery('.go-to-top').removeClass('active');
		}
	    position = scroll;
    });
}
