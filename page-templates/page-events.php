<?php
/*
Template Name: Event Page
*/
get_header(); ?>
<div class="event blog">
	<?php if ( get_theme_mod( 'events_header_image' ) ) { ?>
	<div class="featured-hero events-featured-header" style="background-image:url('<?php echo get_theme_mod( 'event_header_image' ); ?>">
	<?php }
	else { ?>
		<div class="featured-hero events-featured-header">
	<?php } ?>
				<div class="blog-header">
				<div class="blog-header-breadcrumb">
							<?php if(function_exists('bcn_display'))
							{
									bcn_display();
							}?>
				</div>
				<h2 class="h1">GRC Events</h2>
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
