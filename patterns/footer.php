<?php
/**
 * Title: Footer
 * Slug: patterns-charity/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Charity
 * @subpackage Patterns_Charity/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"tertiary","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background">

	<!-- wp:pattern {"slug":"patterns-charity/featured-section-8"} /-->

	<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group" style="margin-bottom:15px">
			
				<!-- wp:image {"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-logo-white.png" style="object-fit:contain;width:50px;height:50px"/></figure>
				<!-- /wp:image -->

				<!-- wp:site-title {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"textTransform":"uppercase","lineHeight":"1.1","fontSize":"24px"}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"medium"} -->
			<p class="has-text-align-left has-default-color has-text-color has-link-color  has-medium-font-size"
				style="margin-top:0px;margin-bottom:0px">
				<?php
				esc_html_e(
					'Lorem ipsum dolor sit amet, consectetur adipiscing elit utelit
                tellus luctus.',
					'patterns-charity'
				);
				?>
				</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group" style="margin-top:25px">
				
			<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
			<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
			<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
			<!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
			<h6 class="wp-block-heading has-text-align-left has-default-color has-text-color"
				style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Contact Info', 'patterns-charity' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"small"} -->
				<p class="has-text-align-left has-default-color has-text-color has-link-color  has-small-font-size"
					style="margin-top:0px;margin-bottom:0px">
					<?php
					esc_html_e(
						'785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St.
                    Celina, 10299',
						'patterns-charity'
					);
					?>
					</p>
				<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"tertiary"} -->
					<p class="pwp-txt-dec-non has-tertiary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-charity' ); ?></a></p>
					<!-- /wp:paragraph -->


					<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"tertiary"} -->
					<p class="pwp-txt-dec-non has-tertiary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-charity' ); ?></a></p>
					<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
			<!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
			<h6 class="wp-block-heading has-text-align-left has-default-color has-text-color"
				style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Category', 'patterns-charity' ); ?></h6>
			<!-- /wp:heading -->

				<!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"spacing":{"blockGap":"15px"},"typography":{"letterSpacing":"0px","fontSize":"14px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Donor Wall', 'patterns-charity' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Make Donations', 'patterns-charity' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Donation History', 'patterns-charity' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Careers', 'patterns-charity' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact Us', 'patterns-charity' ); ?>","url":"#"} /-->
			<!-- /wp:navigation -->


		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
			<h6 class="wp-block-heading has-text-align-left has-default-color has-text-color"
				style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Recent Posts', 'patterns-charity' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:latest-posts {"postsToShow":2,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"color":{"background":"#0000007a"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#0000007a;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:pattern {"slug":"patterns-charity/copyright"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:pattern {"slug":"patterns-charity/scroll-to-top-button"} /-->
</div>
<!-- /wp:group -->
