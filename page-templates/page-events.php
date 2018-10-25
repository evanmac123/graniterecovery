<?php
/*
Template Name: Event Page
*/
get_header(); ?>
<div class="event blog">
	<div class="featured-hero" style="background-image:url('<?php echo get_theme_mod( 'event_header_image' ); ?>">
				<div class="blog-header">
				<div class="blog-header-breadcrumb">
							<?php if(function_exists('bcn_display'))
							{
									bcn_display();
							}?>
				</div>
				<h1>GRC Events</h1>
				</div>
	</div>
	<?php ?>
	<div class="main-container">
		<div class="main-grid">
			<main class="main-content-full-width">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content',  get_post_format()  ); ?>
				<?php endwhile; ?>
			</main>
		</div>
	</div>
</div>
<?php get_footer();
