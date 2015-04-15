<?php
/*
 * File: /core/functions.php
 *
 * Core functions and handling
 */

function scf_enqueue_scripts() {
	wp_enqueue_style(SCF_SHORTNAME.'-colorbox', SCF_CSSURL.'/colorbox.css');
	wp_enqueue_style(SCF_SHORTNAME.'-core', SCF_CSSURL.'/core.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script(SCF_SHORTNAME.'-colorbox', SCF_JSURL . '/jquery.colorbox-min.js', array('jquery'), null, true);
	wp_enqueue_script(SCF_SHORTNAME.'-core', SCF_JSURL . '/core.js', array('jquery', 'thickbox'), '1.0.0', true);

	wp_localize_script(
		SCF_SHORTNAME.'-core',
		SCF_INITIALS.'ajax',
		array(
			'url' => admin_url('admin-ajax.php' ),
			'tag' => SCF_FULLNAME,
			'i' => SCF_INITIALS,
			'help' => ' - <a href="http://wpscf.com/users-guide/" target="_blank">User Guide</a>'
		)
	);
}
add_action('admin_init', 'scf_enqueue_scripts');

/*
 * Registers all short codes provided in the $shortcodesArray register.
 *
 * $shortcodesArray must comply with the standards as mentioned in /core/shortcodes.php
 */
function scf_register_shortcodes($shortcodesArray) {
	foreach($shortcodesArray as $shortcode) {
		if(function_exists($shortcode[1])) {
			add_shortcode($shortcode[0], $shortcode[1]);
		}
	}
}

function scf_register_builtin_shortcodes() {
	global $scf_builtin_shortcodes;

	scf_register_shortcodes($scf_builtin_shortcodes);
}

/*
 * Register custom button(s) for WP Editor
 */
function scf_custom_buttons($context) {
	$img = SCF_IMGURL . '/icon-scfactory.png';
	$title = SCF_FULLNAME;
	$context .= "<a title='{$title}' class='button' id='".SCF_INITIALS."InsertShortcode' href='#'><img src='{$img}' /> $title</a>";

  return $context;
}
add_action('media_buttons_context',  'scf_custom_buttons');

/*
 * Loads main UI for short codes
 */
function scf_load_shortcodes_ui() {
	global $scf_builtin_shortcodes;

	include(SCF_UI."/main.php");
	wp_die();
}
add_action( 'wp_ajax_scf_load_shortcodes_ui', 'scf_load_shortcodes_ui' );

/*
 * Loads UI for Selected Short Code (if any)
 */
function scf_load_shortcode_ui() {
	if(isset($_REQUEST["ui"]) && !empty($_REQUEST["ui"]))
		include(SCF_UI."/".$_REQUEST["ui"].".php");

	wp_die();
}
add_action( 'wp_ajax_scf_load_shortcode_ui', 'scf_load_shortcode_ui');
