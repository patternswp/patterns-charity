<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Charity functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Charity
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_CHARITY_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_CHARITY_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_CHARITY_VERSION', '2.0.0' );
define( 'PATTERNS_CHARITY_THEME_NAME', 'patterns-charity' );
define( 'PATTERNS_CHARITY_OPTION_NAME', 'patterns-charity' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_CHARITY_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_charity_run() {
	new Patterns_Charity();
}
patterns_charity_run();
