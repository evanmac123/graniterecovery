<?php
/**
 * The template for displaying news pages
 *
 * Used to display news-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0

 *
 * Template Post Type: news
 */



get_header(); ?>
<div class="blog archive-news">
	<?php if ( get_theme_mod( 'news_header_image' ) ) { ?>
	<div class="featured-hero news-featured-header" style="background-image:url('<?php echo get_theme_mod( 'blog_header_image' ); ?>');">
	<?php }
	else { ?>
		<div class="featured-hero news-featured-header">
	<?php } ?>				<div class="blog-header">
				<div class="blog-header-breadcrumb">
							<?php if(function_exists('bcn_display'))
							{
									bcn_display();
							}?>
				</div>
				<h1>GRC In The News</h1>
				</div>
	</div>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content-simple-list', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content-simple-list', 'none' ); ?>

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
		<aside class="sidebar news-sidebar">
			<?php dynamic_sidebar( 'sidebar-news-widgets' ); ?>
		</aside>


	</div>
</div>
</div>

<?php get_footer();
