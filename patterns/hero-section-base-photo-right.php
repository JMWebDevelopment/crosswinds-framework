<?php
/**
 * Title: Hero Section - Base with Photo Right
 * Slug: jm-web-dev-fse-starter-theme/hero-section-base-photo-right
 * Categories: jm-web-dev-fse-starter-theme-hero-sections
 * Viewport Width: 1200
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-small"}}},"className":"hero-section hero-section-base-photo-right is-style-full-height","layout":{"type":"constrained","wideSize":"1200px","contentSize":"800px"}} -->
<div class="wp-block-group alignfull hero-section hero-section-base-photo-right is-style-full-height" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
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
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":768,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="http://wordpress-dev.local/crosswinds-framework/wp-content/uploads/sites/4/2008/06/img_0513-1.jpg" alt="Huatulco Coastline" class="wp-image-768"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
