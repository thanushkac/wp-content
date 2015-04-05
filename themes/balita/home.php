<?php get_header(); ?>
		<?php
                    // get recent slider max is 5 slider.
                    tk_get_recent_posttype('slider', 1, 5);
                    if(have_posts ()):
                ?>
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider">
                                <!--?php
                                    while (have_posts ()): the_post();
                                        echo '<a href="'.  get_post_meta(get_the_ID(), '_tk_slider_meta_link', true).'">';
                                        the_post_thumbnail('slider', array('alt' => get_the_title(), 'title' => ''));
                                        echo '</a>';
                                    endwhile;
                                ?-->
            <a href="http://yogavedic.co.uk/?page_id=4"><img src="http://yogavedic.co.uk/wp-content/uploads/2012/07/ayurvedic-yoga-products-uk2.jpg" width="984" height="264" alt="yogavedic uk yoga and ayurvedic product collection" /></a></div>
		</div>
        
                <?php endif; wp_reset_query(); ?>
		
                <?php $text_promo = "<strong>Sign up</strong> now and get <strong>$5 OFF</strong>. Receive exclusive savings-packed emails &amp; start saving <strong>TODAY!</strong>"; ?>
                <?php if(get_option('tk_promo_middle', $text_promo) != ''){ ?>
		<section class="promoBanner">
			<p><?php echo stripslashes(get_option('tk_promo_middle', $text_promo)); ?></p>
                        <?php if(!is_user_logged_in() && get_option('users_can_register') && get_option('require_register')): ?>
			<div class="signUp">
				<a href="<?php echo site_url('wp-login.php?action=register', 'login'); ?>" title="<?php _e('Sign Up', 'tokokoo'); ?>" class="aOrange"><?php _e('Sign Up', 'tokokoo'); ?></a>
			</div>
                        <?php endif; ?>
		</section>
                <?php } ?>
		<?php include_once 'includes/home-banner.php'; ?>
                <?php tk_get_feature_product(1, 20); ?>
                <?php if(have_posts()): ?>
                    <section class="featuredItems">
                            <div class="arrowLeft"><a href="#" id="productcarousel-prev" title="previous">&laquo; Previous</a></div>
                            <div class="listItem">
                                    <ul id="productcarousel" class="jcarousel-skin-tango">
                                        <?php while(have_posts()): the_post(); ?>
                                            <li>
                                                <a href="<?php echo wpsc_the_product_permalink(); ?>" title="<?php echo wpsc_the_product_title(); ?>">                                                    
                                                    <?php if(wpsc_the_product_thumbnail()) :?>
                                                            <img src="<?php echo wpsc_the_product_thumbnail(100, 100); ?>" alt="<?php echo wpsc_the_product_title(); ?>" />
                                                    <?php else: ?>
                                                            <img class="no-image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="No Image" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo WPSC_CORE_THEME_URL; ?>wpsc-images/noimage.png" width="100" height="100" />
                                                    <?php endif; ?>	
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                            </div>
                            <div class="arrowRight"><a href="#" id="productcarousel-next" title="Next">&raquo; Next</a></div>
                    </section>
                <?php endif; wp_reset_query(); ?>
		
		
<?php get_footer(); ?>