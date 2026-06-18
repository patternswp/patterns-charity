<?php
/**
 * Title:404
 * Slug: patterns-charity/hidden-404
 * Inserter: no
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg","hasParallax":true,"dimRatio":70,"overlayColor":"accent","isUserOverlayColor":true,"minHeight":40,"minHeightUnit":"vh","contentPosition":"center center","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="min-height:40vh"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}},"textColor":"default","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-left has-default-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html__( '404', 'patterns-charity' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
 
<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">

<!-- wp:group {"align":"full","backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background"><!-- wp:group {"align":"full","backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background"><!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","wideSize":"75%"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained","wideSize":"","justifyContent":"center","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"14rem","fontStyle":"normal","fontWeight":"800"}}} -->
<h2 class="wp-block-heading" style="font-size:14rem;font-style:normal;font-weight:800"><?php echo esc_html__( '404', 'patterns-charity' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"is-style-relative at-pos pw-error-404","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide is-style-relative at-pos pw-error-404"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"fontSize":"5rem"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-left" style="font-size:5rem"><?php echo esc_html__( 'Ooops!', 'patterns-charity' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"15px"}}},"fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size" style="margin-bottom:15px"><?php echo esc_html__( 'This page could not be found.', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'We can\'t find the page you\'re looking for. Check out our Help Center or head back to home', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside"} /-->

<!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->
