<?php
/**
 * Title: Post Content with Right Sidebar
 * Slug: crosswinds-framework/post-content-right-sidebar
 * Categories: crosswinds-framework-post-content
 * Viewport Width: 1280
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|large","left":"var:preset|spacing|x-small"}}},"className":"post-content-right-sidebar","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull post-content-right-sidebar" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>•</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:paragraph -->
<p>•</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"layout":{"inherit":true}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php _e( 'Tags:', 'crosswinds-framework' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","className":"site-sidebar","theme":"crosswinds-framework-dev"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:template-part {"slug":"comments","tagName":"section","className":"post-comments"} /--></div>
<!-- /wp:group -->
