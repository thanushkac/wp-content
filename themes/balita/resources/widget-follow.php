<?php 

/**
 * FOR FOLLOWER AND SUBSCRIBER WIDGET
 * ------------------------------------------------------------------------
 */
class Tokokoo_Follower_Widget extends WP_Widget {
    /** constructor */
    function Tokokoo_Follower_Widget() {
        $widget_ops = array( 'classname' => 'follower-widget', 'description' => __('Display your follower and fans', 'tokokoo') );
        $control_ops = array( 'width' => 200, 'height' => 250, 'id_base' => 'follower-widget' );
        $this->WP_Widget( 'follower-widget', __(TK_THEME.' - Follow Us', 'tokokoo'), $widget_ops, $control_ops );
    }

    function widget($args, $instance) {
        global $wpdb;

        extract( $args );

        $title              = apply_filters('widget_title', $instance['title']);

        //read the database option
        $twitter            = get_option('tk_twitter', 'tokokoo');
        $feedburner         = (get_option('tk_rss', 'http://feeds.feedburner.com/tokokoo') == '')? get_feed_link('rss2'):get_option('tk_rss');
        $flickr             = get_option('tk_flickr', 'http://www.flickr.com/photos/onnayokheng');
        $facebook           = get_option('tk_facebook', 'http://www.facebook.com/pages/tokokoo/113110785395648');

        echo $before_widget;


        if ( $title ) {

            echo $before_title . $title . $after_title;

        }
?>
        <ul>
                <li class="aRss follow"><a href="<?php echo $feedburner; ?>">Our RSS Feed</a></li>
                <?php if($facebook != ''): ?><li class="aFb follow"><a href="<?php echo $facebook; ?>">Our Facebook Page</a></li><?php endif; ?>
                <?php if($twitter != ''): ?><li class="aTwitter follow"><a href="<?php echo 'http://twitter.com/'.$twitter; ?>">Follow our tweets</a></li><?php endif; ?>
                <?php if($flickr != ''): ?><li class="aFlickr follow"><a href="<?php echo $flickr; ?>">Our Flickr gallery</a></li><?php endif; ?>
        </ul>

<?php

        echo $after_widget;

    }

    function update($new_instance, $old_instance) {

	$instance           = $old_instance;
        $instance['title']  = strip_tags($new_instance['title']);

        return $instance;
    }

    function form($instance) {
        $title = esc_attr(@$instance['title']);

?>

        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

<?php

    }
}

/**
 * Registering all widget function
 */
function tokokoo_register_widget() {
    register_widget('Tokokoo_Follower_Widget');
}

add_action('widgets_init', 'tokokoo_register_widget');
?>