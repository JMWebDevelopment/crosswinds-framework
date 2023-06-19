<?php
/**
 * This file adds functions to the Crosswinds Framework for WordPress.
 *
 * @package Crosswinds Framework
 * @author  Jacob Martella Web Development
 * @license GNU General Public License v2 or later
 * @link    https://jacobmartella.com/
 */

if ( ! function_exists( 'crosswinds_framework_setup' ) ) {
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
	function crosswinds_framework_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'crosswinds-framework', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				get_parent_theme_file_uri( 'assets/css/editor/editor-style.min.css' ),
			)
		);

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'crosswinds_framework_setup' );

// Enqueue style sheet.
function crosswinds_framework_enqueue_style_sheet() {
	wp_enqueue_style( 'crosswinds-framework', get_template_directory_uri() . '/assets/css/global.min.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'crosswinds_framework_enqueue_style_sheet' );

/**
 * Creates a title that can be shown on the search page template.
 * 
 * @since 1.0
 *
 * @return string|void      The search title, if it's set, or nothing.
 */
function crosswinds_framework_search_title() {
	if ( isset( $_GET['s'] ) ) {
		$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
		/* translators: %s: Search term. */
		return isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'crosswinds-framework' ), esc_html( $search_term ) ) : __( 'Search results', 'crosswinds-framework' );
	}
}

// Include block styles.
register_block_style(
	'core/group',
	array(
		'name'  => 'full-height',
		'label' => __( 'Full-height', 'crosswinds-framework' ),
		'inline_style' => '.is-style-full-height {
			min-height: 100vh;
		}',
	)
);

/**
 * Registers block patterns, categories, and type.
 *
 * @since 1.0.0
 */
