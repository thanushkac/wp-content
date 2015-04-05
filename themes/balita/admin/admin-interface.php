<?php

/*-----------------------------------------------------------------------------------*/
/* Options Admin Interface - tokokoo_add_admin */
/*-----------------------------------------------------------------------------------*/

// Load static framework options pages 
$functions_path = TK_FILEPATH . '/admin/';

function tokokoo_add_admin() {

    global $query_string, $_wp_last_object_menu;
    
    $themename =  get_option('tk_themename');
    $shortname =  get_option('tk_shortname');
   
    if ( isset($_REQUEST['page']) && $_REQUEST['page'] == 'tokokoo' ) {
		if (isset($_REQUEST['tk_save']) && 'reset' == $_REQUEST['tk_save']) {
			$options =  get_option('tk_template');
			tk_reset_options($options,'tokokoo');
			header("Location: admin.php?page=tokokoo&reset=true");
			die;
		}
    }
        $_wp_last_object_menu++;

        add_menu_page('Tokokoo Settings', $themename, 'edit_theme_options', 'tokokoo', 'tokokoo_options_page', '', $_wp_last_object_menu);
        add_submenu_page('tokokoo', $themename, 'Theme Options', 'edit_theme_options', 'tokokoo', 'tokokoo_options_page'); // Default
	
} 

add_action('admin_menu', 'tokokoo_add_admin');

add_action("admin_print_scripts", 'tk_load_only');
add_action("admin_print_styles",  'tk_style_only');


/*-----------------------------------------------------------------------------------*/
/* Options Reset Function - tk_reset_options */
/*-----------------------------------------------------------------------------------*/

function tk_reset_options($options,$page = ''){

	global $wpdb;
	$query_inner = '';
	$count = 0;
	
	$excludes = array( 'blogname' , 'blogdescription' );
	
	foreach($options as $option){
			
		if(isset($option['id'])){ 
			$count++;
			$option_id = $option['id'];
			$option_type = $option['type'];
			
			//Skip assigned id's
			if(in_array($option_id,$excludes)) { continue; }
			
			if($count > 1){ $query_inner .= ' OR '; }
			if($option_type == 'multicheck'){
				$multicount = 0;
				foreach($option['options'] as $option_key => $option_option){
					$multicount++;
					if($multicount > 1){ $query_inner .= ' OR '; }
					$query_inner .= "option_name = '" . $option_id . "_" . $option_key . "'";
					
				}
				
			} else if(is_array($option_type)) {
				$type_array_count = 0;
				foreach($option_type as $inner_option){
					$type_array_count++;
					$option_id = $inner_option['id'];
					if($type_array_count > 1){ $query_inner .= ' OR '; }
					$query_inner .= "option_name = '$option_id'";
				}
				
			} else {
				$query_inner .= "option_name = '$option_id'";
			}
		}
			
	}
	
	//When Theme Options page is reset - Add the tk_options option
	if($page == 'tokokoo'){
		$query_inner .= " OR option_name = 'tk_options'";
	}
	
	//echo $query_inner;
	
	$query = "DELETE FROM $wpdb->options WHERE $query_inner";
	$wpdb->query($query);
		
}


/*-----------------------------------------------------------------------------------*/
/* Build the Options Page - tokokoo_options_page */
/*-----------------------------------------------------------------------------------*/

function tokokoo_options_page(){
    $options =  get_option('tk_template');
    $themename =  get_option('tk_themename');
    
?>

<div class="wrap" id="tk_container">
  <div id="tk-popup-save" class="tk-save-popup">
    <div class="tk-save-save">Options Updated</div>
  </div>
  <div id="tk-popup-reset" class="tk-save-popup">
    <div class="tk-save-reset">Options Reset</div>
  </div>
  <form action="" enctype="multipart/form-data" id="ofform">
    <div id="header">
      <div class="logo">
        <h2><?php echo $themename; ?></h2>
      </div>
      <div class="icon-option"> </div>
	  <div class="support"><a href="http://tokokoo.com/support/" target="_blank">Support</a> | <a href="http://tokokoo.com/kbase/" target="_blank">Knowledge Base</a></div>
      <div class="clear"></div>
    </div>
    <?php 
		// Rev up the Options Machine
        $return = tokokoo_machine($options);
        ?>
    <div id="main">
      <div id="tk-nav">
        <ul>
          <?php echo $return[1] ?>
        </ul>
      </div>
      <div id="content"> <?php echo $return[0]; /* Settings */ ?> </div>
      <div class="clear"></div>
    </div>
    <div class="save_bar_top">
    <img style="display:none" src="<?php echo get_stylesheet_directory_uri(); ?>/admin/images/loading-bottom.gif" class="ajax-loading-img ajax-loading-img-bottom" alt="Working..." />
    <input type="submit" value="Save All Changes" class="button-primary" />
  </form>
  <form action="<?php echo esc_attr( $_SERVER['REQUEST_URI'] ) ?>" method="post" style="display:inline" id="ofform-reset">
    <span class="submit-footer-reset">
    <input name="reset" type="submit" value="Reset Options" class="button submit-button reset-button" onclick="return confirm('Click OK to reset. Any settings will be lost!');" />
    <input type="hidden" name="tk_save" value="reset" />
    </span>
  </form>
</div>
<?php  if (!empty($update_message)) echo $update_message; ?>
<div style="clear:both;"></div>
</div>
<!--wrap-->
<?php
}


/*-----------------------------------------------------------------------------------*/
/* Load required styles for Options Page - tk_style_only */
/*-----------------------------------------------------------------------------------*/

function tk_style_only() {
	wp_enqueue_style('admin-style', TK_DIRECTORY.'/admin/admin-style.css');
	wp_enqueue_style('color-picker', TK_DIRECTORY.'/admin/css/colorpicker.css');
}	


