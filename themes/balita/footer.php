		</section><!-- End #main-content -->
		
		<?php
			if(is_single() || is_page() || is_archive() || is_search()){
				if(!tk_is_wpsc_page() && !is_tax())
					get_sidebar(); 
			}
		 ?>

</div><!-- END MAIN -->

<footer id="footer" role="contentinfo">
	<div class="renda">
		&nbsp;
	</div>
	<span>
		<div id="footer-1" class="footer">
                        <?php if ( !dynamic_sidebar( 'Footer 1' )): ?>
                            <section id="archives" class="widget widget-container">
                                    <h3 class="widget-title"><?php _e( 'Archives', 'tokokoo' ); ?></h3>
                                    <ul>
                                            <?php wp_get_archives( 'type=monthly' ); ?>
                                    </ul>
                            </section>
                        <?php endif; ?>
		</div>
		<div id="footer-2" class="footer">
                        <?php if ( !dynamic_sidebar( 'Footer 2' )): ?>
                            <section id="archives" class="widget widget-container">
                                    <h3 class="widget-title"><?php _e( 'Archives', 'tokokoo' ); ?></h3>
                                    <ul>
                                            <?php wp_get_archives( 'type=daily' ); ?>
                                    </ul>
                            </section>
                        <?php endif; ?>
		</div>
		<!--div id="footer-3" class="footer">
                        <!--?php if ( !dynamic_sidebar( 'Footer 3' )): ?>
                            <section id="archives" class="widget widget-container">
                                    <h3 class="widget-title"><!--?php _e( 'Archives', 'tokokoo' ); ?></h3>
                                    <ul>
                                            <!--?php wp_get_archives( 'type=yearly' ); ?>
                                    </ul>
                            </section>
                        <!--?php endif; ?>
		</div-->
		<div id="footer-4" class="social footer">
                        <?php if ( !dynamic_sidebar( 'Footer 4' )): ?>
                            <section id="archives" class="widget widget-container">
                                    <h3 class="widget-title"><?php _e( 'Archives', 'tokokoo' ); ?></h3>
                                    <ul>
                                            <?php wp_get_archives( 'type=monthly' ); ?>
                                    </ul>
                            </section>
                            <section id="archives" class="widget widget-container">
                                    <h3 class="widget-title"><?php _e( 'Follow Us', 'tokokoo' ); ?></h3>
                                    <?php the_widget('Tokokoo_Follower_Widget'); ?>
                            </section>
                        <?php endif; ?>
		</div>
	</span>
	
</footer>
	
</div>
<!-- /#container -->

<footer class="copyright">
	<section>
		<div>
                    <?php if(get_option('tk_method_payment', false)): ?>
			<p>
				<img src="<?php bloginfo('template_url'); ?>/images/payment-paypal.jpg" />
				<img src="<?php bloginfo('template_url'); ?>/images/payment-master.jpg" />
				<img src="<?php bloginfo('template_url'); ?>/images/payment-american.jpg" />
				<img src="<?php bloginfo('template_url'); ?>/images/payment-visa.jpg" />
			</p>
                    <?php endif; ?>
			<p>
                            &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> All right reserved.<br/>
                            <?php if(get_option('tk_footer', '') != '') echo get_option('tk_footer', '');  ?>
                        </p>
		</div>
	</section>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
/* <![CDATA[ */
	jQuery('#sidebar .widget:nth-child(even)').css('margin-right', 0);
/* ]]> */
</script>
	
</body>
</html>