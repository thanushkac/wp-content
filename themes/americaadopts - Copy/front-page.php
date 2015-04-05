<?php
/*
Template Name: home
*/

get_header( 'home' ); ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="container">
      <div class="row">
       <div class="col-md-12 bannershow">
       <?php echo do_shortcode('[ngg-nivoslider gallery="3" html_id="home-slider" center="1" caption="description" max_pictures="50" order="random" shuffle="true" pauseTime="10000" pauseonhover="true" effect="fade" controlnav="false" captionopacity=".5" ]'); ?>                                                     
       <div class="row bannertext">         
            <div>                      
            <h2 class="orangetxt">Welcome</h2>
           
            <p>We make it easy for expectant parents who are considering adoption to connect with hopeful adoptive parents</p>
            <p class="spacer"> </p>
            <p class="spacer"> </p>
            <p>Looking for an adoptive family for your baby?</p>
            <a href="http://www.americaadopts.com/adoption-profiles/"><img src="<?php bloginfo('template_url'); ?>/images/Button_GetStartedNow.gif" /></a>
            <p class="spacer"> </p>
            <p class="spacer"> </p>
            <p>Hope to connect with a prospective birthmother?</p>
            <a href="http://www.americaadopts.com/services/adoption-profile-packages/"><img src="<?php bloginfo('template_url'); ?>/images/Button_GetStartedNow.gif" /></a>         
            </div>            
            </div> 
            
        </div>
      </div>      

    </div> <!-- /container -->   
    
    <div class="container mobilespacefix">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3><?php the_title(); ?></h3>	
    <hr /> 
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?></div>
        <div class="col-md-4 hidden-xs hidden-sm"><h3>Our Recent Blog Posts</h3>
        <hr />

<?php
$args = array( 'posts_per_page' => 5, 'order'=> 'DEC', 'orderby' => 'post_date' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
		<div><span class="aapostdate"><?php the_date('j M. Y'); ?></span></div>
        <div class="spacersm"></div>
		<div><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></div>
        <br />
	</div>
<?php
endforeach; 
wp_reset_postdata();
?>

 <a href="http://www.americaadopts.com/blog/">See all.</a>

</div>
        <div class="col-md-4"><h3>Meet Our Adopting Parents</h3>
        <hr />        
        
<?php 
		$query = new WP_Query( array( 'orderby' => 'rand', 'posts_per_page' => 5, 'post_type' =>   'page', 'post_parent' => '558' )) ;
if ( $query->have_posts() ) {
        
    while ( $query->have_posts() ) {
		echo '<div>';
        $query->the_post();
		
		echo '<img class="homepostthumb pull-left" src="' . get_post_meta($post->ID, 'familyColumnImageNew', true).'" />' ;
        //echo '<span class="orangetxt">' . get_the_title() . ' </span>';
		echo '<span class="orangetxt"><a href="'. get_the_permalink() . '" title="'.  get_the_title() . '">'. get_the_title()  .' '. '</a></span>';
		echo '' . get_the_excerpt() . '</ br>';
		echo '</div>';
		echo '<hr class="homepage" />';
		
    } 
        
		
} else {
    // no posts found
}
		?>
        <a href="http://www.americaadopts.com/find-a-family/">See all our adopting parents.</a>
        </div>
        <div class="col-md-4 visible-xs visible-sm"><h3>Our Recent Blog Posts</h3>
        <hr />

<?php
$args = array( 'posts_per_page' => 4, 'order'=> 'DEC', 'orderby' => 'post_date');
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
		<div><span class="aapostdate"><?php the_date('j M, Y'); ?></span></div>
        <div class="spacersm"></div>
		<div><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></div>
        <br />
	</div>
<?php
endforeach; 
wp_reset_postdata();
?>

 <a href="<?php bloginfo('template_url'); ?>/blog/">See all.</a>

</div>
        </div>
        </div>
        
        <div class="container">

 <hr />

 </div>
        
 <div class="container">
 <div class="row">
        <div class="col-md-8"><h3 class="reducevspace">Open Adoption Tips And Information</h3>
        
        
        <!--?php
$args = array( 'posts_per_page' => 3, 'order'=> 'DEC', 'orderby' => 'post_date', 'category' => 214, );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
		<!--?php the_post_thumbnail('thumbnail', array('class' => 'homeblogpostthumb')); ?>
        <div class="spacersm"></div>
		<a href="<!--?php the_permalink(); ?>" title="<!--?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><h4 class="h4"><!--?php the_title(); ?>   </h4></a>
        <!--?php echo get_the_blog_excerpt(); ?>
        <hr />
	</div>
<!--?php
endforeach; 
wp_reset_postdata();
?-->


        
 <?php
$args = array( 'posts_per_page' => 3, 'order'=> 'DEC', 'orderby' => 'post_date', 'post_type' =>   'page', 'post_parent' => '553'  );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
    <?php the_post_thumbnail('thumbnail', array('class' => 'homeblogpostthumb')); ?>
		<a class="articlestitle" href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?>   </a> <br/>
		<?php echo get_the_blog_excerpt(); ?>
        <hr />
	</div>
<?php
endforeach; 
wp_reset_postdata();
?>
        </div>
        <div class="col-md-4">
        
        <div class="testimonials">
         <br />
         
        <a href="http://www.americaadopts.com/about-us/success-stories/"‎ class="h3 testimonialtitle">Success Stories</a>
        <br />
        <br />
        
        <?php
$my_postid = 22006;//This is page id or post id
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


<?php
get_footer();
