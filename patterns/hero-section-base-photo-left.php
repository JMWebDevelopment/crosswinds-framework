<?php
/**
 * Title: Hero Section - Base with Photo Left
 * Slug: crosswinds-framework/hero-section-base-photo-left
 * Categories: crosswinds-framework-hero-sections
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-small"}}},"className":"hero-section hero-section-base-photo-left is-style-full-height","layout":{"type":"constrained","wideSize":"1200px","contentSize":"800px"}} -->
<div class="wp-block-group alignfull hero-section hero-section-base-photo-left is-style-full-height" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/welcome-to-mansfield.jpg" alt="<?php _e( 'A photo of the welcome to Historic Downtown Mansfield sign', 'crosswinds-framework' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"max-72"} -->
<h2 class="wp-block-heading has-max-72-font-size"><?php _e( 'This is a Heading', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php _e( 'Add a Button Here', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
