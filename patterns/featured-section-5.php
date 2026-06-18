<?php
/**
 * Title: Featured Section 5
 * Slug: patterns-charity/featured-section-5
 * Categories: featured
 * Description: A layout with an image in the left column and a title, content, and Card 2 pattern in the right column.
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Your questions answered', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-style:normal;font-weight:800"><?php esc_html_e( 'Get informed now. Answers to your common questions', 'patterns-charity' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg","dimRatio":0,"customOverlayColor":"#918883","isUserOverlayColor":true,"minHeight":235,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:235px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#918883"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-9.jpg","dimRatio":0,"customOverlayColor":"#9e8f76","isUserOverlayColor":true,"minHeight":235,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:235px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9e8f76"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-9.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg","dimRatio":0,"customOverlayColor":"#a6a3a4","isUserOverlayColor":true,"minHeight":500,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a6a3a4"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"fontSize":"medium"} -->
<h5 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--10)"><?php esc_html_e( 'Frequently asked questions', 'patterns-charity' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget era', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	
<!-- wp:pattern {"slug":"patterns-charity/card-5"} /-->

<!-- wp:details {"className":"is-style-custom-details","style":{"spacing":{"blockGap":"0px"}}} -->
<details class="wp-block-details is-style-custom-details"><summary><?php esc_html_e( 'How are funds utilized ?', 'patterns-charity' ); ?></summary><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget era', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->


<!-- wp:details {"className":"is-style-custom-details","style":{"spacing":{"blockGap":"0px"}}} -->
<details class="wp-block-details is-style-custom-details"><summary><?php esc_html_e( 'Can I volunteer internationally?', 'patterns-charity' ); ?></summary><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget era', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

</div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