/*-----------------------------------------------------------------------------------*/
/* Load required javascripts for Options Page - tk_load_only */
/*-----------------------------------------------------------------------------------*/

function tk_load_only() {

	add_action('admin_head', 'tk_admin_head');
	
	wp_enqueue_script('jquery-ui-core');
	wp_register_script('jquery-input-mask', TK_DIRECTORY.'/admin/js/jquery.maskedinput-1.2.2.js', array( 'jquery' ));
	wp_enqueue_script('jquery-input-mask');
	wp_enqueue_script('color-picker', TK_DIRECTORY.'/admin/js/colorpicker.js', array('jquery'));
	wp_enqueue_script('ajaxupload', TK_DIRECTORY.'/admin/js/ajaxupload.js', array('jquery'));

}

function tk_admin_head() {
?>
  
<script type="text/javascript" language="javascript">
		jQuery(document).ready(function(){
			
		// Race condition to make sure js files are loaded
		if (typeof AjaxUpload != 'function') { 
		 return ++counter < 6 && window.setTimeout(init, counter * 500);
		}
		
			//Color Picker
			<?php $options = get_option('tk_template');
			
			foreach($options as $option){ 
			if($option['type'] == 'color' OR $option['type'] == 'typography' OR $option['type'] == 'border'){
				if($option['type'] == 'typography' OR $option['type'] == 'border'){
					$option_id = $option['id'];
					$temp_color = get_option($option_id);
					$option_id = $option['id'] . '_color';
					$color = $temp_color['color'];
				}
				else {
					$option_id = $option['id'];
					$color = get_option($option_id);
				}
				?>
				 jQuery('#<?php echo $option_id; ?>_picker').children('div').css('backgroundColor', '<?php echo $color; ?>');    
				 jQuery('#<?php echo $option_id; ?>_picker').ColorPicker({
					color: '<?php echo $color; ?>',
					onShow: function (colpkr) {
						jQuery(colpkr).fadeIn(500);
						return false;
					},
					onHide: function (colpkr) {
						jQuery(colpkr).fadeOut(500);
						return false;
					},
					onChange: function (hsb, hex, rgb) {
						//jQuery(this).css('border','1px solid red');
						jQuery('#<?php echo $option_id; ?>_picker').children('div').css('backgroundColor', '#' + hex);
						jQuery('#<?php echo $option_id; ?>_picker').next('input').attr('value','#' + hex);
						
					}
				  });
			  <?php } } ?>
		 
		});
		
		</script>
		
		<?php
		//AJAX Upload
		?>
<script type="text/javascript">
			jQuery(document).ready(function(){
			
			var flip = 0;
				
			jQuery('#expand_options').click(function(){
				if(flip == 0){
					flip = 1;
					jQuery('#tk_container #tk-nav').hide();
					jQuery('#tk_container #content').width(755);
					jQuery('#tk_container .group').add('#tk_container .group h2').show();
	
					jQuery(this).text('[-]');
					
				} else {
					flip = 0;
					jQuery('#tk_container #tk-nav').show();
					jQuery('#tk_container #content').width(595);
					jQuery('#tk_container .group').add('#tk_container .group h2').hide();
					jQuery('#tk_container .group:first').show();
					jQuery('#tk_container #tk-nav li').removeClass('current');
					jQuery('#tk_container #tk-nav li:first').addClass('current');
					
					jQuery(this).text('[+]');
				
				}
			
			});
			
				jQuery('.group').hide();
				jQuery('.group:first').fadeIn();
				
				jQuery('.group .collapsed').each(function(){
					jQuery(this).find('input:checked').parent().parent().parent().nextAll().each( 
						function(){
           					if (jQuery(this).hasClass('last')) {
           						jQuery(this).removeClass('hidden');
           						return false;
           					}
           					jQuery(this).filter('.hidden').removeClass('hidden');
           				});
           		});
           					
				jQuery('.group .collapsed input:checkbox').click(unhideHidden);
				
				function unhideHidden(){
					if (jQuery(this).attr('checked')) {
						jQuery(this).parent().parent().parent().nextAll().removeClass('hidden');
					}
					else {
						jQuery(this).parent().parent().parent().nextAll().each( 
							function(){
           						if (jQuery(this).filter('.last').length) {
           							jQuery(this).addClass('hidden');
									return false;
           						}
           						jQuery(this).addClass('hidden');
           					});
           					
					}
				}
				
				jQuery('.tk-radio-img-img').click(function(){
					jQuery(this).parent().parent().find('.tk-radio-img-img').removeClass('tk-radio-img-selected');
					jQuery(this).addClass('tk-radio-img-selected');
					
				});
				jQuery('.tk-radio-img-label').hide();
				jQuery('.tk-radio-img-img').show();
				jQuery('.tk-radio-img-radio').hide();
				jQuery('#tk-nav li:first').addClass('current');
				jQuery('#tk-nav li a').click(function(evt){
				
						jQuery('#tk-nav li').removeClass('current');
						jQuery(this).parent().addClass('current');
						
						var clicked_group = jQuery(this).attr('href');
		 
						jQuery('.group').hide();
						
							jQuery(clicked_group).fadeIn();
		
						evt.preventDefault();
						
					});
				
				if('<?php if(isset($_REQUEST['reset'])) { echo $_REQUEST['reset'];} else { echo 'false';} ?>' == 'true'){
					
					var reset_popup = jQuery('#tk-popup-reset');
					reset_popup.fadeIn();
					window.setTimeout(function(){
						   reset_popup.fadeOut();                        
						}, 2000);
						//alert(response);
					
				}
					
			//Update Message popup
			jQuery.fn.center = function () {
				this.animate({"top":( jQuery(window).height() - this.height() - 200 ) / 2+jQuery(window).scrollTop() + "px"},100);
				this.css("left", 250 );
				return this;
			}
		
			
			jQuery('#tk-popup-save').center();
			jQuery('#tk-popup-reset').center();
			jQuery(window).scroll(function() { 
			
				jQuery('#tk-popup-save').center();
				jQuery('#tk-popup-reset').center();
			
			});
			
			
		
			//AJAX Upload
			jQuery('.image_upload_button').each(function(){
			
			var clickedObject = jQuery(this);
			var clickedID = jQuery(this).attr('id');	
			new AjaxUpload(clickedID, {
				  action: '<?php echo admin_url("admin-ajax.php"); ?>',
				  name: clickedID, // File upload name
				  data: { // Additional data to send
						action: 'tk_ajax_post_action',
						type: 'upload',
						data: clickedID },
				  autoSubmit: true, // Submit file after selection
				  responseType: false,
				  onChange: function(file, extension){},
				  onSubmit: function(file, extension){
						clickedObject.text('Uploading'); // change button text, when user selects file	
						this.disable(); // If you want to allow uploading only 1 file at time, you can disable upload button
						interval = window.setInterval(function(){
							var text = clickedObject.text();
							if (text.length < 13){	clickedObject.text(text + '.'); }
							else { clickedObject.text('Uploading'); } 
						}, 200);
				  },
				  onComplete: function(file, response) {
				   
					window.clearInterval(interval);
					clickedObject.text('Upload Image');	
					this.enable(); // enable upload button
					
					// If there was an error
					if(response.search('Upload Error') > -1){
						var buildReturn = '<span class="upload-error">' + response + '</span>';
						jQuery(".upload-error").remove();
						clickedObject.parent().after(buildReturn);
					
					}
					else{
						var buildReturn = '<img class="hide tk-option-image" id="image_'+clickedID+'" src="'+response+'" alt="" />';

						jQuery(".upload-error").remove();
						jQuery("#image_" + clickedID).remove();	
						clickedObject.parent().after(buildReturn);
						jQuery('img#image_'+clickedID).fadeIn();
						clickedObject.next('span').fadeIn();
						clickedObject.parent().prev('input').val(response);
					}
				  }
				});
			
			});
			
			//AJAX Remove (clear option value)
			jQuery('.image_reset_button').click(function(){
			
					var clickedObject = jQuery(this);
					var clickedID = jQuery(this).attr('id');
					var theID = jQuery(this).attr('title');	
	
					var ajax_url = '<?php echo admin_url("admin-ajax.php"); ?>';
				
					var data = {
						action: 'tk_ajax_post_action',
						type: 'image_reset',
						data: theID
					};
					
					jQuery.post(ajax_url, data, function(response) {
						var image_to_remove = jQuery('#image_' + theID);
						var button_to_hide = jQuery('#reset_' + theID);
						image_to_remove.fadeOut(500,function(){ jQuery(this).remove(); });
						button_to_hide.fadeOut();
						clickedObject.parent().prev('input').val('');
						
						
						
					});
					
					return false; 
					
				});   	 	
			
			//Save everything else
			jQuery('#ofform').submit(function(){
				
					function newValues() {
					  var serializedValues = jQuery("#ofform").serialize();
					  return serializedValues;
					}
					jQuery(":checkbox, :radio").click(newValues);
					jQuery("select").change(newValues);
					jQuery('.ajax-loading-img').fadeIn();
					var serializedReturn = newValues();
					 
					var ajax_url = '<?php echo admin_url("admin-ajax.php"); ?>';
				
					 //var data = {data : serializedReturn};
					var data = {
						<?php if(isset($_REQUEST['page']) && $_REQUEST['page'] == 'tokokoo'){ ?>
						type: 'options',
						<?php } ?>

						action: 'tk_ajax_post_action',
						data: serializedReturn
					};
					
					jQuery.post(ajax_url, data, function(response) {
						var success = jQuery('#tk-popup-save');
						var loading = jQuery('.ajax-loading-img');
						loading.fadeOut();  
						success.fadeIn();
						window.setTimeout(function(){
						   success.fadeOut(); 
						   
												
						}, 2000);
					});
					
					return false; 
					
				});   	 	
				
			});
		</script>
<?php
}


