<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="blog search">
	<?php if ( get_theme_mod( 'blog_header_image' ) ) { ?>
	<div class="featured-hero blog-featured-header" style="background-image:url('<?php echo get_theme_mod( 'blog_header_image' ); ?>');">
	<?php }
	else { ?>
		<div class="featured-hero blog-featured-header">
	<?php } ?>
		<div class="blog-header">
				<h1 class="entry-title"><?php _e( 'Search Results for', 'foundationpress' ); ?> "<?php echo get_search_query(); ?>"</h1>
				</div>
	</div>
	<div class="main-container">
		<div class="main-grid">
			<main id="search-results" class="main-content">

			<header>

			</header>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content-simple-list', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			<?php
			if ( function_exists( 'foundationpress_pagination' ) ) :
				foundationpress_pagination();
			elseif ( is_paged() ) :
			?>
				<nav id="post-nav">
					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
				</nav>
			<?php endif; ?>

			</main>
		<?php //get_sidebar(); ?>

		</div>
	</div>
</div>
<?php get_footer();
