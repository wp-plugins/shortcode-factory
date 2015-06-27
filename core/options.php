<?php
// create custom plugin settings menu
add_action('admin_menu', 'scf_create_menu');

function scf_create_menu() {

	//create new top-level menu
	add_menu_page('Shortcode Factory Settings', 'Shortcode Factory', 'manage_options', __FILE__, 'scf_settings_page', SCF_IMGURL.'/icon-scfactory24x24.png');

	//call register settings function
	add_action( 'admin_init', 'scf_register_settings' );
}


function scf_register_settings() {
	//register our settings
	register_setting('scf-settings', 'options');
}

function scf_settings_page() {
	include(SCF_UI."/options/default.php");
}