/*-----------------------------------------------------------------------------------*/
/* Ajax Save Action - tk_ajax_callback */
/*-----------------------------------------------------------------------------------*/

add_action('wp_ajax_tk_ajax_post_action', 'tk_ajax_callback');

function tk_ajax_callback() {
	global $wpdb; // this is how you get access to the database
	
		
	$save_type = $_POST['type'];
	//Uploads
	if($save_type == 'upload'){
		
		$clickedID = $_POST['data']; // Acts as the name
		$filename = $_FILES[$clickedID];
       	$filename['name'] = preg_replace('/[^a-zA-Z0-9._\-]/', '', $filename['name']); 
		
		$override['test_form'] = false;
		$override['action'] = 'wp_handle_upload';    
		$uploaded_file = wp_handle_upload($filename,$override);
		 
				$upload_tracking[] = $clickedID;
				update_option( $clickedID , $uploaded_file['url'] );
				
		 if(!empty($uploaded_file['error'])) {echo 'Upload Error: ' . $uploaded_file['error']; }	
		 else { echo $uploaded_file['url']; } // Is the Response
	}
	elseif($save_type == 'image_reset'){
			
			$id = $_POST['data']; // Acts as the name
			global $wpdb;
			$query = "DELETE FROM $wpdb->options WHERE option_name LIKE '$id'";
			$wpdb->query($query);
	
	}	
	elseif ($save_type == 'options' OR $save_type == 'tokokoo') {
		$data = $_POST['data'];
		
		parse_str($data,$output);
		//print_r($output);
		
		//Pull options
        	$options = get_option('tk_template');
		
		foreach($options as $option_array){

			$id = $option_array['id'];
			$old_value = get_option($id);
			$new_value = '';
			
			if(isset($output[$id])){
				$new_value = $output[$option_array['id']];
			}
	
			if(isset($option_array['id'])) { // Non - Headings...

			
					$type = $option_array['type'];
					
					if ( is_array($type)){
						foreach($type as $array){
							if($array['type'] == 'text'){
								$id = $array['id'];
								$std = $array['std'];
								$new_value = $output[$id];
								if($new_value == ''){ $new_value = $std; }
								update_option( $id, stripslashes($new_value));
							}
						}                 
					}
					elseif($new_value == '' && $type == 'checkbox'){ // Checkbox Save
						
						update_option($id,'false');
					}
					elseif ($new_value == 'true' && $type == 'checkbox'){ // Checkbox Save
						
						update_option($id,'true');
					}
					elseif($type == 'multicheck'){ // Multi Check Save
						
						$option_options = $option_array['options'];
						
						foreach ($option_options as $options_id => $options_value){
							
							$multicheck_id = $id . "_" . $options_id;
							
							if(!isset($output[$multicheck_id])){
							  update_option($multicheck_id,'false');
							}
							else{
							   update_option($multicheck_id,'true'); 
							}
						}
					} 
					elseif($type == 'typography'){
							
						$typography_array = array();	
						
						$typography_array['size'] = $output[$option_array['id'] . '_size'];
							
						$typography_array['face'] = stripslashes($output[$option_array['id'] . '_face']);
							
						$typography_array['style'] = $output[$option_array['id'] . '_style'];
							
						$typography_array['color'] = $output[$option_array['id'] . '_color'];
							
						update_option($id,$typography_array);
							
					}
					elseif($type == 'font'){
							
						$typography_array = array();	
							
						$typography_array['face'] = stripslashes($output[$option_array['id'] . '_face']);
							
						update_option($id,$typography_array);
							
					}
					elseif($type == 'ads'){

						$ads_array  = array();
                                                $ads_id     = $output[$option_array['id'] . '_id'];

						$ads_number = $output[$ads_id . '_number'];
                                                $i         = 0;

                                                while($i < $ads_number):

                                                        $data_array['title']    = $output[$ads_id . '_'.$i.'_title'];
                                                        $data_array['link']     = $output[$ads_id . '_'.$i.'_link'];
                                                        $data_array['image']    = $output[$ads_id . '_'.$i.'_image'];
                                                        $data_array['text']     = $output[$ads_id . '_'.$i.'_text'];

                                                        $ads_array[]            = $data_array;

                                                        $i++;

                                                endwhile;

                                                update_option($ads_id, $ads_array);
                                                update_option($ads_id.'_number',$ads_number);


					}
					elseif($type == 'tabs'){

						$tabs_array  = array();
                                                $tabs_id     = $output[$option_array['id'] . '_id'];

						$tabs_number = $output[$tabs_id . '_number'];
                                                $i         = 0;

                                                while($i < $tabs_number):

                                                        $data_array['title']    = $output[$tabs_id . '_'.$i.'_title'];
                                                        $data_array['link']     = $output[$tabs_id . '_'.$i.'_link'];
                                                        $data_array['image']    = $output[$tabs_id . '_'.$i.'_image'];
                                                        $data_array['text']     = $output[$tabs_id . '_'.$i.'_text'];
                                                        $data_array['tagline']  = $output[$tabs_id . '_'.$i.'_tagline'];
                                                        $data_array['author']   = $output[$tabs_id . '_'.$i.'_author'];
                                                        $data_array['button']   = $output[$tabs_id . '_'.$i.'_button'];
                                                        $data_array['tab']      = $output[$tabs_id . '_'.$i.'_tab'];

                                                        $tabs_array[]           = $data_array;

                                                        $i++;

                                                endwhile;

                                                update_option($tabs_id, $tabs_array);
                                                update_option($tabs_id.'_number',$tabs_number);


					}
					elseif($type == 'border'){
							
						$border_array = array();	
						
						$border_array['width'] = $output[$option_array['id'] . '_width'];
							
						$border_array['style'] = $output[$option_array['id'] . '_style'];
							
						$border_array['color'] = $output[$option_array['id'] . '_color'];
							
						update_option($id,$border_array);
							
					}
					elseif($type != 'upload_min'){
					
						update_option($id,stripslashes($new_value));
					}
				}
			}	
	
	}

  die();

}


