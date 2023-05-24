<?php
/**
 * Title: Hero Section - Base with Centered Photo and Text
 * Slug: crosswinds-framework/hero-section-base-center
 * Categories: crosswinds-framework-hero-sections
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|medium"}},"className":"hero-section hero-section-base-center is-style-full-height","layout":{"type":"constrained","wideSize":"1200px","contentSize":"800px"}} -->
<div class="wp-block-group alignfull hero-section hero-section-base-center is-style-full-height" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"textAlign":"center","fontSize":"max-72"} -->
<h2 class="wp-block-heading has-text-align-center has-max-72-font-size"><?php _e( 'This is a Heading', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php _e( 'Add a Button Here', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"id":768,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/welcome-to-mansfield.jpg" alt="Huatulco Coastline" class="wp-image-768"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
