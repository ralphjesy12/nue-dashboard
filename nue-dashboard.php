<?php
/*
Plugin Name: Nue Dashboard
Plugin URI: https://github.com/ralphjesy12/nue-dashboard
Description: A Wordpress Plugin for an innovated WP Admin UI
Version: 1.0.0
Author: Ralph John Galindo
Author URI: https://github.com/ralphjesy12
License: GPLv2 or later
*/
define( 'NUE_DASH_VERSION', '1.0.0' );
define( 'NUE_DASH_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'NUE_DASH_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

register_activation_hook( __FILE__, array( 'Nue', 'activation' ) );
register_deactivation_hook( __FILE__, array( 'Nue', 'deactivation' ) );

require_once( NUE_DASH_PLUGIN_DIR . 'lib/class.nue.php' );
