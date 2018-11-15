<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="blog single">

	<?php
		ob_start();
		get_template_part( 'template-parts/featured-image' );
		$out = ob_get_contents();
		ob_clean();
		if ( has_post_thumbnail( $post->ID ) ) : ?>
			<div class="featured-hero main-container" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
		<?php else: ?>
			<div class="featured-hero blog-featured-header">
		<?php endif; ?>
				<div class="blog-header">
						<div class="blog-header-breadcrumb">
									<?php if(function_exists('bcn_display'))
									{
											bcn_display();
									}?>
						</div>
						<h1>GRC Blog</h1>
				</div>
			</div>

	<div class="main-container">
		<div class="main-grid">
			<main class="main-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content-single', '' ); ?>
					<?php the_post_navigation(
						array(
		            'prev_text'                  => __( 'Previous: %title' ),
		            'next_text'                  => __( 'Next: %title' ),
		        )
					); ?>
				<?php endwhile; ?>
			</main>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer();
