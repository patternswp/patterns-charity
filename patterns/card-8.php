<?php
/**
 * Title: Card 8
 * Slug: patterns-charity/card-8
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Card 8"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"backgroundColor":"primary","textColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-13.png" style="width:60px"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Give a Gift For People', 'patterns-charity' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Quos dolo rem consequ untur, natus laudantium commodie', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"default","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"borderColor":"default","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-default-color has-text-color has-link-color has-border-color has-default-border-color wp-element-button"><?php esc_html_e( 'Read More', 'patterns-charity' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
