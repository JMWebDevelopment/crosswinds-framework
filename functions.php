<?php
/**
 * This file adds functions to the Crosswinds Framework for WordPress.
 *
 * @package Crosswinds Framework
 * @author  Jacob Martella Web Development
 * @license GNU General Public License v2 or later
 * @link    https://crosswindsframework.com/downloads/crosswinds-framework
 */

if ( ! function_exists( 'crosswinds_framework_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0
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


/**
 * Enqueues the main stylesheet for the theme.
 *
 * @since 1.0
 * 
 */
function crosswinds_framework_enqueue_style_sheet() {
	wp_enqueue_style( 'crosswinds-framework', get_template_directory_uri() . '/assets/css/global.min.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'crosswinds_framework_enqueue_style_sheet' );

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
 * @since 1.0
 */
function crosswinds_framework_register_block_patterns() {

	// Add the block pattern category type for the theme.
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type(
			'crosswinds-framework',
			array(
				'label' => __( 'Crosswinds Framework', 'crosswinds-framework' ),
			)
		);
	}

	// Load the categories into an array.
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
		'crosswinds-framework-business-cards'  => array(
			'label'         => __( 'Business Cards', 'crosswinds-framework' ),
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
		'crosswinds-framework-columns'  => array(
			'label'         => __( 'Columns', 'crosswinds-framework' ),
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
		'crosswinds-framework-resume'  => array(
			'label'         => __( 'Resume Sections', 'crosswinds-framework' ),
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
		'crosswinds-framework-skills-slider'  => array(
			'label'         => __( 'Skills Sliders', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-stats'  => array(
			'label'         => __( 'Stats', 'crosswinds-framework' ),
			'categoryTypes' => array( 'crosswinds-framework' ),
		),
		'crosswinds-framework-talk'  => array(
			'label'         => __( 'Talk Sections', 'crosswinds-framework' ),
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
	 * @since 1.0
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

	// Loop through the array and register each block pattern category.
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
						'name'      => $value['name'],
						'slug'      => $value['slug'],
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
		'crosswinds-framework-options',
		'crosswinds_framework_create_main_admin_page',
		'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIGlkPSJMYXllcl8yIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MTIgNTEyIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2ZmZjt9PC9zdHlsZT48L2RlZnM+PGcgaWQ9IkxheWVyXzEtMiI+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJtNDgsMHY5Nmg4MHYtNDhsNDgsMTAsMzM2LDcwdjE2MGwtMzM2LDcwLTQ4LDEwdi00OEg0OHYxOTJIMFYwaDQ4Wm0wLDE0NHYxMjhoODB2LTEyOEg0OFptMTI4LTM3djIwMmw2NC0xMy4zVjEyMC40bC02NC0xMy40Wm0xMTIsMjMuM3YxNTUuM2w4MC0xNi42di0xMjJsLTgwLTE2LjdabTEyOCwyNi43djEwMmw0OC0xMHYtODJsLTQ4LTEwWiIvPjwvZz48L3N2Zz4=',
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

	if ( null === $page && ( ( 'admin.php' === $pagenow ) && ( 'crosswinds-framework-theme' === $_GET['page'] || 'crosswinds-framework-options' === $_GET['page'] ) ) ) {
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

/**
 * List the required plugins for the theme.
 *
 * @since 1.0
 */
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

/**
 * List the suggested plugins for the theme.
 *
 * @since 1.0
 */
function crosswinds_framework_get_suggested_plugins() {
	$plugins = array(
		array(
			'name'     => 'Block Visibility',
			'slug'     => 'block-visibility',
			'logo'     => 'https://ps.w.org/block-visibility/assets/icon-256x256.png',
			'link'     => 'https://wordpress.org/plugins/block-visibility/',
			'location' => 'internal'
		),
		array(
			'name'     => 'Equalize Digital Accessibility Checker',
			'slug'     => 'accessibility-checker',
			'logo'     => 'https://ps.w.org/accessibility-checker/assets/icon-256x256.png',
			'link'     => 'https://wordpress.org/plugins/accessibility-checker/',
			'location' => 'internal'
		)
	);

	return array_merge( apply_filters( 'crosswinds_framework_suggested_plugins', $plugins ) );
}

// Set the intro video

/**
 * Creates the intro section for the admin page.
 *
 * @since 1.0
 * 
 */
function crosswinds_framework_admin_intro() {
	?>
	<p><?php esc_html_e( 'Want to get the most out of Crosswinds Blocks? Checkout the Crosswinds Framework themes! From a portfolio to an online store to a newspaper website and even a blank canvas to create anything you want, the Crosswinds Framework will help you create a great website.', 'crosswinds-framework' ); ?></p>
	<?php
}
add_action( 'crosswinds_framework_admin_intro', 'crosswinds_framework_admin_intro' );

/**
 * Creates the "Report an Issue" section text for the admin page.
 *
 * @since 1.0
 * 
 */
function crosswinds_framework_report_an_issue() {
	?>
	<div class="options-section">
		<h2><?php esc_html_e( 'Report an Issue', 'crosswinds-framework' ); ?></h2>
		<p><?php esc_html_e( 'If you come across an issue with the Crosswinds Framework, please report the issue in the GitHub repository using the link below.', 'crosswinds-framework' ); ?></p>
		<a class="button cf-button-primary" href="<?php echo esc_url( apply_filters( 'crosswinds_framework_issue_link', 'https://github.com/JMWebDevelopment/crosswinds-framework/issues/new' ) ); ?>"><?php esc_html_e( 'Report an Issue', 'crosswinds-framework' ); ?></a>
	</div>
	<?php
}
add_action( 'crosswinds_framework_admin_report_issue_section', 'crosswinds_framework_report_an_issue' );

/**
 * Creates the "Suggest a Feature" section text for the admin page.
 *
 * @since 1.0
 * 
 */
function crosswinds_framework_feature_request() {
	?>
	<div class="options-section">
		<h2><?php esc_html_e( 'Suggest a Feature', 'crosswinds-framework' ); ?></h2>
		<p><?php esc_html_e( 'Want to see a new feature included in a release of the Crosswinds Framework? Be sure to drop your feature idea off in the GitHub repository using the link below.', 'crosswinds-framework' ); ?></p>
		<a class="button cf-button-primary" href="<?php echo esc_url( apply_filters( 'crosswinds_framework_feature_link', 'https://github.com/JMWebDevelopment/crosswinds-framework/issues/new' ) ); ?>"><?php esc_html_e( 'Suggest a Feature', 'crosswinds-framework' ); ?></a>
	</div>
	<?php
}
add_action( 'crosswinds_framework_admin_feature_request_section', 'crosswinds_framework_feature_request' );

/**
 * Creates the "Leave a Review" section text for the admin page.
 *
 * @since 1.0
 * 
 */
function crosswinds_framework_leave_a_review() {
	?>
	<div class="options-section">
		<h2><?php esc_html_e( 'Leave a Review', 'crosswinds-framework' ); ?></h2>
		<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'crosswinds-framework' ); ?></p>
		<a class="button cf-button-primary" href="<?php echo esc_url( apply_filters( 'crosswinds_framework_review_link', '' ) ); ?>"><?php esc_html_e( 'Leave a Review', 'crosswinds-framework' ); ?></a>
	</div>
	<?php
}
//add_action( 'crosswinds_framework_admin_review_section', 'crosswinds_framework_leave_a_review' );

/**
 * Creates the "View Documentation" section text for the admin page.
 *
 * @since 1.0
 * 
 */
function crosswinds_framework_view_documentation() {
	?>
	<div class="options-section">
		<h2><?php esc_html_e( 'View Documentation', 'crosswinds-framework' ); ?></h2>
		<p><?php esc_html_e( 'Learn how you can get started using the Crosswinds Framework for your website by visiting the documentation at the link below.', 'crosswinds-framework' ); ?></p>
		<a class="button cf-button-primary" href="<?php echo esc_url( apply_filters( 'crosswinds_framework_documentation_link', 'https://github.com/JMWebDevelopment/crosswinds-framework/wiki' ) ); ?>"><?php esc_html_e( 'View Documentation', 'crosswinds-framework' ); ?></a>
	</div>
	<?php
}
add_action( 'crosswinds_framework_admin_documentation_section', 'crosswinds_framework_view_documentation' );

