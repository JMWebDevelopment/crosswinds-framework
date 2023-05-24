<?php
/**
 * Title: FAQs - Two Columns
 * Slug: crosswinds-framework/faqs-section-two-columns
 * Categories: crosswinds-framework-faqs
 * Viewport Width: 1200
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"className":"faqs-section faqs-section-two-columns","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull faqs-section faqs-section-two-columns" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php _e( 'Frequently Asked Questions', 'crosswinds-framework' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:crosswinds-blocks/accordions {"className":"basic-accordion"} -->
<div class="wp-block-crosswinds-blocks-accordions basic-accordion"><!-- wp:crosswinds-blocks/accordion {"panelId":"panel-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}},"border":{"radius":"12px"}},"backgroundColor":"neutral","className":"has-contrast-drop-shadow"} -->
<div class="wp-block-crosswinds-blocks-accordion has-contrast-drop-shadow has-neutral-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:crosswinds-blocks/accordion-title {"accordionPanelId":"panel-1","accordionPanelIcon":"plus-minus"} -->
<div class="accordion-title-container"><div id="panel-1-control" class="wp-block-crosswinds-blocks-accordion-title" role="button" aria-controls="panel-1" aria-expanded="false"><!-- wp:heading {"level":3,"placeholder":"Add a heading here..."} -->
<h3 class="wp-block-heading"><?php _e( 'This is a heading', 'crosswinds-framework' ); ?></h3>
<!-- /wp:heading --><span class="accordion-icon plus-minus"></span></div></div>
<!-- /wp:crosswinds-blocks/accordion-title -->

<!-- wp:crosswinds-blocks/accordion-body {"accordionPanelId":"panel-1"} -->
<div id="panel-1" class="wp-block-crosswinds-blocks-accordion-body" role="region" aria-labelledby="panel-1-control" hidden><!-- wp:paragraph {"placeholder":"Add a heading here..."} -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:crosswinds-blocks/accordion-body --></div>
<!-- /wp:crosswinds-blocks/accordion -->

<!-- wp:crosswinds-blocks/accordion {"panelId":"panel-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}},"border":{"radius":"12px"}},"backgroundColor":"neutral","className":"has-contrast-drop-shadow"} -->
<div class="wp-block-crosswinds-blocks-accordion has-contrast-drop-shadow has-neutral-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:crosswinds-blocks/accordion-title {"accordionPanelId":"panel-2","accordionPanelIcon":"plus-minus"} -->
<div class="accordion-title-container"><div id="panel-2-control" class="wp-block-crosswinds-blocks-accordion-title" role="button" aria-controls="panel-2" aria-expanded="false"><!-- wp:heading {"level":3,"placeholder":"Add a heading here..."} -->
<h3 class="wp-block-heading"><?php _e( 'This is a heading', 'crosswinds-framework' ); ?></h3>
<!-- /wp:heading --><span class="accordion-icon plus-minus"></span></div></div>
<!-- /wp:crosswinds-blocks/accordion-title -->

<!-- wp:crosswinds-blocks/accordion-body {"accordionPanelId":"panel-2"} -->
<div id="panel-2" class="wp-block-crosswinds-blocks-accordion-body" role="region" aria-labelledby="panel-2-control" hidden><!-- wp:paragraph {"placeholder":"Add a heading here..."} -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:crosswinds-blocks/accordion-body --></div>
<!-- /wp:crosswinds-blocks/accordion -->

<!-- wp:crosswinds-blocks/accordion {"panelId":"panel-3","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"backgroundColor":"neutral","className":"has-contrast-drop-shadow"} -->
<div class="wp-block-crosswinds-blocks-accordion has-contrast-drop-shadow has-neutral-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:crosswinds-blocks/accordion-title {"accordionPanelId":"panel-3","accordionPanelIcon":"plus-minus"} -->
<div class="accordion-title-container"><div id="panel-3-control" class="wp-block-crosswinds-blocks-accordion-title" role="button" aria-controls="panel-3" aria-expanded="false"><!-- wp:heading {"level":3,"placeholder":"Add a heading here..."} -->
<h3 class="wp-block-heading"><?php _e( 'This is a heading', 'crosswinds-framework' ); ?></h3>
<!-- /wp:heading --><span class="accordion-icon plus-minus"></span></div></div>
<!-- /wp:crosswinds-blocks/accordion-title -->

<!-- wp:crosswinds-blocks/accordion-body {"accordionPanelId":"panel-3"} -->
<div id="panel-3" class="wp-block-crosswinds-blocks-accordion-body" role="region" aria-labelledby="panel-3-control" hidden><!-- wp:paragraph {"placeholder":"Add a heading here..."} -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:crosswinds-blocks/accordion-body --></div>
<!-- /wp:crosswinds-blocks/accordion --></div>
<!-- /wp:crosswinds-blocks/accordions --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:crosswinds-blocks/accordions {"className":"basic-accordion"} -->
<div class="wp-block-crosswinds-blocks-accordions basic-accordion"><!-- wp:crosswinds-blocks/accordion {"panelId":"panel-4","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}},"border":{"radius":"12px"}},"backgroundColor":"neutral","className":"has-contrast-drop-shadow"} -->
<div class="wp-block-crosswinds-blocks-accordion has-contrast-drop-shadow has-neutral-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:crosswinds-blocks/accordion-title {"accordionPanelId":"panel-4","accordionPanelIcon":"plus-minus"} -->
<div class="accordion-title-container"><div id="panel-4-control" class="wp-block-crosswinds-blocks-accordion-title" role="button" aria-controls="panel-4" aria-expanded="false"><!-- wp:heading {"level":3,"placeholder":"Add a heading here..."} -->
<h3 class="wp-block-heading"><?php _e( 'This is a heading', 'crosswinds-framework' ); ?></h3>
<!-- /wp:heading --><span class="accordion-icon plus-minus"></span></div></div>
<!-- /wp:crosswinds-blocks/accordion-title -->

<!-- wp:crosswinds-blocks/accordion-body {"accordionPanelId":"panel-4"} -->
<div id="panel-4" class="wp-block-crosswinds-blocks-accordion-body" role="region" aria-labelledby="panel-4-control" hidden><!-- wp:paragraph {"placeholder":"Add a heading here..."} -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:crosswinds-blocks/accordion-body --></div>
<!-- /wp:crosswinds-blocks/accordion -->

<!-- wp:crosswinds-blocks/accordion {"panelId":"panel-5","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}},"border":{"radius":"12px"}},"backgroundColor":"neutral","className":"has-contrast-drop-shadow"} -->
<div class="wp-block-crosswinds-blocks-accordion has-contrast-drop-shadow has-neutral-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:crosswinds-blocks/accordion-title {"accordionPanelId":"panel-5","accordionPanelIcon":"plus-minus"} -->
<div class="accordion-title-container"><div id="panel-5-control" class="wp-block-crosswinds-blocks-accordion-title" role="button" aria-controls="panel-5" aria-expanded="false"><!-- wp:heading {"level":3,"placeholder":"Add a heading here..."} -->
<h3 class="wp-block-heading"><?php _e( 'This is a heading', 'crosswinds-framework' ); ?></h3>
<!-- /wp:heading --><span class="accordion-icon plus-minus"></span></div></div>
<!-- /wp:crosswinds-blocks/accordion-title -->

<!-- wp:crosswinds-blocks/accordion-body {"accordionPanelId":"panel-5"} -->
<div id="panel-5" class="wp-block-crosswinds-blocks-accordion-body" role="region" aria-labelledby="panel-5-control" hidden><!-- wp:paragraph {"placeholder":"Add a heading here..."} -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:crosswinds-blocks/accordion-body --></div>
<!-- /wp:crosswinds-blocks/accordion -->

<!-- wp:crosswinds-blocks/accordion {"panelId":"panel-6","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"backgroundColor":"neutral","className":"has-contrast-drop-shadow"} -->
<div class="wp-block-crosswinds-blocks-accordion has-contrast-drop-shadow has-neutral-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:crosswinds-blocks/accordion-title {"accordionPanelId":"panel-6","accordionPanelIcon":"plus-minus"} -->
<div class="accordion-title-container"><div id="panel-6-control" class="wp-block-crosswinds-blocks-accordion-title" role="button" aria-controls="panel-6" aria-expanded="false"><!-- wp:heading {"level":3,"placeholder":"Add a heading here..."} -->
<h3 class="wp-block-heading"><?php _e( 'This is a heading', 'crosswinds-framework' ); ?></h3>
<!-- /wp:heading --><span class="accordion-icon plus-minus"></span></div></div>
<!-- /wp:crosswinds-blocks/accordion-title -->

<!-- wp:crosswinds-blocks/accordion-body {"accordionPanelId":"panel-6"} -->
<div id="panel-6" class="wp-block-crosswinds-blocks-accordion-body" role="region" aria-labelledby="panel-6-control" hidden><!-- wp:paragraph {"placeholder":"Add a heading here..."} -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:crosswinds-blocks/accordion-body --></div>
<!-- /wp:crosswinds-blocks/accordion --></div>
<!-- /wp:crosswinds-blocks/accordions --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
