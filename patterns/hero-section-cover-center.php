<?php
/**
 * Title: Hero Section - Cover with Text Center
 * Slug: crosswinds-framework/hero-section-cover-center
 * Categories: crosswinds-framework-hero-sections
 * Viewport Width: 1440
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","className":"hero-section hero-section-cover-center","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero-section hero-section-cover-center"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/welcome-to-mansfield.jpg","id":1891,"dimRatio":50,"minHeight":100,"minHeightUnit":"vh","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1891" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/welcome-to-mansfield.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","wideSize":"1440px","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"max-90"} -->
<h2 class="wp-block-heading has-text-align-center has-max-90-font-size"><?php _e( 'This is a Heading', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size" style="font-style:normal;font-weight:400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php _e( 'Add a Button Here', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
