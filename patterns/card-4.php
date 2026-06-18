<?php
/**
 * Title: Card 4
 * Slug: patterns-charity/card-4
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Card 4"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","width":"80px","height":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-9.png"style="object-fit:contain;width:80px;height:80px"/></figure>
	<!-- /wp:image -->
<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"900","fontSize":"40px"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="font-size:40px;font-style:normal;font-weight:900"><?php esc_html_e( '23,500+', 'patterns-charity' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Donations', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
