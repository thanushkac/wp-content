<?php
/*
 * This file is for search result.
 * @author Onnay Okheng
 */
get_header();
?>

<!-- result search for product -->
<?php if (have_posts()) : ?>

	
<header class="clearfix">
        <h2 class="headPage">Search Results: &ldquo;<?php the_search_query(); ?>&rdquo; <?php if (get_query_var('paged')) echo ' &mdash; Page '.get_query_var('paged'); ?></h2>
</header>
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <h2><?php _e('Products', 'tokokoo'); ?></h2>
    <div id="default_products_page_container" class="wrap wpsc_container">
        <div class="wpsc_default_product_list">
    <?php while (have_posts()) : the_post(); if(get_post_type() == 'wpsc-product'): // check if result is post. ?>
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

                                    <h2 class="prodtitle entry-title"><?php echo wpsc_the_product_title(); ?></h2>  

                                    <p class="pricedisplay product_<?php echo wpsc_the_product_id(); ?>"><?php _e('Price', 'wpsc'); ?>: <span id='product_price_<?php echo wpsc_the_product_id(); ?>' class="currentprice pricedisplay"><?php echo wpsc_the_product_price(); ?></span></p>
                                    
                            </div><!--close default_product_display-->

                    </a>
    <?php endif; endwhile; ?>
        </div>
    </div>
</article>

<!-- result search for post -->
<h2><?php _e('Posts', 'tokokoo'); ?></h2>

<?php while (have_posts()) : the_post(); if(get_post_type() == 'post'): ?>

        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                <header>
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <p class="post-meta"><time datetime="<?php the_time('Y-m-d')?>">Posted <?php the_time('F jS, Y') ?></time> <span class="author">by <?php the_author() ?></span>. <?php if ( comments_open() ) : ?><a class="comment" href="<?php the_permalink(); ?>#comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a><?php endif; ?></p>
                </header>

                <?php the_content(__('More', 'tokokoo')); ?>

        </article>

<?php endif; endwhile;  ?>

<?php else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.', 'tokokoo'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
