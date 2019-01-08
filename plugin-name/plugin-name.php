<?php
/**
 * Plugin Name: Plugin name
 * Plugin URI: https://example.com/plugin-name
 * Description: Description of the plugin.
 * Author: Your name
 * Author URI: https://example.com
 * Version: 1.0.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: plugin-name
 *
 * @package   PluginPackage
 * @author    Your Name
 * @copyright 2019 Your Name or Company Name
 * @license   GPL-2.0+
 */

/* PHP namespace autoloader */
require_once( dirname( __FILE__ ) . '/autoloader.php' );

add_action( 'plugins_loaded', array( '\PluginName\Loader', 'init' ), 5 );
