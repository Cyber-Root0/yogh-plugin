<?php
/**
 * Plugin Name:     Client Customization
 * Plugin URI:https://www.yogh.com.br/
 * Description:     Plugins with Project Customization
 * Author:          Yogh Soluções
 * Author URI:      https://www.yogh.com.br/
 * Text Domain:     client-customization
 * Domain Path:     /languages
 * Version:         1.0.5
 *
 * @package         Client_Customization
 */
use Cr0\YoghPlugin\App;
// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
die( 'not allowed' );
}
require_once(__DIR__.'/vendor/autoload.php');
/*
* Plugin Initialization
*/
add_action( 'plugins_loaded', [App::class, 'getInstance'] );
