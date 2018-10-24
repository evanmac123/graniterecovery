<?php
/*
Template Name: Blog
*/
get_header(); ?>
<div class="blog">
	<div class="blog-header">
		<?php get_template_part( 'template-parts/featured-image' ); ?>
	</div>
		<div class="main-container">
		<div class="main-grid">
			<main class="main-content-full-width">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php comments_template(); ?>
				<?php endwhile; ?>
			</main>
		</div>
	</div>
</div>
<?php get_footer();