/*-----------------------------------------------------------------------------------*/
/* Generates The Options Within the Panel - tokokoo_machine */
/*-----------------------------------------------------------------------------------*/

function tokokoo_machine($options) {
    global $tkUtility;
        
    $counter = 0;
	$menu = '';
	$output = '';
	foreach ($options as $value) {
	   
		$counter++;
		$val = '';
		//Start Heading
		 if ( $value['type'] != "heading" ){
		 	$class = ''; if(isset( $value['class'] )) { $class = $value['class']; }
			//$output .= '<div class="section section-'. $value['type'] .'">'."\n".'<div class="option-inner">'."\n";
			$output .= '<div class="section section-'.$value['type'].' '. $class .'">'."\n";
			$output .= '<h3 class="heading">'. $value['name'] .'</h3>'."\n";
			$output .= '<div class="option">'."\n" . '<div class="controls">'."\n";

		 } 
		 //End Heading
		$select_value = '';                                   
		switch ( $value['type'] ) {

		case 'text':
			$val = $value['std'];
			$std = get_option($value['id']);
			if ( $std != "") { $val = $std; }
			$output .= '<input class="tk-input" name="'. $value['id'] .'" id="'. $value['id'] .'" type="'. $value['type'] .'" value="'. stripslashes($val) .'" />';
		break;

		case 'description':
			$output .= $value['std'];
		break;
		
		case 'select':

			$output .= '<select class="tk-input" name="'. $value['id'] .'" id="'. $value['id'] .'">';
		
			$select_value = get_option($value['id']);
			 
			foreach ($value['options'] as $option) {
				
				$selected = '';
				
				 if($select_value != '') {
					 if ( $select_value == $option) { $selected = ' selected="selected"';} 
                                 } else {
					 if ( isset($value['std']) )
						 if ($value['std'] == $option) { $selected = ' selected="selected"'; }
				 }
				  
				 $output .= '<option'. $selected .'>';
				 $output .= $option;
				 $output .= '</option>';
			 
			 } 
			 $output .= '</select>';

			
		break;
		case 'textarea':
			
			$cols = '8';
			$ta_value = '';
			
			if(isset($value['std'])) {
				
				$ta_value = $value['std']; 
				
				if(isset($value['options'])){
					$ta_options = $value['options'];
					if(isset($ta_options['cols'])){
					$cols = $ta_options['cols'];
					} else { $cols = '8'; }
				}
				
			}
				$std = get_option($value['id']);
				if( $std != "") { $ta_value = stripslashes( $std ); }
				$output .= '<textarea class="tk-input" name="'. $value['id'] .'" id="'. $value['id'] .'" cols="'. $cols .'" rows="8">'.$ta_value.'</textarea>';
			
			
		break;
		case "radio":
			
			 $select_value = get_option( $value['id']);
				   
			 foreach ($value['options'] as $key => $option) 
			 { 

				 $checked = '';
				   if($select_value != '') {
						if ( $select_value == $key) { $checked = ' checked'; } 
				   } else {
					if ($value['std'] == $key) { $checked = ' checked'; }
				   }
				$output .= '<input class="tk-input tk-radio" type="radio" name="'. $value['id'] .'" value="'. $key .'" '. $checked .' />' . $option .'<br />';
			
			}
			 
		break;
		case "checkbox": 
		
		   $std = $value['std'];  
		   
		   $saved_std = get_option($value['id']);
		   
		   $checked = '';
			
			if(!empty($saved_std)) {
				if($saved_std == 'true') {
				$checked = 'checked="checked"';
				}
				else{
				   $checked = '';
				}
			}
			elseif( $std == 'true') {
			   $checked = 'checked="checked"';
			}
			else {
				$checked = '';
			}
			$output .= '<input type="checkbox" class="checkbox tk-input" name="'.  $value['id'] .'" id="'. $value['id'] .'" value="true" '. $checked .' />';

		break;
		case "multicheck":
		
			$std =  $value['std'];         
			
			foreach ($value['options'] as $key => $option) {
											 
			$tk_key = $value['id'] . '_' . $key;
			$saved_std = get_option($tk_key);
					
			if(!empty($saved_std)) 
			{ 
				  if($saved_std == 'true'){
					 $checked = 'checked="checked"';  
				  } 
				  else{
					  $checked = '';     
				  }    
			} 
			elseif( $std == $key) {
			   $checked = 'checked="checked"';
			}
			else {
				$checked = '';                                                                                    }
			$output .= '<input type="checkbox" class="checkbox tk-input" name="'. $tk_key .'" id="'. $tk_key .'" value="true" '. $checked .' /><label for="'. $tk_key .'">'. $option .'</label><br />';
										
			}
		break;
		case "upload":
			
			$output .= tokokoo_uploader_function($value['id'],$value['std'],null);
			
		break;
		case "upload_min":
			
			$output .= tokokoo_uploader_function($value['id'],$value['std'],'min');
			
		break;
		
		case "note":
		
			$output .= '<div class="notes"><p>'. $value['message'] .'</p></div>';
			
			
		break;
		
		case "color":
			$val = $value['std'];
			$stored  = get_option( $value['id'] );
			if ( $stored != "") { $val = $stored; }
			$output .= '<div id="' . $value['id'] . '_picker" class="colorSelector"><div></div></div>';
			$output .= '<input class="tk-color" name="'. $value['id'] .'" id="'. $value['id'] .'" type="text" value="'. $val .'" />';
		break;   
		
		case "typography":
		
			$default = $value['std'];
			$typography_stored = get_option($value['id']);
			
			/* Font Size */
			$val = @$default['size'];
			if ( $typography_stored['size'] != "") { $val = $typography_stored['size']; }
			$output .= '<select class="tk-typography tk-typography-size" name="'. $value['id'].'_size" id="'. $value['id'].'_size">';
				for ($i = 9; $i < 71; $i++){ 
					if($val == $i){ $active = 'selected="selected"'; } else { $active = ''; }
					$output .= '<option value="'. $i .'" ' . $active . '>'. $i .'px</option>'; }
			$output .= '</select>';
		
			/* Font Face */
			$val = @$default['face'];
			if ( $typography_stored['face'] != "") 
				$val = $typography_stored['face']; 

			$font01 = ''; 
			$font02 = ''; 
			$font03 = ''; 
			$font04 = ''; 
			$font05 = ''; 
			$font06 = ''; 
			$font07 = ''; 
			$font08 = '';
			$font09 = '';

			if (strpos($val, 'Arial, sans-serif') !== false){ $font01 = 'selected="selected"'; }
			if (strpos($val, 'Verdana, Geneva') !== false){ $font02 = 'selected="selected"'; }
			if (strpos($val, 'Trebuchet') !== false){ $font03 = 'selected="selected"'; }
			if (strpos($val, 'Georgia') !== false){ $font04 = 'selected="selected"'; }
			if (strpos($val, 'Times New Roman') !== false){ $font05 = 'selected="selected"'; }
			if (strpos($val, 'Tahoma, Geneva') !== false){ $font06 = 'selected="selected"'; }
			if (strpos($val, 'Palatino') !== false){ $font07 = 'selected="selected"'; }
			if (strpos($val, 'Helvetica') !== false){ $font08 = 'selected="selected"'; }
			
			$output .= '<select class="tk-typography tk-typography-face" name="'. $value['id'].'_face" id="'. $value['id'].'_face">';
			$output .= '<option value="Arial, sans-serif" '. $font01 .'>Arial</option>';
			$output .= '<option value="Verdana, Geneva, sans-serif" '. $font02 .'>Verdana</option>';
			$output .= '<option value="&quot;Trebuchet MS&quot;, Tahoma, sans-serif"'. $font03 .'>Trebuchet</option>';
			$output .= '<option value="Georgia, serif" '. $font04 .'>Georgia</option>';
			$output .= '<option value="&quot;Times New Roman&quot;, serif"'. $font05 .'>Times New Roman</option>';
			$output .= '<option value="Tahoma, Geneva, Verdana, sans-serif"'. $font06 .'>Tahoma</option>';
			$output .= '<option value="Palatino, &quot;Palatino Linotype&quot;, serif"'. $font07 .'>Palatino</option>';
			$output .= '<option value="&quot;Helvetica Neue&quot;, Helvetica, sans-serif" '. $font08 .'>Helvetica*</option>';
			$output .= '</select>';
			
			/* Font Weight */
			$val = @$default['style'];
			if ( $typography_stored['style'] != "") { $val = $typography_stored['style']; }
				$normal = ''; $italic = ''; $bold = ''; $bolditalic = '';
			if($val == 'normal'){ $normal = 'selected="selected"'; }
			if($val == 'italic'){ $italic = 'selected="selected"'; }
			if($val == 'bold'){ $bold = 'selected="selected"'; }
			if($val == 'bold italic'){ $bolditalic = 'selected="selected"'; }
			
			$output .= '<select class="tk-typography tk-typography-style" name="'. $value['id'].'_style" id="'. $value['id'].'_style">';
			$output .= '<option value="normal" '. $normal .'>Normal</option>';
			$output .= '<option value="italic" '. $italic .'>Italic</option>';
			$output .= '<option value="bold" '. $bold .'>Bold</option>';
			$output .= '<option value="bold italic" '. $bolditalic .'>Bold/Italic</option>';
			$output .= '</select>';
			
			/* Font Color */
			$val = @$default['color'];
			if ( $typography_stored['color'] != "") { $val = $typography_stored['color']; }			
			$output .= '<div id="' . $value['id'] . '_color_picker" class="colorSelector"><div></div></div>';
			$output .= '<input class="tk-color tk-typography tk-typography-color" name="'. $value['id'] .'_color" id="'. $value['id'] .'_color" type="text" value="'. $val .'" />';

		break;  
		
		
		case "font":
		
			$default = $value['std'];
			$typography_stored = get_option($value['id']);
					
			/* Font Face */
			$val = @$default['face'];
			if ( $typography_stored['face'] != "") 
				$val = $typography_stored['face']; 

			$font01 = ''; 
			$font02 = ''; 
			$font03 = ''; 
			$font04 = ''; 
			$font05 = ''; 
			$font06 = ''; 
			$font07 = ''; 
			$font08 = '';
			$font09 = '';
			$font10 = '';

			if (strpos($val, 'Arial, sans-serif') !== false){ $font01 = 'selected="selected"'; }
			if (strpos($val, 'Verdana, Geneva') !== false){ $font02 = 'selected="selected"'; }
			if (strpos($val, 'Trebuchet') !== false){ $font03 = 'selected="selected"'; }
			if (strpos($val, 'Georgia') !== false){ $font04 = 'selected="selected"'; }
			if (strpos($val, 'Times New Roman') !== false){ $font05 = 'selected="selected"'; }
			if (strpos($val, 'Tahoma, Geneva') !== false){ $font06 = 'selected="selected"'; }
			if (strpos($val, 'Palatino') !== false){ $font07 = 'selected="selected"'; }
			if (strpos($val, 'Helvetica') !== false){ $font08 = 'selected="selected"'; }
			if (strpos($val, 'Droid Sans') !== false){ $font09 = 'selected="selected"'; }
			if (strpos($val, 'PT Sans') !== false){ $font10 = 'selected="selected"'; }
			
			$output .= '<select class="tk-typography tk-typography-face" name="'. $value['id'].'_face" id="'. $value['id'].'_face">';
			$output .= '<option value="Arial, sans-serif" '. $font01 .'>Arial</option>';
			$output .= '<option value="Verdana, Geneva, sans-serif" '. $font02 .'>Verdana</option>';
			$output .= '<option value="&quot;Trebuchet MS&quot;, Tahoma, sans-serif"'. $font03 .'>Trebuchet</option>';
			$output .= '<option value="Georgia, serif" '. $font04 .'>Georgia</option>';
			$output .= '<option value="&quot;Times New Roman&quot;, serif"'. $font05 .'>Times New Roman</option>';
			$output .= '<option value="Tahoma, Geneva, Verdana, sans-serif"'. $font06 .'>Tahoma</option>';
			$output .= '<option value="Palatino, &quot;Palatino Linotype&quot;, serif"'. $font07 .'>Palatino</option>';
			$output .= '<option value="&quot;Helvetica Neue&quot;, Helvetica, sans-serif" '. $font08 .'>Helvetica*</option>';
			$output .= '<option value="&quot;Droid Sans&quot;, serif"'. $font07 .'>Droid Sans</option>';
			$output .= '<option value="&quot;PT Sans&quot;, Helvetica, sans-serif" '. $font08 .'>PT Sans</option>';
			$output .= '</select>';
			
		break;  
		
		case "border":
		
			$default = $value['std'];
			$border_stored = get_option( $value['id'] );
			
			/* Border Width */
			$val = @$default['width'];
			if ( $border_stored['width'] != "") { $val = $border_stored['width']; }
			$output .= '<select class="tk-border tk-border-width" name="'. $value['id'].'_width" id="'. $value['id'].'_width">';
				for ($i = 0; $i < 21; $i++){ 
					if($val == $i){ $active = 'selected="selected"'; } else { $active = ''; }
					$output .= '<option value="'. $i .'" ' . $active . '>'. $i .'px</option>'; }
			$output .= '</select>';
			
			/* Border Style */
			$val = @$default['style'];
			if ( $border_stored['style'] != "") { $val = $border_stored['style']; }
				$solid = ''; $dashed = ''; $dotted = '';
			if($val == 'solid'){ $solid = 'selected="selected"'; }
			if($val == 'dashed'){ $dashed = 'selected="selected"'; }
			if($val == 'dotted'){ $dotted = 'selected="selected"'; }
			
			$output .= '<select class="tk-border tk-border-style" name="'. $value['id'].'_style" id="'. $value['id'].'_style">';
			$output .= '<option value="solid" '. $solid .'>Solid</option>';
			$output .= '<option value="dashed" '. $dashed .'>Dashed</option>';
			$output .= '<option value="dotted" '. $dotted .'>Dotted</option>';
			$output .= '</select>';
			
			/* Border Color */
			$val = @$default['color'];
			if ( $border_stored['color'] != "") { $val = $border_stored['color']; }			
			$output .= '<div id="' . $value['id'] . '_color_picker" class="colorSelector"><div></div></div>';
			$output .= '<input class="tk-color tk-border tk-border-color" name="'. $value['id'] .'_color" id="'. $value['id'] .'_color" type="text" value="'. $val .'" />';

		break;   
		
		case "images":
			$i = 0;
			$select_value = get_option( $value['id']);
				   
			foreach ($value['options'] as $key => $option) 
			 { 
			 $i++;

				 $checked = '';
				 $selected = '';
				   if($select_value != '') {
						if ( $select_value == $key) { $checked = ' checked'; $selected = 'tk-radio-img-selected'; }
				    } else {
						if ($value['std'] == $key) { $checked = ' checked'; $selected = 'tk-radio-img-selected'; }
						elseif ($i == 1  && !isset($select_value)) { $checked = ' checked'; $selected = 'tk-radio-img-selected'; }
						elseif ($i == 1  && $value['std'] == '') { $checked = ' checked'; $selected = 'tk-radio-img-selected'; }
						else { $checked = ''; }
					}	
				
				$output .= '<span>';
				$output .= '<input type="radio" id="tk-radio-img-' . $value['id'] . $i . '" class="checkbox tk-radio-img-radio" value="'.$key.'" name="'. $value['id'].'" '.$checked.' />';
				$output .= '<div class="tk-radio-img-label">'. $key .'</div>';
				$output .= '<img src="'.$option.'" alt="" class="tk-radio-img-img '. $selected .'" onClick="document.getElementById(\'tk-radio-img-'. $value['id'] . $i.'\').checked = true;" />';
				$output .= '</span>';
				
			}
		
		break; 
		
		case "info":
			$default = $value['std'];
			$output .= $default;
		break;                                   
		
		case "heading":
			
			if($counter >= 2){
			   $output .= '</div>'."\n";
			}
			$jquery_click_hook = ereg_replace("[^A-Za-z0-9]", "", strtolower($value['name']) );
			$jquery_click_hook = "tk-option-" . $jquery_click_hook;
			$menu .= '<li><a title="'.  $value['name'] .'" href="#'.  $jquery_click_hook  .'">'.  $value['name'] .'</a></li>';
			$output .= '<div class="group" id="'. $jquery_click_hook  .'"><h2>'.$value['name'].'</h2>'."\n";
		break;

                case "ads":

                        $ads_id     = $value['id'];
                        $ads_data   = get_option($ads_id);
                        $ads_number = $value['options']['number'];
                        $cols       = '8';
                        $i          = 0;
                        $no         = 1;

                        while($i < $ads_number):
                                $id      = $ads_id.'_'.$i.'_';
                                $ads_arr = $ads_data[$i];

                                $title   = $ads_arr['title'];
                                $link    = $ads_arr['link'];
                                $image   = $ads_arr['image'];
                                $text    = $ads_arr['text'];

                                $output .= '<div class="wrap"><h3>#'.$no++.' Ads</h3><label for="'. $id.'title' .'">Title:<input class="tk-input" name="'. $id.'title' .'" id="'. $id.'title' .'" type="text" value="'. stripslashes($title) .'" /></label>';
                                $output .= '<label for="'. $id.'link' .'">Link:<input class="tk-input" name="'. $id.'link' .'" id="'. $id.'link' .'" type="text" value="'. stripslashes($link) .'" /></label>';
		                $output .= '<label for="'. $id.'image'.'">Upload image:'.tokokoo_uploader_function($id.'image',$image,null).'</label>';
				$output .= '<label for="'. $id.'text'.'">Custom ads:<textarea class="tk-input" name="'. $id.'text' .'" id="'. $id.'text' .'" cols="'. $cols .'" rows="8">'.stripslashes($text).'</textarea></label></div>';

                                $output .= '<hr/>';

                                $i++;
                        endwhile;

                        $output .= '<input name="'. $ads_id .'_id" type="hidden" value="'. $ads_id .'" />';
                        $output .= '<input name="'. $ads_id .'_number" type="hidden" value="'. $ads_number .'" />';


                break;

                case "tabs":

                        $tabs_id     = $value['id'];
                        $tabs_data   = get_option($tabs_id);
                        $tabs_number = $value['options']['number'];
                        $cols        = '8';
                        $i           = 0;
                        $no          = 1;

                        while($i < $tabs_number):
                                $id      = $tabs_id.'_'.$i.'_';
                                $tabs_arr = $tabs_data[$i];

                                $title   = $tabs_arr['title'];
                                $link    = $tabs_arr['link'];
                                $image   = $tabs_arr['image'];
                                $text    = $tabs_arr['text'];
                                $tagline = $tabs_arr['tagline'];
                                $author  = $tabs_arr['author'];
                                $button  = $tabs_arr['button'];
                                $tab     = $tabs_arr['tab'];

                                $output .= '<div class="wrap"><h3>#'.$no++.' Tab</h3><label for="'. $id.'tab' .'">Tab Name:<input class="tk-input" name="'. $id.'tab' .'" id="'. $id.'tab' .'" type="text" value="'. stripslashes($tab) .'" /></label>';
                                $output .= '<label for="'. $id.'tagline' .'">Tagline:<input class="tk-input" name="'. $id.'tagline' .'" id="'. $id.'tagline' .'" type="text" value="'. stripslashes($tagline) .'" /></label>';
                                $output .= '<label for="'. $id.'title' .'">Title:<input class="tk-input" name="'. $id.'title' .'" id="'. $id.'title' .'" type="text" value="'. stripslashes($title) .'" /></label>';
                                $output .= '<label for="'. $id.'author' .'">Author:<input class="tk-input" name="'. $id.'author' .'" id="'. $id.'author' .'" type="text" value="'. stripslashes($author) .'" /></label>';
				$output .= '<label for="'. $id.'text'.'">Description:<textarea class="tk-input" name="'. $id.'text' .'" id="'. $id.'text' .'" cols="'. $cols .'" rows="8">'.stripslashes($text).'</textarea></label>';
                                $output .= '<label for="'. $id.'button' .'">Text Button:<input class="tk-input" name="'. $id.'button' .'" id="'. $id.'button' .'" type="text" value="'. stripslashes($button) .'" /></label>';
                                $output .= '<label for="'. $id.'link' .'">Link:<input class="tk-input" name="'. $id.'link' .'" id="'. $id.'link' .'" type="text" value="'. stripslashes($link) .'" /></label>';
		                $output .= '<label for="'. $id.'image'.'">Upload image:'.tokokoo_uploader_function($id.'image',$image,null).'</label></div>';

                                $output .= '<hr/>';

                                $i++;
                        endwhile;

                        $output .= '<input name="'. $tabs_id .'_id" type="hidden" value="'. $tabs_id .'" />';
                        $output .= '<input name="'. $tabs_id .'_number" type="hidden" value="'. $tabs_number .'" />';


                break;
            
		} 
		
		// if TYPE is an array, formatted into smaller inputs... ie smaller values
		if ( is_array($value['type'])) {
			foreach($value['type'] as $array){
			
					$id = $array['id']; 
					$std = $array['std'];
					$saved_std = get_option($id);
					if($saved_std != $std){$std = $saved_std;} 
					$meta = $array['meta'];
					
					if($array['type'] == 'text') { // Only text at this point
						 
						 $output .= '<input class="input-text-small tk-input" name="'. $id .'" id="'. $id .'" type="text" value="'. $std .'" />';
						 $output .= '<span class="meta-two">'.$meta.'</span>';
					}
				}
		}
		if ( $value['type'] != "heading" ) { 
			if ( $value['type'] != "checkbox" ) 
				{ 
				$output .= '<br/>';
				}
			if(!isset($value['desc'])){ $explain_value = ''; } else{ $explain_value = $value['desc']; } 
			$output .= '</div><div class="explain">'. $explain_value .'</div>'."\n";
			$output .= '<div class="clear"> </div></div></div>'."\n";
			}
	   
	}
    $output .= '</div>';
    return array($output,$menu);

}


