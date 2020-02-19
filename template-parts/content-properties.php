<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

	get_template_part( 'template-parts/entry-header' );

	if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	}

	?>

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php

		$coupon_code 		= get_field('coupon_code');
		$community_name 	= get_field('community_name');
		$manager_name 		= get_field('manager_name');
		$manager_phone 		= get_field('manager_phone');
		$manager_email 		= get_field('manager_email');

		?>

			<div class="properties-list-details">
				<div class="properties-group">
					<div class="properties-label">Coupon:</div>
					<div class="properties-value"><?php echo $coupon_code; ?></div>
				</div>
				<div class="properties-group">
					<div class="properties-label">Community Name:</div>
					<div class="properties-value"><?php echo $community_name; ?></div>
				</div>
				<div class="properties-group">
					<div class="properties-label">Manager Name:</div>
					<div class="properties-value"><?php echo $manager_name; ?></div>
				</div>
				<div class="properties-group">
					<div class="properties-label">Manager Phone:</div>
					<div class="properties-value"><?php echo $manager_phone; ?></div>
				</div>
				<div class="properties-group">
					<div class="properties-label">Manager Email:</div>
					<div class="properties-value"><?php echo $manager_email; ?></div>
				</div>
			</div>

		<?php

		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	
	?>

</article><!-- .post -->
