<?php
/**
 * Title: Product Card
 * Slug: crosswinds-framework/card-product
 * Categories: crosswinds-framework-cards
 * Viewport Width: 370
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"backgroundColor":"neutral","className":"card-product","layout":{"type":"constrained"}} -->
<div class="wp-block-group card-product has-neutral-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:crosswinds-blocks/single-content {"postId":34,"postType":"product","postTypeTitle":"Product"} -->
<!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-small","right":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"var:preset|spacing|xx-small"},"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xx-small);padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:var(--wp--preset--spacing--xx-small)"><!-- wp:post-title {"fontSize":"x-large"} /-->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true} /-->

<!-- wp:paragraph -->
<p>•</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"<?php _e( 'Learn More', 'crosswinds-framework' ); ?>","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"backgroundColor":"contrast","textColor":"base"} /--></div>
<!-- /wp:group -->
<!-- /wp:crosswinds-blocks/single-content --></div>
<!-- /wp:group -->
