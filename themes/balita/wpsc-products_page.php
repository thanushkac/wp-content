<?php
global $wp_query;	
$image_width = get_option('product_image_width');
/*
 * Most functions called in this page can be found in the wpsc_query.php file
 */
?>
<div id="default_products_page_container" class="wrap wpsc_container product">
		
	<?php if(wpsc_has_pages_top()) : ?>
		<div class="wpsc_page_numbers_top">
			<?php wpsc_pagination(); ?>
		</div><!--close wpsc_page_numbers_top-->
	<?php endif; ?>	
		
            <header class="clearfix">
                <?php if(!is_tax()): ?>
                    <h2 class="headPage"><?php the_title(); ?></h2>
                <?php else: ?>
                    <h2 class="headPage"><?php _e('Products:','tokokoo'); ?> <?php $term = get_queried_object(); echo apply_filters( 'single_term_title', $term->name ); ?></h2>
                <?php endif; ?>
            </header>
	
	<?php /* <div class="banner-160x600"><img src="<?php bloginfo('template_directory'); ?>/images/banner3.jpg" /></div> */ ?>
	
	<?php do_action('wpsc_top_of_products_page'); // Plugin hook for adding things to the top of the products page, like the live search ?>
	
	<?php if(wpsc_display_products()): ?>	
		
	
		<div class="wpsc_default_product_list">
		<?php /** start the product loop here */?>
		<?php while (wpsc_have_products()) :  wpsc_the_product(); ?>
			
			<a href="<?php echo wpsc_the_product_permalink(); ?>">
			
				<div class="default_product_display product_view_<?php echo wpsc_the_product_id(); ?> <?php echo wpsc_category_class(); ?> group">    
					
					<?php if(wpsc_show_thumbnails()) :?>
						<div class="imagecol" style="width:<?php echo $image_width; ?>;" id="imagecol_<?php echo wpsc_the_product_id(); ?>">
                                                        <?php if(wpsc_the_product_thumbnail()) :?>
                                                                        <img class="product_image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="<?php echo wpsc_the_product_title(); ?>" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo wpsc_the_product_thumbnail(160, 160); ?>"/>
                                                        <?php else: ?>
                                                                        <img class="no-image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="No Image" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo WPSC_CORE_THEME_URL; ?>wpsc-images/noimage.png" width="160" height="160" />
                                                        <?php endif; ?>	
						</div><!--close imagecol-->
					<?php endif; ?>
					
					<h2 class="prodtitle entry-title">
						<?php echo wpsc_the_product_title(); ?>
					</h2>  
					
					<p class="pricedisplay product_<?php echo wpsc_the_product_id(); ?>"><?php _e('Price', 'tokokoo'); ?>: <span id='product_price_<?php echo wpsc_the_product_id(); ?>' class="currentprice pricedisplay"><?php echo wpsc_the_product_price(); ?></span></p>						
							
				<?php if(wpsc_product_on_special()) : ?><span class="sale"><?php _e('Sale', 'tokokoo'); ?></span><?php endif; ?>
			</div><!--close default_product_display-->
			
		</a>

		<?php endwhile; ?>
		<?php /** end the product loop here */?>
		</div>
		
		<?php if(wpsc_product_count() == 0):?>
			<h3><?php  _e('There are no products in this group.', 'tokokoo'); ?></h3>
		<?php endif ; ?>
		
	    <?php do_action( 'wpsc_theme_footer' ); ?> 	

		<?php if(wpsc_has_pages_bottom()) : ?>
			<div class="wpsc_page_numbers_bottom">
				<?php wpsc_pagination(); ?>
			</div><!--close wpsc_page_numbers_bottom-->
		<?php endif; ?>
		
	<?php endif; ?>
</div><!--close default_products_page_container-->

<aside id="sidebar-product-page" class="filter">
    
        <?php if ( !dynamic_sidebar( 'Product Page' )): ?>
    
        <?php endif; ?>
	
</aside>
