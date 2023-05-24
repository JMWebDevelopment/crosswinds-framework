<?php
/**
 * Title: Error 404 Content with No Sidebar
 * Slug: crosswinds-framework/error-content
 * Categories: crosswinds-framework-404
 * Viewport Width: 800
 * Inserter: true
 */
?>

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
