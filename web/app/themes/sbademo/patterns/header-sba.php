<?php
/**
 * Title: SBA custom header
 * Slug: twentytwentyfour/header-sba
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Demo testing.
 *
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background"
	style="padding-top:20px;padding-bottom:20px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"className":"wp-block-sba-header__menu-toggle", "layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
        <div class="wp-block-group wp-block-sba-header__menu-toggle">
		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
		</div>
		<!-- /wp:group -->
    <!-- wp:group {"className":"wp-block-sba-header__administration", "style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-group wp-block-sba-header__administration">
      <!-- wp:paragraph -->
		    <p><?php esc_html_e( 'Administrator Kelly Loeffler', 'twentytwentyfour' ); ?></p>
		  <!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
    <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-group">
            <!-- wp:image {"align":"center","width":"45px","height":"49px","scale":"cover","sizeSlug":"full","linkDestination":"none", "className":"is-style-rounded"} -->
            <figure class="wp-block-image aligncenter size-full is-resized">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/green-staircase.webp" alt="<?php esc_attr_e( 'SBA logo' ); ?>" style="object-fit:cover;width:45px;height:49px" />
            </figure>
		<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
    <!-- wp:group {"className":"wp-block-sba-search", "style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex"}} -->
		<div class="wp-block-group wp-block-sba-search">
      <!-- wp:button -->
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M13 5c-3.3 0-6 2.7-6 6 0 1.4.5 2.7 1.3 3.7l-3.8 3.8 1.1 1.1 3.8-3.8c1 .8 2.3 1.3 3.7 1.3 3.3 0 6-2.7 6-6S16.3 5 13 5zm0 10.5c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5z"></path></svg>
        </a>
			</div>
			<!-- /wp:button -->
      <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'About', 'twentytwentyfour' ); ?>"} -->

						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Log In', 'twentytwentyfour' ); ?>","url":"#"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->