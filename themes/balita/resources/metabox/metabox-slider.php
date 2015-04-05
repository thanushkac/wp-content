<?php

    /**
     * @package Tokokoo
     * @author Onnay Okheng (@onnayokheng)
     */

/*-----------------------------------------------------------------------------------*/
/*	Define Metabox Fields
/*-----------------------------------------------------------------------------------*/

$prefix = '_' . PREFIX;

$slider_meta_box = array(
	'id'        => 'tk-slider-meta-box',
	'title'     => 'Link',
	'page'      => 'slider',
	'context'   => 'normal',
	'priority'  => 'high',
	'fields'    => array(
                            array(
                                    'name'      => __('Slider link', 'tokokoo'),
                                    'desc'      => __('Insert your link.', 'tokokoo'),
                                    'id'        => $prefix . 'slider_meta_link',
                                    'type'      => 'text',
                                    'std'       => ''
                            ),
	),

);




/*-----------------------------------------------------------------------------------*/
/*	Add metabox to edit page
/*-----------------------------------------------------------------------------------*/

function tk_add_slider_meta() {
	global $slider_meta_box;

	add_meta_box($slider_meta_box['id'], $slider_meta_box['title'], 'tk_meta_slider', $slider_meta_box['page'], $slider_meta_box['context'], $slider_meta_box['priority']);
        
}
add_action('admin_menu', 'tk_add_slider_meta');


/*-----------------------------------------------------------------------------------*/
/*	Callback function to show fields in meta box
/*-----------------------------------------------------------------------------------*/

function tk_meta_slider() {
	global $slider_meta_box, $post;

	//echo '<p style="padding:10px 0 0 0;">'.__('Entry your link.', 'tokokoo').'</p><pre>';

	echo '<table class="form-table">';

	foreach ($slider_meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
                
		tk_the_metabox($field, $meta);

	}

	echo '</table>';
}




/*-----------------------------------------------------------------------------------*/
/*	Save data when post is edited
/*-----------------------------------------------------------------------------------*/

function tk_save_slider_data($post_id) {
	global $slider_meta_box;
	
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// check permissions
	if ($slider_meta_box['page'] == @$_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}

	foreach ($slider_meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = @$_POST[$field['id']];

		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

}
add_action('save_post', 'tk_save_slider_data');


/*-----------------------------------------------------------------------------------*/
/*	Queue Scripts
/*-----------------------------------------------------------------------------------*/
