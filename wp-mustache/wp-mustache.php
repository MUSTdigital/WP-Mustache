<?php

/**
 * @link              http://mustdigital.ru
 * @since             1.0.0
 * @package           WP_Mustache
 *
 * @wordpress-plugin
 * Plugin Name:       WP Mustache
 * Plugin URI:        http://mustdigital.ru/projects/wp-mustache
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Dmitry Korolev
 * Author URI:        http://mustdigital.ru
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-mustache
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Mustache itself.
 */
if (!class_exists('Mustache_Autoloader')) {
    require plugin_dir_path( __FILE__ ) . 'Mustache/Autoloader.php';
    Mustache_Autoloader::register();
}

/**
 * Helper functions
 */
require plugin_dir_path( __FILE__ ) . 'functions.php';
