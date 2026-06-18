<?php
/**
 * Title: Featured Section 10
 * Slug: patterns-charity/featured-section-10
 * Categories: featured, call-to-action
 * Description: A layout with an image in the left column and a title, content, and Card 2 pattern in the right column.
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"position":{"type":""},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"quaternary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-quaternary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"position":{"type":""},"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Get In Touch', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:800"><?php esc_html_e( 'How can we help?', 'patterns-charity' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Have a question or feedback? Fill out the form below, and we\'ll get back to you.', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-charity' ); ?>
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"position":{"type":""},"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Our Location', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:800"><?php esc_html_e( 'Love to hear from you. Let\'s connect', 'patterns-charity' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30","width":"0px","style":{"layout":{}}} -->
<div style="height:var(--wp--preset--spacing--30);width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
<h6 class="wp-block-heading has-text-align-left" style="margin-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Address', 'patterns-charity' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"pwp-txt-dec-non","textAlign":"left","level":6,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
<h6 class="wp-block-heading has-text-align-left" style="margin-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Email Address', 'patterns-charity' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="pwp-txt-dec-non has-text-align-center has-base-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-charity' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="pwp-txt-dec-non has-text-align-center has-base-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-charity' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
<h6 class="wp-block-heading has-text-align-left" style="margin-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Phone Number', 'patterns-charity' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontSize":"small"} -->
<p class="pwp-txt-dec-non has-text-align-center has-base-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:500"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-charity' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","align":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontSize":"small"} -->
<p class="pwp-txt-dec-non has-text-align-center has-base-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:500"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-charity' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
