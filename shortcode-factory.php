<?php
/*
Plugin Name: Shortcode Factory
Plugin URI: http://wordpress.org/plugins/shortcode-factory
Description: Create short codes for almost everything in the Word Press and use in Pages, Posts or anywhere.
Version: 1.0
Author: WPMadeasy
Author URI: http://wpmadeasy.com
Text Domain: shortcode-factory
License URI: https://www.gnu.org/licenses/gpl-2.0.html
License: GPLv2
*/

/*
 * Full Name: Schortcode Factory
 * Short Name: scfactory
 * Initials: scf_
 */

if(defined('SCF_VERSION')) return;	// Looks like another instance is active.

define('SCF_PATH', dirname(__FILE__));
define('SCF_CORE', SCF_PATH.'/core');
define('SCF_URL', plugin_dir_url( __FILE__ ));

// Core
require SCF_CORE.'/constants.php';
require SCF_CORE.'/functions.php';
require SCF_CORE.'/shortcodes.php';
require SCF_LIB.'/common.php';

// Activate
function scf_activate() {}
register_activation_hook( __FILE__, 'scf_activate' );

// Deactivate
function scf_deactivate() {}
register_deactivation_hook( __FILE__, 'scf_deactivate' );
