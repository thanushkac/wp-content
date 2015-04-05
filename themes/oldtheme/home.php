<?php get_header(); ?>

<style type="text/css">
  html {
    background: #EEEEEE url(/wp-content/themes/americaadoptstwentyten/images/bg.jpg) repeat-x;
  }
</style>

<div id="bannerright">

  <div id="bannerrighttop">
    <form id="searchformheader" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" value="SEARCH >>" name="s" id="searchboxHome" onfocus="if (this.value == 'SEARCH >>') {this.value = '';}" onblur="if (this.value == '') {this.value = 'SEARCH >>';}"/>
      <input type="hidden" id="searchbutton" value="Go"/>
    </form>
  </div>

  <div id="bannerwidget">
    <div style="position:relative;">
      <div style="position:absolute;left:20px;top:25px;font-size:30px;color:#FF4308;opacity:1.0;">Welcome</div>
      <div style="position:absolute;margin:65px 20px 0 20px;font-size:18px;line-height:25px;opacity:1.0;">We make it easy for expectant parents who are considering adoption to connect with hopeful adoptive parents.</div>
      <div style="position:absolute;margin:210px 20px 0 20px;font-size:18px;line-height:25px;opacity:1.0;color:#5e8601;">Looking for an adoptive family for your baby?</div>
      <div style="position:absolute;left:32px;top:275px;"><a href="/find-a-family"><img src="/wp-content/themes/americaadoptstwentyten/images/startnow3.gif" alt="Start Here" title="Start Here"/></a></div>
      <div style="position:absolute;margin:340px 15px 0 20px;font-size:18px;line-height:25px;opacity:1.0;color:#5e8601;">Hoping to connect with prospective birthparents?</div>
      <div style="position:absolute;left:32px;top:404px;"><a href="/services/find-family-registration"><img src="/wp-content/themes/americaadoptstwentyten/images/startnow3.gif" alt="Start Here" title="Start Here"/></a></div>
      <div style="position:absolute;left:120px;top:445px;"><a href="/blog"><img src="/wp-content/themes/americaadoptstwentyten/images/blog.gif" alt="Blog" title="Blog"/></a></div>
    </div>
  </div>

</div>

<div id="bannerleft">

  <!--  JQuery Slider CSS overrides-->
  <style type="text/css">
    .nivo-caption {
      width:310px;
      margin-bottom:30px;
      padding-left:10px;
      /*opacity:1.0 !important;*/
      /*background: #999999 transparent !important;*/

    }
    .nivo-caption p {
      font-size:15px;
      opacity:1.0;
      color:#FFF;
    }
  </style>
  <?php echo do_shortcode('[jj-ngg-jquery-slider gallery="3" height="537" width="980" effect="fade" order="random" shuffle="true" pauseTime="6000" max_pictures="50" captionopacity="0.7"]'); ?>
</div>

</div>


<!-- The main column ends  -->

<?php get_footer(); ?>