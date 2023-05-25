<?php
/**
 * Title: Homepage - Product
 * Slug: crosswinds-framework/homepage-product
 * Categories: crosswinds-framework-homepage
 * Viewport Width: 1400
 * Inserter: true
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"0","left":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|medium"}},"backgroundColor":"contrast","textColor":"base","className":"hero-section hero-section-contrast-center is-style-default","layout":{"type":"constrained","wideSize":"1200px","contentSize":"800px"}} -->
<div class="wp-block-group alignfull hero-section hero-section-contrast-center is-style-default has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:0;padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"textAlign":"center","fontSize":"max-72"} -->
<h2 class="wp-block-heading has-text-align-center has-max-72-font-size"><?php _e( 'Our Amazing App', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php _e( 'Download Now', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button"><?php _e( 'Learn More', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"align":"wide","id":2034,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photo-placeholder.png" alt="" class="wp-image-2034"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|xx-small"},"blockGap":"var:preset|spacing|small"}},"className":"features-section features-section-3-box-grid-base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull features-section features-section-3-box-grid-base" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--xx-small)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php _e( 'Our Product\'s Features', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:crosswinds-blocks/basic-grid {"numDesktopColumns":3,"align":"wide"} -->
<div class="wp-block-crosswinds-blocks-basic-grid alignwide basic-grid-has-3-desktop-columns basic-grid-has-2-tablet-columns basic-grid-has-1-mobile-columns" style="grid-column-gap:30px;grid-row-gap:30px"><!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"feature-item feature-icon-transparent-left","layout":{"type":"constrained"}} -->
<div class="wp-block-group feature-item feature-icon-transparent-left" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:outermost/icon-block {"iconName":""} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:48px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M480 256A224 224 0 1 0 32 256a224 224 0 1 0 448 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm129.7 71.2l28.6-14.3c8.7 17.5 41.3 55.2 97.7 55.2s88.9-37.7 97.7-55.2l28.6 14.3C369.7 352.3 327.6 400 256 400s-113.7-47.7-126.3-72.8zM152.4 208a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm184-24a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Easy to Use', 'crosswinds-framework' ); ?></p>
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
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:48px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM240 144a16 16 0 1 1 32 0 16 16 0 1 1 -32 0zm64 0a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM135.9 186.9l-13 29.2 14.6 6.5L208 254v64.5l-15.7 78.4-3.1 15.7 31.4 6.3 3.1-15.7L237.1 336h37.8l13.4 67.1 3.1 15.7 31.4-6.3-3.1-15.7L304 318.4V254l70.5-31.3 14.6-6.5-13-29.2-14.6 6.5L292.6 224H272 240 219.4l-68.9-30.6-14.6-6.5zM240 256h32v48H240V256z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Accessibility', 'crosswinds-framework' ); ?></p>
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
<div class="wp-block-group feature-item feature-icon-transparent-left" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:outermost/icon-block {"iconName":"","width":"46px"} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:46px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 32a224 224 0 1 1 0 448 224 224 0 1 1 0-448zm0 480A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm0 96c35.3 0 64-28.7 64-64c0-18.6-7.9-35.3-20.5-47l82.6-153.4 7.6-14.1-28.2-15.2-7.6 14.1L271.3 289.8c-4.9-1.2-10-1.8-15.3-1.8c-35.3 0-64 28.7-64 64s28.7 64 64 64z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Performance', 'crosswinds-framework' ); ?></p>
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
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:48px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M205 56.1L195 8H125L115 56.1c-13.8 5.2-26.5 12.7-37.5 22L34.4 64 0 123.4l33.9 30.3C32.7 160.9 32 168.4 32 176s.7 15.1 1.9 22.3L0 228.6 34.4 288l43.1-14.2c11.1 9.3 23.7 16.8 37.5 22L125 344h70l10-48.1c13.8-5.2 26.5-12.7 37.5-22L285.6 288 320 228.6l-33.9-30.3c1.3-7.3 1.9-14.7 1.9-22.3s-.7-15.1-1.9-22.3L320 123.4 285.6 64 242.5 78.2c-11.1-9.3-23.7-16.8-37.5-22zM271 102.5l8.3 14.3-14.5 12.9-13.3 11.9 3.1 17.6c1 5.4 1.5 11 1.5 16.8s-.5 11.4-1.5 16.8l-3.1 17.6 13.3 11.9 14.5 12.9L271 249.5l-18.4-6.1-17-5.6-13.7 11.5c-8.3 7-17.8 12.6-28.1 16.5l-16.5 6.2-3.6 17.2L169 312H151l-4.7-22.7-3.6-17.2-16.5-6.2c-10.3-3.9-19.8-9.5-28.1-16.5L84.4 237.8l-17 5.6L49 249.5l-8.3-14.3 14.5-12.9 13.3-11.9-3.1-17.6c-1-5.4-1.5-11-1.5-16.8s.5-11.4 1.5-16.8l3.1-17.6L55.2 129.8 40.8 116.9 49 102.5l18.4 6.1 17 5.6 13.7-11.5c8.3-7 17.8-12.6 28.1-16.5l16.5-6.2 3.6-17.2L151 40h18l4.7 22.7 3.6 17.2 16.5 6.2c10.3 3.9 19.8 9.5 28.1 16.5l13.7 11.5 17-5.6 18.4-6.1zM160 200a24 24 0 1 1 0-48 24 24 0 1 1 0 48zm-56-24a56 56 0 1 0 112 0 56 56 0 1 0 -112 0zM344.1 307L296 317v70l48.1 10c5.2 13.8 12.7 26.5 22 37.5L352 477.6 411.4 512l30.3-33.9c7.3 1.3 14.7 1.9 22.3 1.9s15.1-.7 22.3-1.9L516.6 512 576 477.6l-14.2-43.1c9.3-11.1 16.8-23.7 22-37.5L632 387V317l-48.1-10c-5.2-13.8-12.7-26.5-22-37.5L576 226.4 516.6 192l-30.3 33.9c-7.3-1.3-14.7-1.9-22.3-1.9s-15.1 .7-22.3 1.9L411.4 192 352 226.4l14.2 43.1c-9.3 11.1-16.8 23.7-22 37.5zM390.5 241l14.3-8.3 12.9 14.5 11.9 13.3 17.6-3.1c5.4-1 11-1.5 16.8-1.5s11.4 .5 16.8 1.5l17.6 3.1 11.9-13.3 12.9-14.5 14.3 8.3-6.1 18.4-5.6 17 11.5 13.7c7 8.3 12.6 17.8 16.5 28.1l6.2 16.5 17.2 3.6L600 343v18l-22.7 4.7-17.2 3.6-6.2 16.5c-3.9 10.3-9.5 19.8-16.5 28.1l-11.5 13.7 5.6 17 6.1 18.4-14.3 8.3-12.9-14.5-11.9-13.3-17.6 3.1c-5.4 1-11 1.5-16.8 1.5s-11.4-.5-16.8-1.5l-17.6-3.1-11.9 13.3-12.9 14.5L390.5 463l6.1-18.4 5.6-17-11.5-13.7c-7-8.3-12.6-17.8-16.5-28.1l-6.2-16.5-17.2-3.6L328 361V343l22.7-4.7 17.2-3.6 6.2-16.5c3.9-10.3 9.5-19.8 16.5-28.1l11.5-13.7-5.6-17L390.5 241zM488 352a24 24 0 1 1 -48 0 24 24 0 1 1 48 0zm-24 56a56 56 0 1 0 0-112 56 56 0 1 0 0 112z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Customizations', 'crosswinds-framework' ); ?></p>
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
<div class="wp-block-group feature-item feature-icon-transparent-left" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:outermost/icon-block {"iconName":"","width":"40px"} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:40px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M32 256C32 132.3 132.3 32 256 32s224 100.3 224 224V448.1L352 448v0V416H320 224 192v32 32 32h32 96 32V480l144 .1 16 0v-16V256C512 114.6 397.4 0 256 0S0 114.6 0 256v48 16H32V304 256zM320 464l0 16h0v0H224V448h96v16zM96 224h64V352H96V224zM64 192v32V352v32H96h64 32V352 224 192H160 96 64zm288 32h64V352H352V224zm64-32H352 320v32V352v32h32 64 32V352 224 192H416z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Top Customer Service', 'crosswinds-framework' ); ?></p>
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
<div class="wp-block-group feature-item feature-icon-transparent-left" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:outermost/icon-block {"iconName":"","width":"43px"} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:43px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M374.6 164L306.1 34.3 288.1 0 270 34.3 201.5 164 57.1 189l-38.2 6.6 27 27.8L148.1 328.5 127.2 473.6 121.7 512l34.8-17.1 131.6-64.7 131.6 64.7L454.4 512l-5.5-38.4L428 328.5 530.2 223.4l27-27.8L519 189 374.6 164zM492 216.8l-86.9 89.4-11 11.3 2.2 15.6 17.8 123.5-111.9-55-14.1-6.9-14.1 6.9L162 456.5l17.8-123.5 2.2-15.6-11-11.3L84.1 216.8 207 195.5l15.5-2.7 7.3-13.9L288.1 68.6l58.2 110.3 7.3 13.9 15.5 2.7L492 216.8z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Highly Rated', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item --></div>
<!-- /wp:crosswinds-blocks/basic-grid --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"backgroundColor":"contrast","textColor":"base","className":"featured-content featured-content-contrast-photo-left","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull featured-content featured-content-contrast-photo-left has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":2036} -->
<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photo-placeholder.png" alt="" class="wp-image-2036"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|base"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php _e( 'Top Feature 1', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-small"}}},"className":"featured-content featured-content-base-photo-left","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull featured-content featured-content-base-photo-left" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|base"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php _e( 'Top Feature 2', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":2037} -->
<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photo-placeholder.png" alt="" class="wp-image-2037"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|xx-small"},"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","className":"testimonials-section testimonials-section-2-box-grid-contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull testimonials-section testimonials-section-2-box-grid-contrast has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--xx-small)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php _e( 'What Others Have Said', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:crosswinds-blocks/basic-grid {"numDesktopColumns":2,"align":"wide"} -->
<div class="wp-block-crosswinds-blocks-basic-grid alignwide basic-grid-has-2-desktop-columns basic-grid-has-2-tablet-columns basic-grid-has-1-mobile-columns" style="grid-column-gap:30px;grid-row-gap:30px"><!-- wp:crosswinds-blocks/basic-grid-item -->
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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-small"}}},"className":"pricing-table-section pricing-table-three-columns","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull pricing-table-section pricing-table-three-columns" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php _e( 'Our Great Plans', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"cbUseFlex":true} -->
<div class="wp-block-column cb-flex-layout"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|xxx-small"}},"backgroundColor":"neutral","className":"pricing-column pricing-column-paragraph-price-bottom","layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"last-bottom","cbFillHeight":true} -->
<div class="wp-block-group pricing-column pricing-column-paragraph-price-bottom has-neutral-background-color has-background last-bottom-layout cb-fill-height-parent" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Plan Title', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"max-36"} -->
<p class="has-max-36-font-size" style="font-style:normal;font-weight:700">$100/mo</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button"><?php _e( 'Sign Up', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"cbUseFlex":true} -->
<div class="wp-block-column cb-flex-layout"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|xxx-small"}},"backgroundColor":"neutral","className":"pricing-column pricing-column-list-price-top","layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"last-bottom","cbFillHeight":true} -->
<div class="wp-block-group pricing-column pricing-column-list-price-top has-neutral-background-color has-background last-bottom-layout cb-fill-height-parent" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Plan Title', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"max-36"} -->
<p class="has-max-36-font-size" style="font-style:normal;font-weight:700">$100/mo</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button"><?php _e( 'Sign Up', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"cbUseFlex":true} -->
<div class="wp-block-column cb-flex-layout"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|xxx-small"}},"backgroundColor":"neutral","className":"pricing-column pricing-column-list-price-top","layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"last-bottom","cbFillHeight":true} -->
<div class="wp-block-group pricing-column pricing-column-list-price-top has-neutral-background-color has-background last-bottom-layout cb-fill-height-parent" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Plan Title', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"max-36"} -->
<p class="has-max-36-font-size" style="font-style:normal;font-weight:700">$100/mo</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'Plan Feature', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button"><?php _e( 'Sign Up', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
