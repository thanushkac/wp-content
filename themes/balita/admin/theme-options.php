<?php

add_action('init','tk_options');

if (!function_exists('tk_options')) {
function tk_options(){
	
// VARIABLES
$themename = TK_THEME;
$shortname = TK;

// Populate option in array for use in theme
global $tk_options;
$tk_options = get_option('tk_options');

$GLOBALS['template_path'] = TK_THEMES_DIR;

//Access the WordPress Categories via an Array
$tk_categories = array();
$tk_categories_obj = get_categories('hide_empty=0');
foreach ($tk_categories_obj as $tk_cat) {
    $tk_categories[$tk_cat->cat_ID] = $tk_cat->cat_name;}
$categories_tmp = array_unshift($tk_categories, "Select a category:");
       
//Access the WordPress Pages via an Array
$tk_pages = array();
$tk_pages_obj = get_pages('sort_column=post_parent,menu_order');
foreach ($tk_pages_obj as $tk_page) {
    $tk_pages[$tk_page->ID] = $tk_page->post_name; }
$tk_pages_tmp = array_unshift($tk_pages, "Select a page:");

// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

//Testing 
$options_select = array("one","two","three","four","five"); 
$options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"); 

//Stylesheets Reader
$alt_stylesheet_path = TK_THEMES_DIR . '/skin/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//Bagckground Sides Reader
$alt_bg_side_path = TK_THEMES_DIR . '/images/bg-side/';
$alt_bg_sides = array();

if ( is_dir($alt_bg_side_path) ) {
    if ($alt_bg_side_dir = opendir($alt_bg_side_path) ) { 
        while ( ($alt_bg_side_file = readdir($alt_bg_side_dir)) !== false ) {
            if(stristr($alt_bg_side_file, ".jpg") !== false) {
                $alt_bg_sides[] = $alt_bg_side_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('tk_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// Set the Options Array
$options = array();



$options[] = array( "name" => __('General Settings','tokokoo'),
                    "type" => "heading");


$options[] = array( "name" => __('Custom Logo','tokokoo'),
					"desc"      => __('Upload a logo for your theme, or specify the image address of your online logo. (http://example.com/logo.png)','tokokoo'),
					"id"        => $shortname."_logo",
					"std"       => "",
					"type"      => "upload");

$options[] = array( "name" => __('Custom Favicon','tokokoo'),
					"desc"      => __('Upload a 16px x 16px Png/Gif image that will represent your website\'s favicon.','tokokoo'),
					"id"        => $shortname."_custom_favicon",
					"std"       => "",
					"type"      => "upload");

$options[] = array( "name" => __('Custom CSS','tokokoo'),
                                        "desc"      => __('Quickly add some CSS to your theme by adding it to this block.','tokokoo'),
					"id"        => $shortname."_custom_css",
					"std"       => "",
					"type"      => "textarea"); 

$options[] = array( "name" => __('Tracking Code','tokokoo'),
					"desc"      => __('Paste your Google Analytics (or other) tracking code here. It will be inserted before the closing body tag of your theme.','tokokoo'),
					"id"        => $shortname."_google_analytics",
					"std"       => "",
					"type"      => "textarea");  

$options[] = array( "name" => __('Footer text','tokokoo'),
					"desc"      => __('Insert your footer text here.','tokokoo'),
					"id"        => $shortname."_footer",
					"std"       => "Tokokoo is an authorized brand for goods and qualities portfolio themes provided by Tokokoo Network.",
					"type"      => "textarea");

$options[] = array( "name" => __('Active IE Warning?','tokokoo'),
					"desc"      => __('Display IE warning for IE6.','tokokoo'),
					"id"        => $shortname."_ie_warning",
					"std"       => "false",
					"type"      => "checkbox");


$options[] = array( "name" => __('Home Page','tokokoo'),
					"type"      => "heading");

$options[] = array( "name" => __('Text Promo Top','tokokoo'),
					"desc"      => __('Input your promotional text here, for display on top every page.','tokokoo'),
					"id"        => $shortname."_promo",
					"std"       => "Psst! Spend $100 and we’ll take care of the shipping for FREE! And a couple other surprises for your little one.",
					"type"      => "textarea");

$options[] = array( "name" => __('Text Promo Main','tokokoo'),
					"desc"      => __('Input your promotional text here, appearing on the front page.','tokokoo'),
					"id"        => $shortname."_promo_middle",
					"std"       => "<strong>Sign up</strong> now and get <strong>$5 OFF</strong>. Receive exclusive savings-packed emails &amp; start saving <strong>TODAY!</strong>",
					"type"      => "textarea");

$options[] = array( "name" => __('Image campaign','tokokoo'),
                                        "desc"      => __('Display your image campaign on home page.','tokokoo'),
					"id"        => $shortname."_ads_home",
					"std"       => "",
					"type"      => "ads",
                                        "options"   => array('id' => 'home', 'number' => 4));


$options[] = array( "name" => __('Feeds and Media','tokokoo'),
					"type"      => "heading");


$options[] = array( "name" => __('RSS feed','tokokoo'),
					"desc"      => __('Insert your RSS/FEED account','tokokoo'),
					"id"        => $shortname."_rss",
					"std"       => "",
					"type"      => "text");
					
$options[] = array( "name" => __('Twitter','tokokoo'),
					"desc"      => __('Insert your twitter account','tokokoo'),
					"id"        => $shortname."_twitter",
					"std"       => "",
					"type"      => "text");
					
$options[] = array( "name" => __('Facebook','tokokoo'),
					"desc"      => __('Insert your facebook link','tokokoo'),
					"id"        => $shortname."_facebook",
					"std"       => "",
					"type"      => "text");
					
$options[] = array( "name" => __('Flickr','tokokoo'),
					"desc"      => __('Insert your flickr link','tokokoo'),
					"id"        => $shortname."_flickr",
					"std"       => "",
					"type"      => "text");
					

$options[] = array( "name" => __('SEO','tokokoo'),
					"type"      => "heading");

$options[] = array( "name" => __('Disable Tokokoo SEO?','tokokoo'),
                                        "desc"      => __('Check this to enable the SEO','tokokoo'),
					"id"        => $shortname."_seo_check",
					"std"       => "false",
					"type"      => "checkbox"
                                );

$options[] = array( "name" => __('Homepage Meta Keywords','tokokoo'),
					"desc"      => __('Enter keywords or phrases separated by commas (ex. shoes, cars, dogs, world domination).','tokokoo'),
					"id"        => $shortname."_seo_keyword_home",
					"std"       => "",
					"type"      => "text");  

$options[] = array( "name" => __('Homepage Meta Description','tokokoo'),
					"desc"      => __('Enter the meta description you want to have appear on the homepage (ex. This is my shop where I sell things like shoes, cars, dogs and I am trying to achieve world domination).','tokokoo'),
					"id"        => $shortname."_seo_desc_home",
					"std"       => "",
					"type"      => "textarea");  

$options[] = array( "name" => __('Singular Meta Keywords','tokokoo'),
					"desc"      => __('Enter keywords or phrases separated by commas (ex. shoes, cars, dogs, world domination).','tokokoo'),
					"id"        => $shortname."_seo_keyword_single",
					"std"       => "",
					"type"      => "text");  

$options[] = array( "name" => __('Singular Meta Description','tokokoo'),
					"desc"      => __('Enter the meta description you want to have appear on the posts and pages (ex. This is my shop where I sell things like shoes, cars, dogs and I am trying to achieve world domination).','tokokoo'),
					"id"        => $shortname."_seo_desc_single",
					"std"       => "",
					"type"      => "textarea");  

$options[] = array( "name" => __('Title separator','tokokoo'),
					"desc"      => __('Enter a character or HTML entity. Default is "|"','tokokoo'),
					"id"        => $shortname."_seo_separator",
					"std"       => "",
					"type"      => "text");  

$options[] = array( "name" => __('Add a "follow" meta tag for all posts?','tokokoo'),
					"desc"      => __('By default, a "nofollow" meta tag is placed on all pages and posts. You can override this setting on pages/posts.','tokokoo'),
					"id"        => $shortname."_seo_follow",
					"std"       => "false",
					"type"      => "checkbox"
                                );

$options[] = array( "name" => __('Facebook Apps Integration','tokokoo'),
					"type"      => "heading");

$options[] = array( "name" => __('How to','tokokoo'),
                                        "desc"      => '',
					"id"        => $shortname."_fb_desc",
					"std"       => "<p>Who doesn’t into Facebook nowadays? This feature enables you to market your products through one of the biggest social networking in the world. Reach the highest sales potential with this Facebook integration feature. Don’t worry, we will guide you how to.</p>
                                            <p>How to activate Facebook Apps Integration widget</p>
                                            <ol>
                                                <li><a href='https://developers.facebook.com/apps' target='_blank'><img src='".TK_DIRECTORY."/admin/images/create-fb-apps.png' alt='create FB Apps' /></a></li>
                                                <li>Copy and paste your <strong>'App ID'</strong> and <strong>'App Secret'</strong> into the form.</li>
                                                <li>Choose <strong>'Page Tab'</strong>, then fill the <strong>'Page Tab Name'</strong> with 'store' or any name you want.</li>
                                                <li><strong>Save</strong>, then hit refresh button.</li>
                                                <li>Fill in the <strong>'Page Tab URL'</strong> with <input type='text' value='".home_url('/')."' disabled /></li>
                                                <li><a href='http://www.facebook.com/pages/create.php' target='_blank'><img src='".TK_DIRECTORY."/admin/images/create-fb-pages.png' alt='create FB page' /></a></li>
                                                <li>Choose your page category, fill the form.</li>
                                                <li><a href='http://www.facebook.com/add.php?api_key=".get_option('tk_fb_appid', '')."&pages' target='_blank'>Activate it</a> in your Facebook page.</li>
                                                <li><strong>Voila!</strong> Your online store is now integrated with its Facebook fan page.</li>
                                            </ol>",
					"type"      => "description");

$options[] = array( "name" => __('App ID','tokokoo'),
                                        "desc"      => __('Insert your Apps Facebook ID','tokokoo'),
					"id"        => $shortname."_fb_appid",
					"std"       => "",
					"type"      => "text");

$options[] = array( "name" => __('Secret Key','tokokoo'),
                                        "desc"      => __('Insert your Secret Apps Key','tokokoo'),
					"id"        => $shortname."_fb_secret",
					"std"       => "",
					"type"      => "text");

update_option('tk_template',$options);
update_option('tk_themename',$themename);
update_option('tk_shortname',$shortname);

}
}
?>
