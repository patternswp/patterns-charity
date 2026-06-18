<?php
/**
 * Title: No Search Result
 * Slug: patterns-charity/hidden-no-search-results
 * Inserter: no
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'patterns-charity' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'patterns-charity' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'patterns-charity' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'patterns-charity' ); ?>","buttonUseIcon":true} /-->
