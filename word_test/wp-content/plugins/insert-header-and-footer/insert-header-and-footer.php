<?php
/**
 * Plugin Name:	Insert Header and Footer
 * Description:	Insert custom codes in header and footer.
 * Version:		1.0
 * Author:		Di Themes
 * Author URI:	https://dithemes.com
 * License:		GPLv2 or later
 * License URI:	http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ihaf
 * Domain Path: /languages
 *
 */

// Exit if directly accessed files.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define constants.

define( 'IHAF_VERSION' , '1.0' );
define( 'IHAF_FILE', __FILE__ );
define( 'IHAF_PATH', wp_normalize_path( plugin_dir_path( IHAF_FILE ) ) );
define( 'IHAF_URL', plugin_dir_url( IHAF_FILE ) );
define( 'IHAF_BASENAME', plugin_basename( IHAF_FILE ) );
define( 'IHAF_DIR_NAME', dirname( IHAF_BASENAME ) );

// Load text domain.
add_action( 'init', 'ihaf_load_textdomain' );
function ihaf_load_textdomain() {
	load_plugin_textdomain( 'ihaf', false, IHAF_PATH . 'languages' );
}

// Load the init file.
require( IHAF_PATH . 'inc/init.php' );
