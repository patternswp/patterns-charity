<?php
/**
 * Title: Featured Section 4
 * Slug: patterns-charity/featured-section-4
 * Categories: featured
 * Description: A layout with an image in the left column and a title, content, and Card 2 pattern in the right column.
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"quaternary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-quaternary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:pattern {"slug":"patterns-charity/section-title-3"} /-->


<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%">
<!-- wp:pattern {"slug":"patterns-charity/card-4"} /-->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","width":"80px","height":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-3.png"style="object-fit:contain;width:80px;height:80px"/></figure>
	<!-- /wp:image -->
<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"900","fontSize":"40px"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="font-size:40px;font-style:normal;font-weight:900"><?php esc_html_e( '1,400M', 'patterns-charity' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Funds Raised', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","width":"80px","height":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-4.png"style="object-fit:contain;width:80px;height:80px"/></figure>
	<!-- /wp:image -->
<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"900","fontSize":"40px"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="font-size:40px;font-style:normal;font-weight:900"><?php esc_html_e( '489+', 'patterns-charity' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Volunteers', 'patterns-charity' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
