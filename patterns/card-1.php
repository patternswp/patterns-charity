<?php
/**
 * Title: Card 1
 * Slug: patterns-charity/card-1
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Card 1"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg","isUserOverlayColor":true,"minHeight":600,"customGradient":"linear-gradient(90deg,rgba(0,0,0,0) 85%,rgb(255,255,255) 0%)","contentPosition":"bottom right","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"0","bottom":"var:preset|spacing|60","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-right" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(90deg,rgba(0,0,0,0) 85%,rgb(255,255,255) 0%)"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Image of hands together', 'patterns-charity' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	
	<!-- wp:group {"align":"full","backgroundColor":"primary","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull has-primary-background-color has-background">
	<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100px"},"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="min-height:100px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:image {"align":"center","width":"80px","height":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png"style="object-fit:contain;width:80px;height:80px"/></figure>
	<!-- /wp:image -->
	<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"textColor":"default","fontSize":"large"} -->
	<p class="has-text-align-center has-default-color has-text-color has-link-color has-large-font-size" style="margin-top:5px;margin-bottom:0px;font-style:normal;font-weight:700"> <?php esc_html_e( '+98', 'patterns-charity' ); ?> </p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","fontSize":"13px"}},"textColor":"default"} -->
	<p class="has-text-align-center has-default-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:600;text-transform:uppercase"> <?php esc_html_e( 'causes', 'patterns-charity' ); ?> </p>
	<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
