<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="blog index">
	<?php if ( get_theme_mod( 'blog_header_image' ) ) { ?>
	<div class="featured-hero blog-featured-header" style="background-image:url('<?php echo get_theme_mod( 'blog_header_image' ); ?>');">
	<?php }
	else { ?>
		<div class="featured-hero blog-featured-header">
	<?php } ?>
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
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content-list', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php
			if ( function_exists( 'foundationpress_pagination' ) ) :
				foundationpress_pagination();
			elseif ( is_paged() ) :
			?>
			<nav id="post-nav">
				<div class="post-previous">Next: <?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next">Previous: <?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
			<?php endif; ?>

		</main>
		<?php get_sidebar(); ?>

	</div>
</div>
</div>
<?php get_footer();
