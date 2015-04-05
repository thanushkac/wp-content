<?php

/*
 * This template is for setting the theme
 * by Bilhasry Ramadhony
 */

/**
     * Execute this only once when activated the theme
     * @author Onnay Okheng
     */
    function first_run_options() {
        $check = get_option('theme_name_activation_check');

        if ( $check != "set" ) {
            // Add marker so it doesn't run in future
            update_option('theme_name_activation_check', "set");
            make_page_template();

            if (! is_dir( WP_CONTENT_UPLOADS_BG_DIR )){
                //mkdir(TK_USER_UPLOAD_DIR, 0755);
                mkdir( WP_CONTENT_UPLOADS_DIR . 'background/', 0755);
               // mkdir( WP_CONTENT_UPLOADS_DIR . 'cache/', 0755);
            }
        }
    }
    add_action('init', 'first_run_options');
    
    /* funtion to create 2 template page files */
    /* 1 . Locate Store Template page in template-store.php
     * 2 . Blog List in template-blog_list.php 
     * by Bilhasry Ramadhony
     */
    function make_page_template()
    {
    global $wpdb;
    $pages=array(
            'blog-page'=>array(
                'name'      => 'blog',
		'title'     => __( 'Blog', 'tokokoo' ),
                'content'   => '',
                'template'  => 'template-blog.php'
            )
    );
    $newpage=false;
    
    foreach($pages as $page){
        
        $confirm_page_id = $wpdb->get_var("SELECT id FROM `" . $wpdb->posts . "` WHERE `post_name` = '" . $page['name'] . "'	AND `post_type` != 'revision'");
        
        if(empty($confirm_page_id)):
            $confirm_page_id    = wp_insert_post(array(
                                'post_title' 	=>	$page['title'],
                                'post_type' 	=>	'page',
                                'post_name'	=>	$page['name'],
                                'comment_status'=>	'closed',
                                'ping_status' 	=>	'closed',
                                'post_content' 	=>	$page['content'],
                                'post_status' 	=>	'publish',
                                'post_author' 	=>	1,
                                'menu_order'	=>	0

        ));
        add_post_meta($confirm_page_id, '_wp_page_template', $page['template']);
        $newpage=true;

    endif;
    }

    }
?>
