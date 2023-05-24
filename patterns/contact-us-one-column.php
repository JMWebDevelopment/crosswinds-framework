<?php
/**
 * Title: Contact Us - One Column
 * Slug: crosswinds-framework/contact-us-one-column
 * Categories: crosswinds-framework-contact-us
 * Viewport Width: 800
 * Inserter: true
 * Block Types: core/post-content
 * Post Types: page
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|large","left":"var:preset|spacing|x-small"}}},"className":"contact-us contact-us-one-column","layout":{"type":"constrained"}} -->
<div class="wp-block-group contact-us contact-us-one-column" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php _e( 'Contact Us', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php _e( 'Email: me@example.com', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php _e( 'Phone: 123-456-7890', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php _e( 'Find Us On:', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"twitch"} /-->

<!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"patreon"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitch"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php _e( 'Put Your Contact Form Here', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