/*-----------------------------------------------------------------------------------*/
/* Options Uploader - tokokoo_uploader_function */
/*-----------------------------------------------------------------------------------*/

function tokokoo_uploader_function($id,$std,$mod){

    //$uploader .= '<input type="file" id="attachement_'.$id.'" name="attachement_'.$id.'" class="upload_input"></input>';
    //$uploader .= '<span class="submit"><input name="save" type="submit" value="Upload" class="button upload_save" /></span>';
    
	$uploader = '';
    $upload = get_option($id);
	
	if($mod != 'min') { 
			$val = $std;
            if ( get_option( $id ) != "") { $val = get_option($id); }
            $uploader .= '<input class="tk-input" name="'. $id .'" id="'. $id .'_upload" type="text" value="'. $val .'" />';
	}
	
	$uploader .= '<div class="upload_button_div"><span class="button image_upload_button" id="'.$id.'">Upload Image</span>';
	
	if(!empty($upload)) {$hide = '';} else { $hide = 'hide';}
	
	$uploader .= '<span class="button image_reset_button '. $hide.'" id="reset_'. $id .'" title="' . $id . '">Remove</span>';
	$uploader .='</div>' . "\n";
    $uploader .= '<div class="clear"></div>' . "\n";
	if(!empty($upload)){
    	$uploader .= '<a class="tk-uploaded-image" href="'. $upload . '">';
    	$uploader .= '<img class="tk-option-image" id="image_'.$id.'" src="'.$upload.'" alt="" />';
    	$uploader .= '</a>';
		}
	$uploader .= '<div class="clear"></div>' . "\n"; 


return $uploader;
}


?>