function crosswinds_framework_register_block_patterns() {

	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type(
			'crosswinds-framework',
			array(
				'label' => __( 'JM Web Dev FSE Starter Theme', 'crosswinds-framework' ),
			)
		);
	}

	$block_pattern_categories = array(
		'crosswinds-framework-404'  => array(
			'label'         => __( '404', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-archive'  => array(
			'label'         => __( 'Archive', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-banners'  => array(
			'label'         => __( 'Banners', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-blog'  => array(
			'label'         => __( 'Blog Page Sections', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-blog-posts'  => array(
			'label'         => __( 'Blog Posts Sections', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-callouts'  => array(
			'label'         => __( 'Callouts', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-ctas'  => array(
			'label'         => __( 'Call to Action Sections', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-cards'  => array(
			'label'         => __( 'Cards', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-contact-us'  => array(
			'label'         => __( 'Contact Us', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-ecommerce'  => array(
			'label'         => __( 'Ecommerce', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-elements'  => array(
			'label'         => __( 'Elements', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-featured-content'  => array(
			'label'         => __( 'Featured Content', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-features'  => array(
			'label'         => __( 'Features', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-footer'  => array(
			'label'         => __( 'Footer', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-faqs'  => array(
			'label'         => __( 'Frequently Asked Questions', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-header'  => array(
			'label'         => __( 'Header', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-hero-sections'  => array(
			'label'         => __( 'Hero Sections', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-homepage'  => array(
			'label'         => __( 'Homepage', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-how-we-do-it'  => array(
			'label'         => __( 'How We Do It Sections', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-links'  => array(
			'label'         => __( 'Links', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-page'  => array(
			'label'         => __( 'Page', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-photo-grids'  => array(
			'label'         => __( 'Photo Grids', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-posts'  => array(
			'label'         => __( 'Posts', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-post-content'  => array(
			'label'         => __( 'Post Content', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-pricing-tables'  => array(
			'label'         => __( 'Pricing Tables', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-projects'  => array(
			'label'         => __( 'Projects', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-queries'  => array(
			'label'         => __( 'Queries', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-search'  => array(
			'label'         => __( 'Search', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-services'  => array(
			'label'         => __( 'Services', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-site-titles'  => array(
			'label'         => __( 'Site Titles', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-stats'  => array(
			'label'         => __( 'Stats', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-team-members'  => array(
			'label'         => __( 'Team Members', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-testimonials'  => array(
			'label'         => __( 'Testimonials', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-text-media'  => array(
			'label'         => __( 'Text and Media', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-widgets'  => array(
			'label'         => __( 'Widgets', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
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
	$block_pattern_categories = apply_filters( 'crosswinds_framework_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'crosswinds_framework_register_block_patterns', 9 );

// Load the functionality to require certain plugins.
include get_template_directory() . '/inc/tgmpa/class-tgm-plugin-activation.php';

/**
 * Sets up the TGMPA integration to require and suggest certain plugins.
 * 
 * @since 1.0
 *
 * @return void
 */
function crosswinds_framework_register_required_plugins() {
	$plugins           = array();
	$required_plugins  = crosswinds_framework_get_required_plugins();
	$suggested_plugins = crosswinds_framework_get_suggested_plugins();
	$added_plugins     = array();

	if ( $required_plugins ) {
		foreach ( $required_plugins as $key => $value ) {
			if ( ! in_array( $value['slug'], $added_plugins ) ) {
				$added_plugins[] = $value['slug']; 

				if ( 'external' === $value['location'] ) {
					$plugin = array(
						'name'         => $value['name'],
						'slug'         => $value['slug'],
						'required'     => true,
						'external_url' => $value['link']
					);
				} else {
					$plugin = array(
						'name'      => $required_plugin['name'],
						'slug'      => $required_plugin['slug'],
						'required'  => true,
					);
				}
				array_push( $plugins, $plugin );
			}
		}
	}

	if ( $suggested_plugins ) {
		foreach ( $suggested_plugins as $key => $value ) {
			if ( ! in_array( $value['slug'], $added_plugins ) ) {
				$added_plugins[] = $value['slug'];

				if ( 'external' === $value['location'] ) {
					$plugin = array(
						'name'         => $value['name'],
						'slug'         => $value['slug'],
						'required'     => false,
						'external_url' => $value['link']
					);
				} else {
					$plugin = array(
						'name'      => $value['name'],
						'slug'      => $value['slug'],
						'required'  => false,
					);
				}
				array_push( $plugins, $plugin );
			}
		}
	}

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
		'has_notices'  => false,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'crosswinds_framework_register_required_plugins' );

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
add_filter( 'crosswinds_blocks_enable_social-share-content_block', function(){
	return true;
} );
add_filter( 'crosswinds_blocks_enable_single-content_block', function(){
	return true;
} );
add_filter( 'crosswinds_blocks_enable_next-post_block', function(){
	return true;
} );
add_filter( 'crosswinds_blocks_enable_previous-post_block', function(){
	return true;
} );
add_filter( 'crosswinds_blocks_enable_related-posts_block', function(){
	return true;
} );

// Customize the read more text for excerpts.
add_filter( 'excerpt_more', function( $more ) {
	return '...';
});

/**
 * Adds in the admin pages for the theme.
 *
 * @since 1.0
 */
function crosswinds_framework_add_admin_pages() {
	add_menu_page(
		esc_html__( 'Crosswinds Framework & Block Settings', 'crosswinds-framework' ),
		esc_html__( 'Crosswinds', 'crosswinds-framework' ),
		'manage_options',
		'crosswinds-framework-block-options',
		'crosswinds_framework_create_main_admin_page',
		'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIGlkPSJMYXllcl8yIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNTg1IDE1ODUiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojMDA3MWJjO3N0cm9rZS13aWR0aDoyMHB4O30uY2xzLTEsLmNscy0ye3N0cm9rZTojMmUzMTkyO3N0cm9rZS1taXRlcmxpbWl0OjEwO30uY2xzLTJ7ZmlsbDpub25lO3N0cm9rZS13aWR0aDo1MHB4O308L3N0eWxlPjwvZGVmcz48ZyBpZD0iTGF5ZXJfMS0yIj48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Im00OTUuMDQsMzI3LjQ0di02Ni40NGgtMTEyLjQ5djEwNjNoMTEyLjQ5di0zOTguNjJoMTEyLjQ5djk5LjY2bDE0MC42MS0zNC42N1YzOTUuMzNsLTE0MC42MS0zNC42N3Y5OS42NmgtMTEyLjQ5di0xMzIuODdabTExMi40OSwyMzIuNTN2MjY1Ljc1aC0xMTIuNDl2LTI2NS43NWgxMTIuNDlabTI1My4xLTEzNy4wM3Y1MzkuOGwxNjguNzMtNDEuNTJ2LTQ1Ni43NmwtMTY4LjczLTQxLjUyWm00MjEuODMsNDM2di0zMzIuMTlsLTE0MC42MS0zNC42N3Y0MDEuNTNsMTQwLjYxLTM0LjY3WiIvPjxjaXJjbGUgY2xhc3M9ImNscy0yIiBjeD0iNzkyLjUiIGN5PSI3OTIuNSIgcj0iNzY3LjUiLz48L2c+PC9zdmc+',
		60
	);
}
add_action( 'admin_menu', 'crosswinds_framework_add_admin_pages' );

/**
 * Loads the main admin page.
 *
 * @since 1.0
 */
function crosswinds_framework_create_main_admin_page() {
	include get_template_directory() . '/admin/crosswinds-framework-admin-page.php';
}

/**
 * Loads the styles for the admin pages.
 *
 * @since 1.0
 */
function crosswinds_framework_load_admin_styles_scripts() {
	if ( crosswinds_framework_is_admin_page() ) {
		wp_enqueue_style( 'crosswinds-framework-admin-page', get_template_directory_uri() . '/assets/css/admin.min.css', [], '1.0', 'all' );
		wp_enqueue_script( 'crosswinds-framework-admin', get_template_directory_uri() . '/assets/js/admin-page.min.js', [], '1.0' );
	}
}
add_action( 'admin_enqueue_scripts', 'crosswinds_framework_load_admin_styles_scripts' );

/**
 * Checks to see if the current admin page is for the Crosswinds Framework theme/child theme.
 * 
 * @since 1.0
 *
 * @param string|null $page      The page to check to see if it's the current admin page.
 * @return boolean               Whether or not this is the desired page or a Crosswinds Framework admin page.
 */
function crosswinds_framework_is_admin_page( $page = null ) {
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

/**
 * Checks to see if a Crosswinds Framework child theme is the active theme.
 * 
 * @since 1.0
 *
 * @param string | null $theme      The name of the theme to check for. Leave null to see if any Crosswinds Framework child theme is active.
 * @return boolean                  Whether the active theme is a Crosswinds Framework child theme.
 */
function crosswinds_framework_if_child_theme_active( $theme = null ) {
	$current_theme = wp_get_theme();

	if ( null !== $theme ) {
		if ( $theme === $current_theme->get( 'Name' ) ) {
			return true;
		} else {
			return false;
		}
	}

	if ( $current_theme->exists() && $current_theme->parent() ) {
		$parent_theme = $current_theme->parent();
	
		if ( $parent_theme->exists() && 'Crosswinds Framework' === $parent_theme->get( 'Name' ) ) {
			return true;
		}
	}

	return false;
}

function crosswinds_framework_get_required_plugins() {
	$plugins = array(
		array(
			'name'     => 'The Icon Block',
			'slug'     => 'icon-block',
			'logo'     => 'https://ps.w.org/icon-block/assets/icon-256x256.png',
			'link'     => 'https://wordpress.org/plugins/icon-block/',
			'location' => 'internal'
		)
	);

	return array_merge( apply_filters( 'crosswinds_framework_required_plugins', $plugins ) );
}

function crosswinds_framework_get_suggested_plugins() {
	$plugins = array(
		array(
			'name'     => 'Block Visibility',
			'slug'     => 'block-visibility',
			'logo'     => 'https://ps.w.org/block-visibility/assets/icon-256x256.png',
			'link'     => 'https://wordpress.org/plugins/block-visibility/',
			'location' => 'external'
		)
	);

	return array_merge( apply_filters( 'crosswinds_framework_suggested_plugins', $plugins ) );
}
