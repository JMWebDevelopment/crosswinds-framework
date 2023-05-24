<?php
/**
 * Title: Error 404 Content with Left Sidebar
 * Slug: crosswinds-framework/error-content-left-sidebar
 * Categories: crosswinds-framework-404
 * Viewport Width: 800
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|large","left":"var:preset|spacing|x-small"}}},"className":"page-content-left-sidebar","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull page-content-left-sidebar" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","className":"site-sidebar","theme":"crosswinds-framework-dev"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%">
<!-- wp:paragraph -->
<p><?php _e( 'Oops. It looks like the page you\'re looking for isn\'t here. You can use the search form below or look through the links to find the post or page you\'re looking for.', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php _e( 'Search', 'crosswinds-framework' ); ?>","buttonText":"<?php _e( 'Search', 'crosswinds-framework' ); ?>"} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php _e( 'Pages', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:page-list /-->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php _e( 'Categories', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories /-->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
