
<?php
get_header(); ?>


 <div class="container"> 
 <div class="row">
 <div class="topborder"></div>
 </div>
 </div> 


<div class="container commoncontenttop"> 
 <div class="row">
 <div class="col-md-8 blog">

 <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
     <div class="post">
      <h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>
   <small>
     <?php the_time('F jS, Y') ?> 
        <!-- by <?php the_author() ?> -->
   </small>
 </div>
<?php endwhile; ?>
 <div class="navigation">
   <div class="alignleft">
    <?php posts_nav_link('','','&laquo; Previous Entries') ?>
   </div>
   <div class="alignright">
    <?php posts_nav_link('','Next Entries &raquo;','') ?>
   </div>
 </div>
<?php else : ?>
  <h2 class="center">Not Found</h2>
<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
 <?php endif; ?>
    </div><!-- col-8 -->
    
    <div class="col-md-4">
     <div class="row blogsidebar">
    <!-- begin sidebar -->
<div id="secondary">

<?php get_sidebar( 'content' ); ?>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Sidebar')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?>
</div><!-- #secondary -->
    </div>
    </div>
    
    </div>
    </div>
    
    
     <?php
get_footer();
?>