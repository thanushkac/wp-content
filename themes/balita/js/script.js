jQuery(window).load(function() {

	jQuery('#slider').nivoSlider({
        effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
        animSpeed: 500, // Slide transition speed
        pauseTime: 8000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: false, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: false, // 1,2,3... navigation
        pauseOnHover: true, // Stop animation while hovering
        captionOpacity: 0.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next' // Next directionNav text
    });
	
});

jQuery(document).ready(function(){
	
	function mycarousel_initCallback(carousel) {
		jQuery('#productcarousel-next').bind('click', function() {
			carousel.next();
			return false;
		});

		jQuery('#productcarousel-prev').bind('click', function() {
			carousel.prev();
			return false;
		});
	};

	jQuery("#productcarousel").jcarousel({
        scroll: 1,
        initCallback: mycarousel_initCallback,
        buttonNextHTML: null,
        buttonPrevHTML: null
    });
	
	//Hide (Collapse) the toggle containers on load
	// jQuery(".product-page-widget ul").show(); 

	//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
	jQuery(".product-page-widget .widget_title").click(function(){
		jQuery(this).toggleClass("active").next().slideToggle("slow");
		return false; //Prevent the browser jump to the link anchor
	});
	
	jQuery("ul.menu").supersubs({ 
		minWidth:    15,   // minimum width of sub-menus in em units 
		maxWidth:    30,   // maximum width of sub-menus in em units 
		extraWidth:  1  
			
	}).superfish({ 
		delay:       100, 
		animation:   {opacity:'show',height:'show'},
		speed:       'medium', 
		autoArrows:  true,
		dropShadows: false 
	});
	
	jQuery(".cartBox").hover(function(){
		jQuery(".cartBox .panel").slideToggle("slow");
		jQuery(this).toggleClass("active"); return false;
    });
	
	jQuery('#mycarousel').jcarousel({
        vertical: true,
        scroll: 1
    });
	
	// for change image on single product images gallery
    jQuery('.images-gallery-thumbnails').click(function(){
        jQuery(this).parents('.imagecol:first').find('.product_image').attr('src', jQuery(this).parent().attr('rev'));
        jQuery(this).parents('.imagecol:first').find('.product_image').parent('a:first').attr('href', jQuery(this).parent().attr('href'));
        return false;
    });
	
	jQuery("#description-tabs, #comments").tabs({
		fx:{ opacity: "toggle" }
	});
			
	jQuery('.links').click(function() { // bind click event to link
    jQuery('#comments').tabs('select', 1); // switch to two tab
    return false;
	});
	
	jQuery(".signup").click(function(){
		jQuery(".wpsc_signup_form").slideToggle("slow");
		jQuery(this).toggleClass("active"); return false;
    });
    
    jQuery("#block .block-content .kill").click(function(){
            jQuery("#block").animate({ opacity: 'hide' }, "slow");
    });
	
});
