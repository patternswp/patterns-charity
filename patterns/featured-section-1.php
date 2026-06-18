<?php
/**
 * Title: Featured Section 1
 * Slug: patterns-charity/featured-section-1
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
	<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
		<!-- wp:pattern {"slug":"patterns-charity/card-1"} /-->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"0px"}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
		<!-- wp:pattern {"slug":"patterns-charity/section-title-1"} /-->
		<!-- wp:columns -->
		<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph -->
			<p> <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget era', 'patterns-charity' ); ?> </p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p> <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget era', 'patterns-charity' ); ?> </p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph -->
			<p> <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget era', 'patterns-charity' ); ?> </p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p> <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget era', 'patterns-charity' ); ?> </p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
		<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:columns -->
		<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
			<!-- wp:image {"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="wp-block-image size-full is-resized is-style-rounded">
				<img src="
								<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.png" style="aspect-ratio:1;object-fit:cover;width:auto;height:60px" />
			</figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":5} -->
				<h5 class="wp-block-heading"> <?php esc_html_e( 'John Doe', 'patterns-charity' ); ?> </h5>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p> <?php esc_html_e( 'Volunteer', 'patterns-charity' ); ?> </p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column"></div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
