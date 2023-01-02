<?php
/**
 * Plugin Name:       My Basics Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

/**
 * Exit if accessed directly
 */
defined( 'ABSPATH' ) || exit;

define( "TEXTDOMAIN", "basicplugin" );

class BasicPlugin {

    function __construct() {
        add_action( "plugin_loaded", array( $this, "init" ) );
    }
    // Class Init Action Method
    function init() {
        // Fire on plugins load and ready the textdomain for the plugin.
        $this->basicplugin_load_textdomain();
        // Fire on active the plugin
        register_activation_hook( __FILE__, array( $this, "basicplugin_activation_callback" ) );
        // Fire on deactive the plugin
        register_deactivation_hook( __FILE__, array( $this, "basicplugin_deactivation_callback" ) );

    }

    function basicplugin_activation_callback() {

    }
    function basicplugin_deactivation_callback() {

    }
    function basicplugin_load_textdomain() {
        load_plugin_textdomain( TEXTDOMAIN, false, dirname( __FILE__ ) . "/languages" );
    }

}
// Instantiate Class
$basicplugin = new BasicPlugin();