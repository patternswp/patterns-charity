<?php
/**
 * Title: Card 7
 * Slug: patterns-charity/card-7
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Card 7"},"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Send Us Message', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"800"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-default-color has-text-color has-link-color has-x-large-font-size" style="font-style:normal;font-weight:800"><?php esc_html_e( 'Have any Donation or Contact Us', 'patterns-charity' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-default-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:image {"width":"30px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"},"spacing":{"margin":{"top":"-2px"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-top:-2px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-12.png" style="width:30px"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":6,"className":"pwp-txt-dec-non","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
<h6 class="wp-block-heading pwp-txt-dec-non has-medium-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Just Mail Us:', 'patterns-charity' ); ?><a href="<?php echo esc_url( 'mailto:support@demo.com' ); ?>"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e( 'support@demo.com', 'patterns-charity' ); ?></mark></a></h6>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
