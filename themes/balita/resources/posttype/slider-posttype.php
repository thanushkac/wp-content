<?php

    /**
     * @package Tokokoo
     * @author Onnay Okheng (@onnayokheng)
     */

/*-----------------------------------------------------------------------------------*/
/*	Create a new post type called Sliders
/*-----------------------------------------------------------------------------------*/

function tk_create_post_type_sliders()
{
	$labels = array(
		'name'              => __( 'Sliders'),
		'singular_name'     => __( 'Slider' ),
		'rewrite'           => array('slug' => __( 'Sliders' )),
		'add_new'           => _x('Add New', 'Slider'),
		'add_new_item'      => __('Add New Slider'),
		'edit_item'         => __('Edit Slider'),
		'new_item'          => __('New Slider'),
		'view_item'         => __('View Slider'),
		'search_items'      => __('Search Sliders'),
		'not_found'         =>  __('No Sliders found'),
		'not_found_in_trash'=> __('No Sliders found in Trash'),
		'parent_item_colon' => ''
	  );

	  $args = array(
		'labels'            => $labels,
		'public'            => true,
		'publicly_queryable'=> true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'capability_type'   => 'post',
		'hierarchical'      => false,
		'menu_position'     => null,
		'supports'          => array('title', 'thumbnail')
	  );

	  register_post_type(__( 'slider' ),$args);
}


/*-----------------------------------------------------------------------------------*/
/*	All the pre-made messages for the Slider post type
/*-----------------------------------------------------------------------------------*/

function tk_slider_updated_messages( $messages ) {
        global $post, $post_ID;

        $messages[__( 'slider' )] =
            array(
                0 => '', // Unused. Messages start at index 1.
                1 => sprintf( __('Slider updated. <a href="%s">View Slider</a>'), esc_url( get_permalink($post_ID) ) ),
                2 => __('Custom field updated.'),
                3 => __('Custom field deleted.'),
                4 => __('Slider updated.'),
                /* translators: %s: date and time of the revision */
                5 => isset($_GET['revision']) ? sprintf( __('Slider resliderd to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
                6 => sprintf( __('Slider published. <a href="%s">View Slider</a>'), esc_url( get_permalink($post_ID) ) ),
                7 => __('Slider saved.'),
                8 => sprintf( __('Slider submitted. <a target="_blank" href="%s">Preview Slider</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
                9 => sprintf( __('Slider scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Slider</a>'),
                  // translators: Publish box date format, see http://php.net/date
                  date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
                10 => sprintf( __('Slider draft updated. <a target="_blank" href="%s">Preview Slider</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
        );

        return $messages;

}

/*-----------------------------------------------------------------------------------*/
/*	All the pre-made messages for the Testimonial Custom script
/*-----------------------------------------------------------------------------------*/

function tk_change_slider_text($translation, $text, $domain) {
        global $post;

        if (@$post->post_type == 'slider') {

            switch ( $translation ) {

                case 'Set featured image' :

                    $translation = __( 'Set slider picture', $domain );
                    break;
                case 'Featured Image' :

                    $translation = __( 'Slider picture (988px x 350px)', $domain );
                    break;

                case 'Enter title here' :

                    $translation = __( 'Enter slider name', $domain );
                    break;
            }

        }

	return $translation;
}


add_action( 'init', 'tk_create_post_type_sliders' );
add_filter('post_updated_messages', 'tk_slider_updated_messages');
add_filter('gettext', 'tk_change_slider_text', 10, 4);

?>
