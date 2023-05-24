<?php
/**
 * Title: Page Content with Left Sidebar
 * Slug: crosswinds-framework/page-content-left-sidebar
 * Categories: crosswinds-framework-page
 * Viewport Width: 1280
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|large","left":"var:preset|spacing|x-small"}}},"className":"page-content-left-sidebar","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull page-content-left-sidebar" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","className":"site-sidebar","theme":"crosswinds-framework-dev"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-content {"layout":{"inherit":true}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
