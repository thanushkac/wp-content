<div id="homepagetop">

        		<!--This is the Featured Content jFlow slider section-->

        <div class="jFlow">

            <div id="prevNext" class="hidden">

                <img src="images/prev.png" alt="Previous Tab" class="jFlowPrev" />
                <img src="images/next.png" alt="Next Tab" class="jFlowNext" />

            </div>

            <div id="slides">
            
            	<?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=" .ot_option('slider_num') ); while($recent->have_posts()) : $recent->the_post();?>
                    
					<div>
					
						<?php if( get_post_meta($post->ID, "banner", true) ): ?>
                        <a href="<?php the_permalink() ?>" rel="bookmark"><img src="<?php echo get_post_meta($post->ID, "banner", true); ?>" alt="<?php the_title(); ?>" /></a>
                        <?php else: ?>
                        <?php endif; ?>
                        
                        <div class="bannercontent">	     
    
                            <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                            <h3><?php the_time('l, F j, Y'); ?></h3>
                            <?php the_content_limit(600, ""); ?><a href="<?php the_permalink() ?>" rel="bookmark"><img style="float:left;margin:5px 0px;" src="<?php bloginfo('template_url');?>/images/readmore_normal.png" alt="Read More" /></a>
                        
                        </div>
                        
                    </div>
                    
                <?php endwhile; ?>

            </div>

        </div>

    </div>
    
    <div id="controller">
    
    	<div id="prev_btn">
        	<a href="#blank"><img src="<?php bloginfo('template_url'); ?>/images/blank_btn.gif" alt="&laquo;" class="jFlowPrev" /></a>
        </div>
            
        <div id="next_btn">
            <a href="#blank"><img src="<?php bloginfo('template_url'); ?>/images/blank_btn.gif" alt="&raquo;" class="jFlowNext" /></a>
        </div>

        <?php ?><a href="#blank"><span class="jFlowControl"></span></a>
        <a href="#blank"><span class="jFlowControl"></span></a>
        <a href="#blank"><span class="jFlowControl"></span></a>
        <a href="#blank"><span class="jFlowControl"></span></a>
        <a href="#blank"><span class="jFlowControl"></span></a><?php ?>

    </div>