<?php
/**
 * Title: Primary Header
 * Slug: patterns-charity/hidden-primary-header
 * Inserter: no
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
		
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
	<div class="wp-block-group alignwide">
	<!-- wp:pattern {"slug":"patterns-charity/site-identity"} /-->

	<!-- wp:pattern {"slug":"patterns-charity/navigation-menu"} /-->

	<!-- wp:buttons {"style":{"spacing":{"blockGap":"15px"}}} -->
	<div class="wp-block-buttons">

	<!-- wp:button {"className":"is-style-secondary-button","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-button is-style-secondary-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Get Help', 'patterns-charity' ); ?></a></div>
	<!-- /wp:button -->

	<!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Donate', 'patterns-charity' ); ?></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
