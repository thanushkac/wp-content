<?php
class bgiiwpve_add_button {

var $pluginname = 'bgiiwpve';
var $path = '';
var $internalVersion = 200;

function bgiiwpve_add_button() {
	// Set path to editor_plugin.js
	$this->path = plugins_url( '/', __FILE__ );
	// Modify the version when tinyMCE plugins are changed.
	add_filter('tiny_mce_version', array (&$this, 'change_tinymce_version') );
	// init process for button control
	add_action('init', array (&$this, 'bgiiwpve_add_buttons') );
}

function bgiiwpve_add_buttons() {
	// Don't bother doing this stuff if the current user lacks permissions
	if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') )
	return;
	
	// Add only in Rich Editor mode
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", array (&$this, 'add_tinymce_plugin' ), 5);
		add_filter('mce_buttons', array (&$this, 'register_button' ), 5);}
}
	
	function register_button($buttons) {
		array_push($buttons, 'separator', $this->pluginname );
		return $buttons;}
	
	function add_tinymce_plugin($plugin_array) {
		$plugin_array[$this->pluginname] = $this->path . 'editor_plugin.js';
		return $plugin_array;}
	
	function change_tinymce_version($version) {
		$version = $version + $this->internalVersion;
		return $version;}
}

// Call it now
$tinymce_button = new bgiiwpve_add_button ();
?>