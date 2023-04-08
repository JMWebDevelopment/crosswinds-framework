<?php
/**
 * This file adds functions to the JM Web Development FSE Starter Theme for WordPress.
 *
 * @package JM Web Development FSE Starter Theme
 * @author  Jacob Martella Web Development
 * @license GNU General Public License v2 or later
 * @link    https://jacobmartella.com/
 */

if ( ! function_exists( 'jm_web_dev_fse_starter_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function jm_web_dev_fse_starter_theme_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'jm-web-dev-fse-starter-theme', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./assets/css/editor-styles.min.css',
				jm_web_dev_fse_starter_theme_fonts_url(),
			)
		);

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'jm_web_dev_fse_starter_theme_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'jm_web_dev_fse_starter_theme_enqueue_style_sheet' );
function jm_web_dev_fse_starter_theme_enqueue_style_sheet() {

	wp_enqueue_style( 'jm-web-dev-fse-starter-theme', get_template_directory_uri() . '/assets/css/global.min.css', array(), wp_get_theme()->get( 'Version' ) );

}

// Enqueue fonts.
add_action( 'wp_enqueue_scripts', 'jm_web_dev_fse_starter_theme_enqueue_fonts' );
function jm_web_dev_fse_starter_theme_enqueue_fonts() {

	wp_enqueue_style( 'jm-web-dev-fse-starter-theme-fonts', jm_web_dev_fse_starter_theme_fonts_url(), array(), null );

}

// Define fonts.
function jm_web_dev_fse_starter_theme_fonts_url() {

	// Allow child themes to disable to the default JM Web Development FSE Starter Theme fonts.
	$dequeue_fonts = apply_filters( 'jm_web_dev_fse_starter_theme_dequeue_fonts', false );

	if ( $dequeue_fonts ) {
		return '';
	}

	$fonts = [];

	// Make a single request for all Google Fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $fonts ) ) . '&display=swap' );
}

function jm_web_dev_fse_starter_theme_search_title() {
	if ( isset( $_GET['s'] ) ) {
		$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
		/* translators: %s: Search term. */
		return isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'jm-web-dev-fse-starter-theme' ), esc_html( $search_term ) ) : __( 'Search results', 'jm-web-dev-fse-starter-theme' );
	}
}

// Include block styles.
register_block_style(
	'core/group',
	array(
		'name'  => 'full-height',
		'label' => __( 'Full-height', 'jm-web-dev-fse-starter-theme' ),
	)
);


// Include block patterns.
/**
 * Registers block patterns, categories, and type.
 *
 * @since 1.0.0
 */
