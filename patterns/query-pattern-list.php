<?php
/**
 * Title: Query - List View
 * Slug: crosswinds-framework/query-pattern-list
 * Categories: crosswinds-framework-queries
 * Block Types: core/query
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list"},"className":"query-pattern query-pattern-list"} -->
<div class="wp-block-query query-pattern query-pattern-list"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"fontSize":"max-36"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>•</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"<?php _e( 'Read This Post', 'crosswinds-framework' ); ?>","style":{"spacing":{"padding":{"top":"10px","right":"var:preset|spacing|x-small","bottom":"10px","left":"var:preset|spacing|x-small"}},"border":{"width":"1px"}},"borderColor":"contrast","backgroundColor":"contrast","textColor":"base"} /--></div>
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
