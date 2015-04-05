<?php

    /**
     * @package Tokokoo
     * @author Onnay Okheng (@onnayokheng)
     */


/*-----------------------------------------------------------------------------------*/
/*	Load metabox of SLIDE
/*-----------------------------------------------------------------------------------*/
require_once(TK_METABOX_DIR . '/metabox-slider.php');


/**
 * This function is for display checking type from metabox post.
 *
 * @param array $field
 * @param int $meta
 */
function tk_the_metabox($field = array(), $meta = null){

        switch ($field['type']) {

                //If Text
                case 'text':

                        echo '<tr style="border-top:1px solid #eeeeee;">',
                                '<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; line-height: 20px; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
                                '<td>';
                        echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';

                    break;

                //If Text
                case 'textarea':

                        echo '<tr style="border-top:1px solid #eeeeee;">',
                                '<th style="width:25%">
                                    <label for="', $field['id'], '"><strong>', $field['name'],
                                    '</strong><span style=" display:block; color:#999; line-height: 20px; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
                                '<td>';
                        echo '<textarea name="', $field['id'], '" id="', $field['id'], '" style="width:75%; margin-right: 20px; float:left; height:80px;" >', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)),'</textarea>';

                    break;
                
                //If Button
                case 'button':
                        echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
                        echo 	'</td>',
                        '</tr>';

                    break;

                //If Select
                case 'select':

                        echo '<tr style="border-top:1px solid #eeeeee;">',
                        '<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
                        '<td>';

                        echo'<select name="'.$field['id'].'">';

                        foreach ($field['options'] as $option) {

                                echo'<option';
                                if ($meta == $option ) {
                                        echo ' selected="selected"';
                                }
                                echo'>'. $option .'</option>';

                        }

                        echo'</select>';

                    break;
        }
}


?>