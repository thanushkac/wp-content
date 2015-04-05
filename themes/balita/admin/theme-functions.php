<?php

/* These are functions specific to the included option settings and this theme */


/*-----------------------------------------------------------------------------------*/
/* Output Custom CSS from theme options
/*-----------------------------------------------------------------------------------*/

function tk_head_css() {

		$output	= '';
		
		$custom_css = get_option(TK.'_custom_css', '');
		
		if ($custom_css != '') {
			$output .= $custom_css . "\n";
		}
		
		// Output styles
		if ($output != '') {
			$output = "<!-- Custom Styling -->\n<style type=\"text/css\">\n" . $output . "</style>\n";
			echo $output;
		}
	
}

add_action('wp_head', 'tk_head_css');


/*-----------------------------------------------------------------------------------*/
/* Add Favicon
/*-----------------------------------------------------------------------------------*/

function tk_favicon() {
	if (get_option(TK . '_custom_favicon') != '') {
	echo '<link rel="shortcut icon" href="'. get_option(TK.'_custom_favicon') .'"/>'."\n";
	}
	else { ?>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/admin/images/favicon.ico" />
	<?php }
}

add_action('wp_head', 'tk_favicon');


/*-----------------------------------------------------------------------------------*/
/* Show analytics code in footer */
/*-----------------------------------------------------------------------------------*/

function tk_analytics(){
	$output = get_option(TK . '_google_analytics');
	if ( $output <> "" ) 
		echo stripslashes($output) . "\n";
}
add_action('wp_footer','tk_analytics');


/*-----------------------------------------------------------------------------------*/
/*	Helpful function to see if a number is a multiple of another number
/*-----------------------------------------------------------------------------------*/

function is_multiple($number, $multiple){ 
    return ($number % $multiple) == 0; 
}


/*-----------------------------------------------------------------------------------*/
/* Options Title Site - tk_title_site */
/*-----------------------------------------------------------------------------------*/

function tk_title_site(){
        $separator  = (get_option(TK.'_seo_separator', '&raquo;') == '')? '&raquo;' : get_option(TK.'_seo_separator');
    
        if (is_home () ) { 
            bloginfo('name'); echo ' '.$separator.' '; bloginfo('description');
            
        } elseif ( is_category() ) { 
            single_cat_title(); echo ' '.$separator.' '; bloginfo('name'); echo ' '.$separator.' '; bloginfo('description');

        } elseif (is_single() ) {
            single_post_title(); echo ' '.$separator.' '; bloginfo('name'); echo ' '.$separator.' '; bloginfo('description'); 
            
        } elseif (is_page() ) {
            single_post_title(); echo ' '.$separator.' '; bloginfo('name'); echo ' '.$separator.' '; bloginfo('description');           
            
        } else { 
            wp_title('',true); 
            
        }
}


/*-----------------------------------------------------------------------------------*/
/* Options Meta Keywords Site - tk_keywords_site */
/*-----------------------------------------------------------------------------------*/

function tk_keywords_site(){
    
    $keywords           = get_option(TK.'_seo_keyword_home');
    $keywords_single    = get_option(TK.'_seo_keyword_single');
        
        
    if(is_home()){
        
        if(!empty($keywords)){
            echo '<meta name="keywords" content="'.$keywords.'"/>'."\n";
        }
        
    } elseif(is_single()){
        
        if(!empty($keywords_single)){
            echo '<meta name="keywords" content="'.$keywords_single.'"/>'."\n";
        }elseif(!empty($keywords)){
            echo '<meta name="keywords" content="'.$keywords.'"/>'."\n";
        }
    }
    
}



/*-----------------------------------------------------------------------------------*/
/* Options Meta Description Site - tk_description_site */
/*-----------------------------------------------------------------------------------*/

function tk_description_site(){
    
    $desc           = get_option(TK.'_seo_desc_home');
    $desc_single    = get_option(TK.'_seo_desc_single');
    $blogdesc       = get_option('blogdescription');
        
    if(is_home()){
        
        if(!empty($desc)){
            echo '<meta name="description" content="'.$keywords.'"/>'."\n";
        }elseif(!empty($blogdesc)){
            echo '<meta name="description" content="'.get_option('blogdescription').'"/>'."\n";            
        }
        
    } elseif(is_single()){
        
        if(!empty($desc_single)){
            echo '<meta name="description" content="'.$keywords_single.'"/>'."\n";
        }elseif(!empty($desc)){
            echo '<meta name="description" content="'.$keywords.'"/>'."\n";
        }elseif(!empty($blogdesc)){
            echo '<meta name="description" content="'.get_option('blogdescription').'"/>'."\n";            
        }
    }
    
}

/*-----------------------------------------------------------------------------------*/
/* Options Meta nofollow index - tk_head_follow */
/*-----------------------------------------------------------------------------------*/

function tk_head_follow() {
    // Output robots
    echo "<meta name='robots' content='noindex, nofollow'/> ";

}


/*-----------------------------------------------------------------------------------*/
/* Adding IE6 Block
/*-----------------------------------------------------------------------------------*/

function tk_IE_block_html(){
    
    $output = '<!-- IE Alert -->
                <div id="block">
                    <div class="block-content">
                        <div class="msx">
                            Your browser is outdated, please upgrade your browser
                        </div>
                        <a class="safari" href="http://www.apple.com/safari/download/">Safari</a>
                        <a class="chrome" href="http://www.google.com/chrome/">Chrome</a>
                        <a class="fx" href="http://www.mozilla.com/firefox/">Firefox</a>
                        <a class="opera" href="http://opera.com/download">Opera</a>
                        <a class="ie" href="http://windows.microsoft.com/en-US/internet-explorer/downloads/ie">IE</a>
                        <a class="kill">x</a>
                    </div>
                </div>';
    
    if((get_option('tk_ie_warning', 'false') == 'true') && !is_admin())
        echo $output;
}
add_action('wp_footer','tk_IE_block_html');


function tk_IE_block_style(){
    
    $outputie6  = "\n".'<!--[if lte IE 6]><link href="'.TK_CSS_URL.'/old-ie.css" rel="stylesheet" /><![endif]-->';
    $outputie7  = "\n".'<!--[if gte IE 7]><link href="'.TK_CSS_URL.'/ie.css" rel="stylesheet" /><![endif]-->'."\n";
    
    if((get_option('tk_ie_warning', 'false') == 'true') && !is_admin())
        echo $outputie6;
	echo $outputie7;
}
add_action('wp_head','tk_IE_block_style');




?>
