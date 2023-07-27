<?php
/**
 * Title: Query - List Columns View
 * Slug: crosswinds-framework/query-pattern-list-columns
 * Categories: crosswinds-framework-queries
 * Block Types: core/query
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- wp:query {"queryId":1,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"query-pattern query-pattern-list-columns","layout":{"type":"default"}} -->
<div class="wp-block-query query-pattern query-pattern-list-columns"><!-- wp:post-template -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-title {"fontSize":"x-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>•</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"<?php _e( 'Read This Post', 'crosswinds-framework' ); ?>","style":{"spacing":{"padding":{"top":"10px","right":"var:preset|spacing|x-small","bottom":"10px","left":"var:preset|spacing|x-small"}},"border":{"width":"1px"}},"borderColor":"contrast","backgroundColor":"contrast","textColor":"base"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
