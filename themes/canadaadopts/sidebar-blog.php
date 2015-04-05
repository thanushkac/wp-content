<!-- begin sidebar -->

<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->


<div id="sidebar">

	<?php if(ot_option('side_feedburner') == 'Yes') { ?>

    <div class="subscribe">
        <h4><?php _e("Subscribe", 'organicthemes'); ?></h4>
		<p><?php _e("Receive news and updates from us.", 'organicthemes'); ?></p><form id="subscribe" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo ot_option('feedburner'); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><input type="text" value="Enter your email address..." id="subbox" onfocus="if (this.value == 'Enter your email address...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your email address...';}" name="email"/><input type="hidden" value="<?php echo ot_option('feedburner'); ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Send" id="subbutton" /><input type="hidden" value="eNews Subscribe" name="title"/></form>
	</div>
    
    <?php } else { ?>
    <?php } ?>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?>
    	
    <div class="widget">
        <h4>Widget Area</h4>
        <p>This section is widgetized. To add widgets here, go to the <a href="<?php echo admin_url(); ?>widgets.php">Widgets</a> panel in your WordPress admin, and add the widgets you would like to <strong>Right Sidebar</strong>.</p>
        <p><small>*This message will be overwritten after widgets have been added</small></p>
    </div>
		
	<?php endif; ?>
			
</div>

<!-- end sidebar -->