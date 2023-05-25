<?php
/**
 * Title: Homepage - Portfolio
 * Slug: crosswinds-framework/homepage-portfolio
 * Categories: crosswinds-framework-homepage
 * Viewport Width: 1400
 * Inserter: true
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"0","left":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|medium"}},"backgroundColor":"contrast","textColor":"base","className":"hero-section hero-section-contrast-center is-style-default","layout":{"type":"constrained","wideSize":"1200px","contentSize":"800px"}} -->
<div class="wp-block-group alignfull hero-section hero-section-contrast-center is-style-default has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:0;padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"textAlign":"center","fontSize":"max-72"} -->
<h2 class="wp-block-heading has-text-align-center has-max-72-font-size"><?php _e( 'Welcome to My Portfolio', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button">View Portfolio</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button"><?php _e( 'Learn More About Me', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"align":"full","id":2027,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photo-placeholder.png" alt="" class="wp-image-2027"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|xx-small"},"blockGap":"var:preset|spacing|small"}},"className":"services-section services-section-photo-left-base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull services-section services-section-photo-left-base" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--xx-small)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":2050,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-2050"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><?php _e( 'My Services', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:crosswinds-blocks/basic-grid {"numDesktopColumns":2,"layout":{"type":"constrained"}} -->
<div class="wp-block-crosswinds-blocks-basic-grid basic-grid-has-2-desktop-columns basic-grid-has-2-tablet-columns basic-grid-has-1-mobile-columns" style="grid-column-gap:30px;grid-row-gap:30px"><!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"feature-item feature-icon-transparent-left","layout":{"type":"constrained"}} -->
<div class="wp-block-group feature-item feature-icon-transparent-left" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:outermost/icon-block {"iconName":"","width":"45px"} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:45px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M192 112H32V224H145.1c22.1-38.3 63.5-64 110.9-64s88.7 25.7 110.9 64H480V64H266.7l-55.5 41.6c-5.5 4.2-12.3 6.4-19.2 6.4zM32 256V448H480V256H380c2.6 10.2 4 21 4 32c0 70.7-57.3 128-128 128s-128-57.3-128-128c0-11 1.4-21.8 4-32H32zM192 80l64-48H480h32V64 448v32H480 32 0V448 112 80H32 192zM352 288a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM64 32h96V64H64V32z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Studio Photography', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"feature-item feature-icon-transparent-left","layout":{"type":"constrained"}} -->
<div class="wp-block-group feature-item feature-icon-transparent-left" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:outermost/icon-block {"iconName":""} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:48px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M512 32H64C46.3 32 32 46.3 32 64V256H544V64c0-17.7-14.3-32-32-32zm64 224v32 64c0 35.3-28.7 64-64 64H362.9l10.7 64H432c8.8 0 16 7.2 16 16s-7.2 16-16 16H360 216 144c-8.8 0-16-7.2-16-16s7.2-16 16-16h58.4l10.7-64H64c-35.3 0-64-28.7-64-64V288 256 64C0 28.7 28.7 0 64 0H512c35.3 0 64 28.7 64 64V256zM32 288v64c0 17.7 14.3 32 32 32H231.7c.2 0 .4 0 .6 0H343.7c.2 0 .4 0 .6 0H512c17.7 0 32-14.3 32-32V288H32zM234.9 480H341.1l-10.7-64H245.6l-10.7 64z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Photo Editing', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"feature-item feature-icon-transparent-left","layout":{"type":"constrained"}} -->
<div class="wp-block-group feature-item feature-icon-transparent-left" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:outermost/icon-block {"iconName":"","width":"44px"} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:44px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 64C0 28.7 28.7 0 64 0H432h16V16 400v16H432 416v64h16 16v32H432 64c-35.3 0-64-28.7-64-64l0 0L0 64zM64 416c-17.7 0-32 14.3-32 32s14.3 32 32 32H384V416H64zM32 392.6c9.4-5.4 20.3-8.6 32-8.6H96V32H64C46.3 32 32 46.3 32 64l0 328.6zM128 32V384H416V32H128zm48 96h16H352h16v32H352 192 176V128zm0 96h16H352h16v32H352 192 176V224z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Storytelling', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"feature-item feature-icon-transparent-left","layout":{"type":"constrained"}} -->
<div class="wp-block-group feature-item feature-icon-transparent-left" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:outermost/icon-block {"iconName":"","width":"36px"} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:36px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M64 32V480H320V32H64zM32 0H64 320h32V32 480v32H320 64 32V480 32 0zM160 400h64 16v32H224 160 144V400h16z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Product Photgraphy', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item --></div>
<!-- /wp:crosswinds-blocks/basic-grid --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-small"}}},"className":"featured-content featured-content-base-photo-right","layout":{"type":"constrained","wideSize":"1200px","contentSize":"800px"}} -->
<div class="wp-block-group alignfull featured-content featured-content-base-photo-right" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|base"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php _e( 'Project Title', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php _e( 'View Project', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1998,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photo-placeholder.png" alt="" class="wp-image-1998"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"backgroundColor":"contrast","textColor":"base","className":"featured-content featured-content-contrast-photo-left","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull featured-content featured-content-contrast-photo-left has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":2015,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photo-placeholder.png" alt="" class="wp-image-2015"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|base"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php _e( 'Project Title', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php _e( 'View Project', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|xx-small"},"blockGap":"var:preset|spacing|small"}},"className":"testimonials-section testimonials-section-3-box-grid-base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull testimonials-section testimonials-section-3-box-grid-base" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--xx-small)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php _e( 'What Others Have Said', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:crosswinds-blocks/basic-grid {"numDesktopColumns":3,"align":"wide"} -->
<div class="wp-block-crosswinds-blocks-basic-grid alignwide basic-grid-has-3-desktop-columns basic-grid-has-2-tablet-columns basic-grid-has-1-mobile-columns" style="grid-column-gap:30px;grid-row-gap:30px"><!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"testimonial testimonial-transparent-stars","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonial testimonial-transparent-stars" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":1957,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-1957"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Person Name', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Position or Title', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"testimonial testimonial-transparent-stars","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonial testimonial-transparent-stars" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":1957,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-1957"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Person Name', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Position or Title', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"testimonial testimonial-transparent-stars","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonial testimonial-transparent-stars" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":1957,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-1957"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Person Name', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Position or Title', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"testimonial testimonial-transparent-stars","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonial testimonial-transparent-stars" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":1957,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-1957"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Person Name', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Position or Title', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"testimonial testimonial-transparent-stars","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonial testimonial-transparent-stars" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":1957,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-1957"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Person Name', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Position or Title', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"testimonial testimonial-transparent-stars","layout":{"type":"constrained"}} -->
<div class="wp-block-group testimonial testimonial-transparent-stars" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":1957,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-1957"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Person Name', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Position or Title', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item --></div>
<!-- /wp:crosswinds-blocks/basic-grid --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"backgroundColor":"contrast","textColor":"base","className":"featured-content featured-content-contrast-photo-left","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull featured-content featured-content-contrast-photo-left has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photo-placeholder.png" alt="A photo of The Flying Squirrel in downtown Mansfield"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|base"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php _e( 'Who I Am', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php _e( 'Learn More About Me', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|xx-small"},"blockGap":"var:preset|spacing|base"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--xx-small)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php _e( 'Recent Blog Posts', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php _e( 'See More of My Writing', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":2,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"query-pattern query-pattern-grid","cbUseFlex":true} -->
<div class="wp-block-query alignwide query-pattern query-pattern-grid cb-flex-layout query-loop-has-2-tablet-columns query-loop-has-1-mobile-columns"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"12px"}},"backgroundColor":"neutral","className":"last-bottom-layout cb-fill-height-parent","layout":{"type":"constrained"},"cbInnerLayout":"last-bottom"} -->
<div class="wp-block-group last-bottom-layout cb-fill-height-parent has-neutral-background-color has-background" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-small","right":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"var:preset|spacing|xx-small"}}},"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"last-bottom","cbFillHeight":true} -->
<div class="wp-block-group last-bottom-layout cb-fill-height-parent" style="padding-top:var(--wp--preset--spacing--xx-small);padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:var(--wp--preset--spacing--xx-small)"><!-- wp:post-title {"fontSize":"x-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>•</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"Read This Post","style":{"spacing":{"padding":{"top":"10px","right":"var:preset|spacing|x-small","bottom":"10px","left":"var:preset|spacing|x-small"}},"border":{"width":"1px"}},"borderColor":"contrast","backgroundColor":"contrast","textColor":"base"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|large","left":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"backgroundColor":"contrast","textColor":"base","className":"callout callout-contrast-two-columns","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull callout callout-contrast-two-columns has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|base"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><?php _e( 'Work With Me', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php _e( 'Contact Me', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
