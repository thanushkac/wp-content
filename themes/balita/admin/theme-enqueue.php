<?php

################################################################################
// Enqueue Scripts
################################################################################

function init_scripts() {
	
	// register min jquery requirements for this theme, only!
	if( !is_admin()){
		wp_deregister_script( 'comment-reply' );
		
		// Register Scripts
		wp_register_script( 'comment-reply',    get_bloginfo('url') . '/wp-includes/js/comment-reply.js?ver=20090102' );
		wp_register_script( 'modernizr', 		get_bloginfo('template_url') . '/js/libs/modernizr-2.0.6.min.js', '', '2.0.6' );
		wp_register_script( 'plusone',          'http://apis.google.com/js/plusone.js', '', '', true);		
		
		
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('jquery-ui-tabs');
		wp_enqueue_script( 'comment-reply' );
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'plusone' );
		
                // style
                wp_register_style('carouselskin',   get_bloginfo('template_url').'/css/jcarousel-skin.css');
                wp_register_style('tabs',           get_bloginfo('template_url').'/css/jquery.ui.tabs.css', '', '1.8.16');
                wp_register_style('nivo',           get_bloginfo('template_url').'/css/nivo/default.css', '', 1.0);

                wp_enqueue_style('carouselskin');
                wp_enqueue_style('tabs');
                wp_enqueue_style('nivo');

		
	}
	
	
	// register conditional script (need jquery from above)
	if (!is_admin()) add_action( 'wp_print_scripts', 'custom_print_javascript' );
		function custom_print_javascript( ) {
			wp_enqueue_script( 'jquery-plugins', get_bloginfo('template_url') . '/js/plugins.js', '', array( 'jquery' ), true ); // for plugins
			wp_enqueue_script( 'jquery-scripts', get_bloginfo('template_url') . '/js/script.js', '', array( 'jquery' ), true ); // for custom scripts
	
			if ( get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply',  get_bloginfo('url') . '/wp-includes/js/comment-reply.js?ver=20090102', 'jquery', '', true );
			}
		}
    
}    

function footer_scripts() { ?>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php bloginfo("stylesheet_directory");?>/js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>	

<!--[if lt IE 7 ]>
<script src="<?php bloginfo("stylesheet_directory");?>/js/libs/dd_belatedpng.js"></script>
<script> DD_belatedPNG.fix('img, .png_bg'); </script>
<![endif]-->

<?php
}

if (!is_admin()) add_action('init', 'init_scripts', 0);
add_action('wp_footer', 'footer_scripts', 10);

?>