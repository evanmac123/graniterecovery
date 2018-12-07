<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div class="full-width side">
	<header class="cat" style="background-image:url('<?php the_field("header-image"); ?>');">
		<div class="side-header">
			<h1 class="side-header"><?php the_title(); ?></h1>
		</div>
	</header>
	<div class="grid-x" data-equalizer data-equalize-on="medium">
		<div class="side-main large-12 cell">
			<div class="main-container">
				<div class="main-grid sidebar-left">
					<main class="main-content-full-width">
						<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'page' ); ?>
						<?php endwhile; ?>
					</main>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
<?php get_footer();
