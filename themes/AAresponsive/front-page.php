<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="container">
        <?php echo do_shortcode('[nggallery id=1 w=980 h=537]'); ?> 
      </div>
      

    </div> <!-- /container -->
    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3><?php the_title(); ?></h3>	
    <hr /> 
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?></div>
        <div class="col-md-4"><h3>Blog</h3>
        <hr />

<?php
$args = array( 'posts_per_page' => 5, 'order'=> 'DEC', 'orderby' => 'post_date', 'category' => 28, );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
		<div><span class="aapostdate"><?php the_date('j M, Y'); ?></span></div>
		<p><?php the_excerpt(); ?></p>
        <br />
	</div>
<?php
endforeach; 
wp_reset_postdata();
?>



</div>
        <div class="col-md-4"><h3>Meet Our Adopting Parents</h3>
        <hr />
        
<?php 
		$query = new WP_Query( array( 'orderby' => 'rand', 'posts_per_page' => 5, 'post_type' =>   'page', 'post_parent' => '89' )) ;
if ( $query->have_posts() ) {
        
    while ( $query->have_posts() ) {
		echo '<div>';
        $query->the_post();
		echo '' .the_post_thumbnail('thumbnail', array('class' => 'homepostthumb'));
        echo '<span class="orangetxt">' . get_the_title() . '&sdot;</span>';
		echo '' . get_the_excerpt() . '</ br>';
		echo '</div>';
		echo '<hr class="homepage" />';
		
    }
        
		
} else {
    // no posts found
}
		?>
        </div>
        </div>
        </div>
        
        <div class="container">

 <hr />

 </div>
        
 <div class="container">
 <div class="row">
        <div class="col-md-8"><h3 class="reducevspace">Open Adoption Articles</h3>
        
 <?php
$args = array( 'posts_per_page' => 3, 'order'=> 'DEC', 'orderby' => 'post_date', 'category' => 26,27 );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
    <?php the_post_thumbnail('thumbnail', array('class' => 'homeblogpostthumb')); ?>
		<h4 class="orangetxt"><?php the_title(); ?>   </h4>
		<?php echo get_the_blog_excerpt(); ?>
        <hr />
	</div>
<?php
endforeach; 
wp_reset_postdata();
?>
        </div>
        <div class="col-md-4">
        <h3></h3>
        <div class="testimonials">
        <h4 class="orangetxt">Success Stories</h4>
        <?php
$my_postid = 136;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?> 
        </div>
        </div>
        </div>
 </div>   
 

<div class="footer text-center">PREGNANT | HOPING TO ADOPT | ABOUT US | RESOURCES </br>
<small>Terms of Use | Privacy</small></br>
<small>Copyright © 2014. All rights reserved. America Adopts </small></div>
  

<!-- Le javascript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>