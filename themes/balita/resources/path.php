<?php
/**
 * Tokokoo Framework
 *
 * @category   Tokokoo
 * @package    AppCloud Premium
 * @copyright  Copyright (c) 2010-2011 Tokokoo
 * @license    http://www.opensource.org/licenses/gpl-2.0.php GNU GPL version 2
 * @version    $Id:$
 *
 * @author Onnay Okheng
 */


//this variable is for determining the template directory
$themesDir = get_option('template');
$themesURL = get_option('siteurl').'/wp-content/themes/'.get_option('template');
$upload_folder = wp_upload_dir();

// initialize url site
define('WP_SITES_URL', get_option('siteurl'));

//initialize dir upload WP
define('WP_CONTENT_UPLOADS_URL', $upload_folder['baseurl'] . '/');
define('WP_CONTENT_UPLOADS_DIR', $upload_folder['basedir'] . '/');

define('TK_THEME', get_option('current_theme'));
define('TKOTHEME', get_option('current_theme'));

define('TK_THEMES_DIR', TEMPLATEPATH);

define('TK', 'tk');
define('PREFIX', 'tk_');

define('TK_FILEPATH', TEMPLATEPATH);
define('TK_DIRECTORY', get_template_directory_uri());

//themes directory name
define ('TK_THEMES_NAME', $themesDir);

//path for resources directory
define ('TK_RESOURCE_DIR', TEMPLATEPATH.'/resources');
define ('TK_RESOURCE_URL', $themesURL.'/resources');
define ('TK_CLASSES_DIR', TEMPLATEPATH.'/resources/classes');
define ('TK_CLASSES_URL', TEMPLATEPATH.'/resources/classes');
define ('TK_POSTTYPE_DIR', TEMPLATEPATH.'/resources/posttype');
define ('TK_POSTTYPE_URL', TEMPLATEPATH.'/resources/posttype');
define ('TK_METABOX_DIR', TEMPLATEPATH.'/resources/metabox');

//path for includes directory
define ('TK_INCLUDES_DIR', TEMPLATEPATH.'/includes');
define ('TK_IMAGE_DIR', TEMPLATEPATH.'/images');
define ('TK_IMAGE_URL', $themesURL.'/images');

// path for language
define ('TK_LANGUAGES_DIR', TEMPLATEPATH.'/languages/');

//path for css directory
define ('TK_CSS_DIR', TEMPLATEPATH.'/css');
define ('TK_CSS_URL', $themesURL.'/css');

//path for skin directory
define ('TK_SKIN_DIR', TEMPLATEPATH.'/skin');
define ('TK_SKIN_URL', $themesURL.'/skin');

//path for admin page
define ('WP_ADMIN_URL', get_option('siteurl').'/wp-admin/' );

//path for uploads WP
define('WP_CONTENT_UPLOADS_BG_DIR', WP_CONTENT_UPLOADS_DIR . "background/");
define('WP_CONTENT_UPLOADS_BG_URL', WP_CONTENT_UPLOADS_URL . "background/");

?>