function jm_web_dev_fse_starter_theme_register_block_patterns() {

	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type(
			'jm-web-dev-fse-starter-theme',
			array(
				'label' => __( 'JM Web Dev FSE Starter Theme', 'jm-web-dev-fse-starter-theme' ),
			)
		);
	}

	$block_pattern_categories = array(
		'jm-web-dev-fse-starter-theme-404'  => array(
			'label'         => __( '404', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-archive'  => array(
			'label'         => __( 'Archive', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-callouts'  => array(
			'label'         => __( 'Callouts', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-featured-content'  => array(
			'label'         => __( 'Featured Content', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-feature-blocks'  => array(
			'label'         => __( 'Feature Blocks', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-footer'  => array(
			'label'         => __( 'Footer', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-header'  => array(
			'label'         => __( 'Header', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-hero-sections'  => array(
			'label'         => __( 'Hero Sections', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-links'  => array(
			'label'         => __( 'Links', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-page'  => array(
			'label'         => __( 'Page', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-post-content'  => array(
			'label'         => __( 'Post Content', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-pricing-tables'  => array(
			'label'         => __( 'Pricing Tables', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-queries'  => array(
			'label'         => __( 'Queries', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-search'  => array(
			'label'         => __( 'Search', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-widgets'  => array(
			'label'         => __( 'Widgets', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since 0.8.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'jm_web_dev_fse_starter_theme_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'jm_web_dev_fse_starter_theme_register_block_patterns', 9 );

// Load the functionality to require certain plugins.
include get_template_directory() . '/inc/tgmpa/class-tgm-plugin-activation.php';

function jm_web_dev_fse_starter_theme_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'The Icon Block',
			'slug'      => 'icon-block',
			'required'  => true,
		),
	);

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'default_path' => '',                      // Default absolute path to pre-packaged plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'jm_web_dev_fse_starter_theme_register_required_plugins' );

//* Enable all blocks that are required to run the theme.
add_filter( 'crosswinds_blocks_enable_basic-grid_block', function(){
	return true;
} );
add_filter( 'crosswinds_blocks_enable_breadcrumbs_block', function(){
	return true;
} );
add_filter( 'crosswinds_blocks_enable_copyright_block', function(){
	return true;
} );

//* Add in the admin pages
function jm_web_dev_fse_starter_theme_add_admin_pages() {
	add_menu_page(
		esc_html__( 'Crosswinds Framework & Block Settings', 'jm-web-dev-fse-starter-theme' ),
		esc_html__( 'Crosswinds', 'jm-web-dev-fse-starter-theme' ),
		'manage_options',
		'crosswinds-framework-block-options',
		'jm_web_dev_fse_starter_theme_create_main_admin_page',
		'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMTAwMHB4IiBoZWlnaHQ9IjEwMDBweCIgdmlld0JveD0iMCAwIDEwMDAgMTAwMCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4KICAgIDx0aXRsZT5Mb2dvPC90aXRsZT4KICAgIDxnIGlkPSJMb2dvIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8bGluZSB4MT0iMC41IiB5MT0iMC41IiB4Mj0iMTAwMC41IiB5Mj0iMTAwMC41IiBpZD0iTGluZSIgc3Ryb2tlPSIjMDBBREI1IiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbGluZWNhcD0ic3F1YXJlIj48L2xpbmU+CiAgICAgICAgPGcgaWQ9Iu+AsCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzc1LjAwMDAwMCwgMTUuODc1NDg0KSIgZmlsbD0iIzIyMjgzMSIgZmlsbC1ydWxlPSJub256ZXJvIj4KICAgICAgICAgICAgPHBhdGggZD0iTTE1OC4zNDkxMzYsMTUuNjI0OTYyNyBDMTU5Ljk2MDM2NSwxNS42MjQ5NjI3IDE2MS40MjUyMDYsMTYuNjUwMTYwMiAxNjIuMDExMjM3LDE4LjE2NDExNDYgTDE3Mi44MDI1MTMsNDYuODc0ODg4MiBMMjI2LjU2MTk2LDQ2Ljg3NDg4ODIgQzIzMC44NTg3MjksNDYuODc0ODg4MiAyMzQuMzc0NDQxLDUwLjM5MDYwMDIgMjM0LjM3NDQ0MSw1NC42ODczNjk2IEwyMzQuMzc0NDQxLDE5NS4zMTIwMzQgQzIzNC4zNzQ0NDEsMTk5LjYwODgwNCAyMzAuODU4NzI5LDIwMy4xMjQ1MTYgMjI2LjU2MTk2LDIwMy4xMjQ1MTYgTDIzLjQzNzQ0NDEsMjAzLjEyNDUxNiBDMTkuMTQwNjc0NywyMDMuMTI0NTE2IDE1LjYyNDk2MjcsMTk5LjYwODgwNCAxNS42MjQ5NjI3LDE5NS4zMTIwMzQgTDE1LjYyNDk2MjcsNTQuNjg3MzY5NiBDMTUuNjI0OTYyNyw1MC4zOTA2MDAyIDE5LjE0MDY3NDcsNDYuODc0ODg4MiAyMy40Mzc0NDQxLDQ2Ljg3NDg4ODIgTDc3LjI0NjAwNDksNDYuODc0ODg4MiBMODcuMDYwMjQzOSwyMC43MDMyNjY0IEM4OC4xODMxOTI4LDE3LjY3NTgzNDUgOTEuMTEyODczMywxNS42MjQ5NjI3IDk0LjM4NDQ0NTIsMTUuNjI0OTYyNyBMMTU4LjM0OTEzNiwxNS42MjQ5NjI3IFogTTE1OC4zNDkxMzYsMCBMOTQuMzg0NDQ1MiwwIEM4NC42MTg4NDM1LDAgNzUuODc4OTE2MSw2LjA1NDg2MzggNzIuNDYwOTU1NSwxNS4xODUzMTk5IEw2Ni40MDYwOTE3LDMxLjI0OTkyNTUgTDIzLjQzNzQ0NDEsMzEuMjQ5OTI1NSBDMTAuNDk4MDIxOCwzMS4yNDk5MjU1IDAsNDEuNzQ3OTQ3MyAwLDU0LjY4NzM2OTYgTDAsMTk1LjMxMjAzNCBDMCwyMDguMjUxNDU3IDEwLjQ5ODAyMTgsMjE4Ljc0OTQ3OCAyMy40Mzc0NDQxLDIxOC43NDk0NzggTDIyNi41NjE5NiwyMTguNzQ5NDc4IEMyMzkuNTAxMzgyLDIxOC43NDk0NzggMjQ5Ljk5OTQwNCwyMDguMjUxNDU3IDI0OS45OTk0MDQsMTk1LjMxMjAzNCBMMjQ5Ljk5OTQwNCw1NC42ODczNjk2IEMyNDkuOTk5NDA0LDQxLjc0Nzk0NzMgMjM5LjUwMTM4MiwzMS4yNDk5MjU1IDIyNi41NjE5NiwzMS4yNDk5MjU1IEwxODMuNTkzMzEyLDMxLjI0OTkyNTUgTDE3Ni42MTEwMDIsMTIuNjk1MjgyMiBDMTczLjc3OTA3Myw1LjAyOTE4OTUyIDE2Ni41MDM1MDksMCAxNTguMzQ5MTM2LDAgWiBNMTI0Ljk5OTcwMiwxODMuNTkzMzEyIEMxNTcuMzIzOTM5LDE4My41OTMzMTIgMTgzLjU5MzMxMiwxNTcuMzIzOTM5IDE4My41OTMzMTIsMTI0Ljk5OTcwMiBDMTgzLjU5MzMxMiw5Mi42NzU0NjQ5IDE1Ny4zMjM5MzksNjYuNDA2MDkxNyAxMjQuOTk5NzAyLDY2LjQwNjA5MTcgQzkyLjY3NTQ2NDksNjYuNDA2MDkxNyA2Ni40MDYwOTE3LDkyLjY3NTQ2NDkgNjYuNDA2MDkxNywxMjQuOTk5NzAyIEM2Ni40MDYwOTE3LDE1Ny4zMjM5MzkgOTIuNjc1NDY0OSwxODMuNTkzMzEyIDEyNC45OTk3MDIsMTgzLjU5MzMxMiBaIE0xMjQuOTk5NzAyLDgyLjAzMTA1NDQgQzE0OC42ODEyODYsODIuMDMxMDU0NCAxNjcuOTY4MzUsMTAxLjMxODExOCAxNjcuOTY4MzUsMTI0Ljk5OTcwMiBDMTY3Ljk2ODM1LDE0OC42ODEyODYgMTQ4LjY4MTI4NiwxNjcuOTY4MzUgMTI0Ljk5OTcwMiwxNjcuOTY4MzUgQzEwMS4zMTgxMTgsMTY3Ljk2ODM1IDgyLjAzMTA1NDQsMTQ4LjY4MTI4NiA4Mi4wMzEwNTQ0LDEyNC45OTk3MDIgQzgyLjAzMTA1NDQsMTAxLjMxODExOCAxMDEuMzE4MTE4LDgyLjAzMTA1NDQgMTI0Ljk5OTcwMiw4Mi4wMzEwNTQ0IFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgIDwvZz4KICAgICAgICA8ZyBpZD0i74C9IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNS43NTAwMDAsIDQwNy41MDA0NDcpIiBmaWxsPSIjMjIyODMxIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICA8cGF0aCBkPSJNMjY1LjU3NTcyOSwxNS42MjQ5NjI3IEMyNjIuNTQ4Mjk4LDE1LjYyNDk2MjcgMjU5LjQ3MjIyOCwxNi41MDM3NzE1IDI1Ni42ODg5MzYsMTguNDA4MjU0NiBMMjAzLjEyNDUxNiw1Mi41Mzg3NDY1IEwyMDMuMTI0NTE2LDIzLjMzOTY5MjcgQzIwMy4xMjQ1MTYsMTAuNDQ5Mzg0NiAxOTEuNzk2MzIyLDAgMTc3LjgzMTcwMywwIEwyNS4yOTI4MTMxLDAgQzExLjMyODE5MzQsMCAwLDEwLjQ0OTM4NDYgMCwyMy4zMzk2OTI3IEwwLDE2NC4xNTk4NiBDMCwxNzcuMDUwMTY4IDExLjMyODE5MzQsMTg3LjQ5OTU1MyAyNS4yOTI4MTMxLDE4Ny40OTk1NTMgTDE3Ny44MzE3MDMsMTg3LjQ5OTU1MyBDMTkxLjc5NjMyMiwxODcuNDk5NTUzIDIwMy4xMjQ1MTYsMTc3LjA1MDE2OCAyMDMuMTI0NTE2LDE2NC4xNTk4NiBMMjAzLjEyNDUxNiwxMzQuOTYwODA2IEwyNTYuNjM5ODIyLDE2OS4wOTEyOTggQzI1OS40MjMxMTQsMTcxLjA0NDQxOSAyNjIuNTQ4Mjk4LDE3MS44NzQ1OSAyNjUuNTI2NjE1LDE3MS44NzQ1OSBDMjczLjYzMjM1MSwxNzEuODc0NTkgMjgxLjIwMDkyNSwxNjUuNTI2OTQ5IDI4MS4yMDA5MjUsMTU2LjQ5Mzc2OCBMMjgxLjIwMDkyNSwzMS4wMDU3ODU1IEMyODEuMjQ5MzI5LDIxLjk3MjYwMzkgMjczLjY4MDk4OCwxNS42MjQ5NjI3IDI2NS41NzU3MjksMTUuNjI0OTYyNyBaIE0xODcuNDk5NTUzLDE2NC4xNTk4NiBDMTg3LjQ5OTU1MywxNjguMzU4ODc4IDE4My4wNTYzOTUsMTcxLjg3NDU5IDE3Ny44MzE3MDMsMTcxLjg3NDU5IEwyNS4yOTI4MTMxLDE3MS44NzQ1OSBDMjAuMDY4MTIwOCwxNzEuODc0NTkgMTUuNjI0OTYyNywxNjguMzU4ODc4IDE1LjYyNDk2MjcsMTY0LjE1OTg2IEwxNS42MjQ5NjI3LDIzLjMzOTY5MjcgQzE1LjYyNDk2MjcsMTkuMTQwNjc0NyAyMC4wNjgxMjA4LDE1LjYyNDk2MjcgMjUuMjkyODEzMSwxNS42MjQ5NjI3IEwxNzcuODMxNzAzLDE1LjYyNDk2MjcgQzE4My4wNTYzOTUsMTUuNjI0OTYyNyAxODcuNDk5NTUzLDE5LjE0MDY3NDcgMTg3LjQ5OTU1MywyMy4zMzk2OTI3IEwxODcuNDk5NTUzLDE2NC4xNTk4NiBaIE0yNjUuNjI0MzY3LDE1Ni40OTM3NjggTDI2NS4wMzgzMzUsMTU1Ljg1OTA5OSBMMjAzLjEyNDUxNiwxMTYuNDA2MTYzIEwyMDMuMTI0NTE2LDcxLjA0NDc1MjUgTDI2NS42MjQzNjcsMzEuMjQ5OTI1NSBMMjY1LjYyNDM2NywxNTYuNDkzNzY4IFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgIDwvZz4KICAgICAgICA8ZyBpZD0i74GAIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg3MzMuMDAwNDMyLCAzNzYuMjUwOTM5KSIgZmlsbD0iIzIyMjgzMSIgZmlsbC1ydWxlPSJub256ZXJvIj4KICAgICAgICAgICAgPHBhdGggZD0iTTI0MC44NDYxMDQsMjcuNDU4NjYxOSBMMjIyLjU0MDM2OSw5LjE1MjkyNzAzIEMyMTAuMzM3MTgyLC0zLjA1MDczNzI2IDE5MC41NTA4NzEsLTMuMDUxMjE0MSAxNzguMzQ2MjUzLDkuMTUyOTI3MDMgTDYuMjY4MDU0MDEsMTgxLjIzMDY0OSBMMC4wNzM0NzcyNjA4LDIzNi45ODQyMjQgQy0wLjc1NTc0MDU4LDI0NC40NDgxMzkgNS41NTE4NDYzMSwyNTAuNzU1MjQ5IDEzLjAxNDgwNjksMjQ5LjkyNTU1NCBMNjguNzY4MzgxOCwyNDMuNzMwOTc3IEwyNDAuODQ2NTgxLDcxLjY1Mjc3OCBDMjUzLjA0OTc2OCw1OS40NDg2MzY5IDI1My4wNDk3NjgsMzkuNjYxODQ5NCAyNDAuODQ2MTA0LDI3LjQ1ODY2MTkgWiBNMTk0LjM2MzY1Miw5Ni4wMzcyMTg1IEw4NC45NjAzMDI2LDIwNS40NDEwNDUgTDg0Ljk2MDMwMjYsMTg4LjQ3NTY5NiBMNjEuNTIyODU4NSwxODguNDc1Njk2IEw2MS41MjI4NTg1LDE2NS4wMzgyNTIgTDQ0LjU1NzUwOTcsMTY1LjAzODI1MiBMMTUzLjk2MTMzNiw1NS42MzQ5MDI0IEwxOTQuMzYzNjUyLDk2LjAzNzIxODUgWiBNNjEuNTk0ODYwNywyMjguODA2NDg3IEwzMi43ODg3MTk4LDIzMi4wMDc0ODcgTDE3Ljk5MTA2NzYsMjE3LjIwOTgzNSBMMjEuMTkyMDY3OCwxODguNDAzNjk0IEwzMC44ODU2NjczLDE3OC43MTAwOTQgTDQ3Ljg1MTAxNjEsMTc4LjcxMDA5NCBMNDcuODUxMDE2MSwyMDIuMTQ3NTM4IEw3MS4yODg0NjAyLDIwMi4xNDc1MzggTDcxLjI4ODQ2MDIsMjE5LjExMjg4NyBMNjEuNTk0ODYwNywyMjguODA2NDg3IFogTTIyOS43OTczMzcsNjAuNjA0MDEwNiBMMjA1LjQxMTk0Myw4NC45ODg5Mjc5IEwxNjUuMDA5NjI3LDQ0LjU4NjYxMTggTDE4OS4zOTQ1NDQsMjAuMjAxMjE3NiBDMTk1LjUwMDQyOSwxNC4wOTUzMzI0IDIwNS4zODQ3NjMsMTQuMDk0Mzc4NyAyMTEuNDkxNjAyLDIwLjIwMTIxNzYgTDIyOS43OTczMzcsMzguNTA2OTUyNSBDMjM1LjkwMzY5OSw0NC42MTMzMTQ2IDIzNS45MDQxNzYsNTQuNDk2Njk0OCAyMjkuNzk3MzM3LDYwLjYwNDAxMDYgWiIgaWQ9IlNoYXBlIj48L3BhdGg+CiAgICAgICAgPC9nPgogICAgICAgIDxnIGlkPSLvlL8iIHRyYW5zZm9ybT0idHJhbnNsYXRlKDM3NS4wMTM0NDQsIDczMC4yNTA1MjIpIiBmaWxsPSIjMjIyODMxIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICA8cGF0aCBkPSJNNTQuNjczOTI1OCwxMjguOTA1OTQzIEM0OC4xNzk4OTYxLDEyOC45MDU5NDMgNDIuOTU1MjAzOCwxMzQuMTMwNjM1IDQyLjk1NTIwMzgsMTQwLjYyNDY2NSBDNDIuOTU1MjAzOCwxNDcuMTE4Njk0IDQ4LjE3OTg5NjEsMTUyLjM0MzM4NyA1NC42NzM5MjU4LDE1Mi4zNDMzODcgQzYxLjE2Nzk1NTYsMTUyLjM0MzM4NyA2Ni4zOTI2NDc5LDE0Ny4xMTg2OTQgNjYuMzkyNjQ3OSwxNDAuNjI0NjY1IEM2Ni4zOTI2NDc5LDEzNC4xMzA2MzUgNjEuMTY3OTU1NiwxMjguOTA1OTQzIDU0LjY3MzkyNTgsMTI4LjkwNTk0MyBaIE03MC4yOTg4ODg2LDc0LjIxODU3MyBDNjMuODA0ODU4OCw3NC4yMTg1NzMgNTguNTgwMTY2NSw3OS40NDMyNjUzIDU4LjU4MDE2NjUsODUuOTM3Mjk1MSBDNTguNTgwMTY2NSw5Mi40MzEzMjQ5IDYzLjgwNDg1ODgsOTcuNjU2MDE3MiA3MC4yOTg4ODg2LDk3LjY1NjAxNzIgQzc2Ljc5MjkxODQsOTcuNjU2MDE3MiA4Mi4wMTc2MTA3LDkyLjQzMTMyNDkgODIuMDE3NjEwNyw4NS45MzcyOTUxIEM4Mi4wMTc2MTA3LDc5LjQ0MzI2NTMgNzYuNzkyOTE4NCw3NC4yMTg1NzMgNzAuMjk4ODg4Niw3NC4yMTg1NzMgWiBNMTI0Ljk4NjI1OCwwIEMxMTYuNzM0MTM0LDAgMTA4LjI4Njk4NCwwLjc4MTA1NzQwMyA5OS43NDIwODI0LDIuNDQxNDAwNDMgQzUxLjIwNzMyOCwxMS45MTQyMjQ4IDEyLjA5NTgwNyw1MC45Mjc1MTc2IDIuNTI1NzA4MDQsOTkuMzE2MzYwMiBDLTE0LjM2OTA2OSwxODQuODE0MDEyIDU2LjgyMjU0OSwyNDkuOTk5NDA0IDExNi45Mjk2MzcsMjQ5Ljk5OTQwNCBDMTIwLjk4MjI2NiwyNDkuOTk5NDA0IDEyNC45ODYyNTgsMjQ5LjcwNjYyNyAxMjguOTQxMTM2LDI0OS4wNzE0ODEgQzE0OS4wNTgzNzEsMjQ1Ljk0Njc3NSAxNTguOTIxNzI0LDIyMi40MTE1NzkgMTQ5LjY5MzA0LDIwNC4yOTY1NzkgQzEzOC40MTM5NjEsMTgyLjEyODQ3MiAxNTQuNTI3MjAzLDE1Ni4yNDk2MjcgMTc5LjQyOTQ4OCwxNTYuMjQ5NjI3IEwyMTguMzQ1NTA2LDE1Ni4yNDk2MjcgQzIzNS44MjU4MzgsMTU2LjI0OTYyNyAyNDkuOTg1OTYsMTQxLjc5NjcyOCAyNTAuMDM0NTk3LDEyNC4zNjUwMzMgQzI0OS43OTA0NTcsNTUuNjE1MjkyNSAxOTMuODgyMzg4LDAgMTI0Ljk4NjI1OCwwIFogTTIxOC4yOTYzOTIsMTQwLjYyNDY2NSBMMTc5LjM4MDg1MSwxNDAuNjI0NjY1IEMxNjIuMTQ0MTgyLDE0MC42MjQ2NjUgMTQ2LjQ3MDU4MiwxNDkuMzY1MDY5IDEzNy41MzUxNTIsMTYzLjk2NDM1NyBDMTI4LjY0ODM1OSwxNzguNDY2MzcxIDEyNy45NjQ1NzYsMTk2LjE5MDg0MyAxMzUuNzI4NDIsMjExLjQyNTI3NyBDMTM4LjEyMTE4MywyMTYuMTEyNTc1IDEzOC4wNzIwNjksMjIxLjk3MTkzNiAxMzUuNjc5NzgzLDIyNi43MDgzNDggQzEzNC41MDc3MiwyMjguOTU0NzIzIDEzMS44MjIxNzksMjMyLjg2MDk2NCAxMjYuNTQ4ODUsMjMzLjY5MDY1OCBDMTIzLjQ3Mjc4MSwyMzQuMTc4OTM4IDEyMC4yNDk4NDYsMjM0LjQyMzA3OCAxMTYuOTI5NjM3LDIzNC40MjMwNzggQzkwLjI2OTczNDgsMjM0LjQyMzA3OCA2MS4yMTcwNjk3LDIxOS4xNDAwMDcgNDEuMDAyMDgzNCwxOTQuNTc5NjE0IEMxOS41MTc3NTk3LDE2OC40MDc5OTIgMTEuMjY1NjM1NSwxMzUuNjkzMjI3IDE3Ljg1NzQxNjYsMTAyLjQ0MTA2NyBDMjYuMjA3MjkyMiw2MC4xNTYyMDE5IDYwLjMzNzc4NDEsMjYuMTcxNjIxOSAxMDIuNzY5NTE0LDE3Ljg3MDg2MDQgQzExMC4xOTE0NjcsMTYuNDA2MDIwMiAxMTcuNjYyMDU3LDE1LjY3MzYgMTI0Ljk4NjI1OCwxNS42NzM2IEMxODUuMDkzMzQ2LDE1LjY3MzYgMjM0LjE2NTQ5NSw2NC40NTI5NzEzIDIzNC4zNjA5OTcsMTI0LjM2NTAzMyBDMjM0LjM2MDk5NywxMzMuMzAwNDYzIDIyNy4xMzQ1NDgsMTQwLjYyNDY2NSAyMTguMjk2MzkyLDE0MC42MjQ2NjUgWiBNMTc5LjY3MzYyOCw2Ni40MDYwOTE3IEMxNzMuMTc5NTk4LDY2LjQwNjA5MTcgMTY3Ljk1NDkwNiw3MS42MzA3ODQgMTY3Ljk1NDkwNiw3OC4xMjQ4MTM3IEMxNjcuOTU0OTA2LDg0LjYxODg0MzUgMTczLjE3OTU5OCw4OS44NDM1MzU4IDE3OS42NzM2MjgsODkuODQzNTM1OCBDMTg2LjE2NzY1OCw4OS44NDM1MzU4IDE5MS4zOTIzNSw4NC42MTg4NDM1IDE5MS4zOTIzNSw3OC4xMjQ4MTM3IEMxOTEuMzkyMzUsNzEuNjMwNzg0IDE4Ni4xNjc2NTgsNjYuNDA2MDkxNyAxNzkuNjczNjI4LDY2LjQwNjA5MTcgWiBNMTE3LjE3Mzc3Nyw0Mi45Njg2NDc2IEMxMTAuNjc5NzQ3LDQyLjk2ODY0NzYgMTA1LjQ1NTA1NSw0OC4xOTMzMzk4IDEwNS40NTUwNTUsNTQuNjg3MzY5NiBDMTA1LjQ1NTA1NSw2MS4xODEzOTk0IDExMC42Nzk3NDcsNjYuNDA2MDkxNyAxMTcuMTczNzc3LDY2LjQwNjA5MTcgQzEyMy42Njc4MDcsNjYuNDA2MDkxNyAxMjguODkyNDk5LDYxLjE4MTM5OTQgMTI4Ljg5MjQ5OSw1NC42ODczNjk2IEMxMjguODkyNDk5LDQ4LjE5MzMzOTggMTIzLjY2NzgwNyw0Mi45Njg2NDc2IDExNy4xNzM3NzcsNDIuOTY4NjQ3NiBaIiBpZD0iU2hhcGUiPjwvcGF0aD4KICAgICAgICA8L2c+CiAgICAgICAgPGxpbmUgeDE9IjMuMjQyOTQ0NDVlLTE2IiB5MT0iLTQuMzM5OTY3OTdlLTE2IiB4Mj0iOTk5Ljk5NzQ4MSIgeTI9Ijk5OS45OTc0ODEiIGlkPSJMaW5lIiBzdHJva2U9IiMzOTNFNDYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1saW5lY2FwPSJzcXVhcmUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ5OS45OTg3NDEsIDQ5OS45OTg3NDEpIHNjYWxlKDEsIC0xKSB0cmFuc2xhdGUoLTQ5OS45OTg3NDEsIC00OTkuOTk4NzQxKSAiPjwvbGluZT4KICAgIDwvZz4KPC9zdmc+',
		60
	);

	if ( ! jm_web_dev_fse_starter_theme_if_child_theme_active() ) {
		add_submenu_page(
			'crosswinds-framework-block-options',
			esc_html__( 'Crosswinds Framework Options', 'jm-web-dev-fse-starter-theme' ),
			esc_html__( 'Theme', 'jm-web-dev-fse-starter-theme' ),
			'manage_options',
			'crosswinds-framework-theme',
			'jm_web_dev_fse_starter_theme_create_framework_theme_page'
		);
	}
}
add_action( 'admin_menu', 'jm_web_dev_fse_starter_theme_add_admin_pages' );

function jm_web_dev_fse_starter_theme_create_main_admin_page() {
	include get_template_directory() . '/admin/crosswinds-framework-admin-page.php';
}

function jm_web_dev_fse_starter_theme_create_framework_theme_page() {
	include get_template_directory() . '/admin/theme-admin-page.php';
}

function jm_web_dev_fse_starter_theme_load_admin_styles() {
	if ( jm_web_dev_fse_starter_theme_is_admin_page() ) {
		wp_enqueue_style( 'crosswinds-framework-admin-page', get_template_directory_uri() . '/assets/css/admin.min.css', [], '1.0', 'all' );
	}
}
add_action( 'admin_enqueue_scripts', 'jm_web_dev_fse_starter_theme_load_admin_styles' );

function jm_web_dev_fse_starter_theme_is_admin_page( $page = null ) {
	global $pagenow;

	if ( ! isset( $_GET['page'] ) ) {
		return false;
	}

	if ( null === $page && ( ( 'admin.php' === $pagenow ) && ( 'crosswinds-framework-theme' === $_GET['page'] || 'crosswinds-framework-block-options' === $_GET['page'] ) ) ) {
		return true;
	}

	if ( ( 'admin.php' === $pagenow ) && ( $page === $_GET['page'] ) ) {
		return true;
	}

	return false;
}

function jm_web_dev_fse_starter_theme_if_child_theme_active() {
	$current_theme = wp_get_theme();
	if ( $current_theme->exists() && $current_theme->parent() ) {
		$parent_theme = $current_theme->parent();
	
		if ( $parent_theme->exists() && 'Crosswinds Framework' === $parent_theme->get( 'Name' ) ) {
			return true;
		}
	}

	return false;
}
