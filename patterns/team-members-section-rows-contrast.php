<?php
/**
 * Title: Team Members Section - Rows with Contrast Background
 * Slug: crosswinds-framework/team-members-section-rows-contrast
 * Categories: crosswinds-framework-team-members
 * Viewport Width: 1200
 * Inserter: true
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|xx-small"},"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","className":"team-members-section team-members-section-grid-contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull team-members-section team-members-section-grid-contrast has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--xx-small)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php _e( 'Our Great Team', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:crosswinds-blocks/basic-grid {"align":"wide"} -->
<div class="wp-block-crosswinds-blocks-basic-grid alignwide basic-grid-has-4-desktop-columns basic-grid-has-2-tablet-columns basic-grid-has-1-mobile-columns" style="grid-column-gap:30px;grid-row-gap:30px"><!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"team-member team-member-column","layout":{"type":"constrained"},"cbUseFlex":true,"cbFillHeight":true} -->
<div class="wp-block-group team-member team-member-column"><!-- wp:image {"id":1957,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-1957"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"last-bottom","cbFillHeight":true} -->
<div class="wp-block-group last-bottom-layout cb-fill-height-parent" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"max-36"} -->
<p class="has-text-align-center has-max-36-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Person Name', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Position', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"twitch"} /-->

<!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"patreon"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitch"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php _e( 'Contact Me', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"team-member team-member-column","layout":{"type":"constrained"},"cbUseFlex":true,"cbFillHeight":true} -->
<div class="wp-block-group team-member team-member-column"><!-- wp:image {"id":1957,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-1957"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"last-bottom","cbFillHeight":true} -->
<div class="wp-block-group last-bottom-layout cb-fill-height-parent" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"max-36"} -->
<p class="has-text-align-center has-max-36-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Person Name', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Position', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"twitch"} /-->

<!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"patreon"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitch"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php _e( 'Contact Me', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"team-member team-member-column","layout":{"type":"constrained"},"cbUseFlex":true,"cbFillHeight":true} -->
<div class="wp-block-group team-member team-member-column"><!-- wp:image {"id":1957,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-1957"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"last-bottom","cbFillHeight":true} -->
<div class="wp-block-group last-bottom-layout cb-fill-height-parent" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"max-36"} -->
<p class="has-text-align-center has-max-36-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Person Name', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Position', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"twitch"} /-->

<!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"patreon"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitch"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php _e( 'Contact Me', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item -->

<!-- wp:crosswinds-blocks/basic-grid-item -->
<div class="wp-block-crosswinds-blocks-basic-grid-item item-span-1-desktop-columns item-span-1-desktop-row item-span-1-tablet-columns item-span-1-tablet-row item-span-1-mobile-columns item-span-1-mobile-row normal-layout"><!-- wp:group {"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"normal","cbFillHeight":true} -->
<div class="wp-block-group normal-layout cb-fill-height-parent"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"team-member team-member-column","layout":{"type":"constrained"},"cbUseFlex":true,"cbFillHeight":true} -->
<div class="wp-block-group team-member team-member-column"><!-- wp:image {"id":1957,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-placeholder.png" alt="" class="wp-image-1957"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"},"cbUseFlex":true,"cbInnerLayout":"last-bottom","cbFillHeight":true} -->
<div class="wp-block-group last-bottom-layout cb-fill-height-parent" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"max-36"} -->
<p class="has-text-align-center has-max-36-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Person Name', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Position', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"twitch"} /-->

<!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"patreon"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitch"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php _e( 'Contact Me', 'crosswinds-framework' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:crosswinds-blocks/basic-grid-item --></div>
<!-- /wp:crosswinds-blocks/basic-grid --></div>
<!-- /wp:group -->
