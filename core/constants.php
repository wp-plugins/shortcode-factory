<?php
/*
 * File: /core/constants.php
 *
 * All constants and fixed resources
 */

define('SCF_VERSION', '1.1.1');
define('SCF_FULLNAME', 'Shortcode Factory');
define('SCF_SHORTNAME', 'scfactory');
define('SCF_INITIALS', 'scf_');
define('SCF_TEXTDOMAIN', 'shortcode-factory');

// Paths
define('SCF_FOLDER', basename(SCF_PATH));
define('SCF_JS', SCF_PATH.'/js');
define('SCF_UI', SCF_PATH.'/ui');
define('SCF_LIB', SCF_CORE.'/lib');

// URLs
define('SCF_JSURL', SCF_URL.'js');
define('SCF_IMGURL', SCF_URL.'img');
define('SCF_CSSURL', SCF_URL.'css');
