<?php
/*
	Plugin Name: Vafpress Framework Plugin
	Plugin URI: http://vafpress.com/vafpress-framework
	Description: Option and Metabox Framework
	Version: 2.0
	Author: Vafpress
	Author URI: http://vafpress.com/
	License: GPLv3
*/

// Setup Contants
defined( 'VP_PLUGIN_VERSION' ) or define( 'VP_PLUGIN_VERSION', '2.0' );
defined( 'VP_PLUGIN_URL' )     or define( 'VP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
defined( 'VP_PLUGIN_DIR' )     or define( 'VP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
defined( 'VP_PLUGIN_FILE' )    or define( 'VP_PLUGIN_FILE', __FILE__ );

// Load Languages
$lang_dir = VP_PLUGIN_DIR . '/lang';
load_theme_textdomain('vp_textdomain', $lang_dir);

// Require Bootstrap
require 'vafpress-framework/bootstrap.php';

/**
 * EOF
 */