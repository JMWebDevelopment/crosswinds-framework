<?php
/**
 * Title: Query - Grid View
 * Slug: jm-web-dev-fse-starter-theme/query-pattern-grid
 * Categories: jm-web-dev-fse-starter-theme-queries
 * Block Types: core/query
 * Viewport Width: 1200
 */
?>

<!-- wp:query {"queryId":2,"query":{"perPage":"12","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"className":"query-pattern query-pattern-grid cb-flex-layout","cbUseFlex":true} -->
<div class="wp-block-query query-pattern query-pattern-grid cb-flex-layout"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"className":"last-bottom-layout cb-fill-height-parent","layout":{"type":"constrained"},"cbInnerLayout":"last-bottom"} -->
<div class="wp-block-group last-bottom-layout cb-fill-height-parent"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"fontSize":"x-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:html -->
&bull;
<!-- /wp:html -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"<?php _e( 'Read This Post', 'jm-web-dev-fse-starter-theme' ); ?>","style":{"spacing":{"padding":{"top":"10px","right":"var:preset|spacing|x-small","bottom":"10px","left":"var:preset|spacing|x-small"}},"border":{"width":"1px"}},"borderColor":"contrast","backgroundColor":"contrast","textColor":"base"} /--></div>
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
