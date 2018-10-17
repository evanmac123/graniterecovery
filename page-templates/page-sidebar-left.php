<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>
<div class="side">
	<header style="background-image:url('<?php the_field("left-sidebar-header-image"); ?>');">
				<div class="side-header">
				<div class="side-header-breadcrumb">
						  <?php if(function_exists('bcn_display'))
					    {
					        bcn_display();
					    }?>
				</div>
				<h1 class="side-header"><?php the_title(); ?></h1>
				</div>
	</header>
	<div class="grid-x"  data-equalizer data-equalize-on="medium">
	<div class="side-bar large-3 cell">
		<section>
				<div>
					<?php foundationpress_left_nav(); ?>
				</div>
				<div class="orange">
				<div class="orange-newsletter">
					<h4> The GRC Newsletter</h4>
					<p> Sign up for GRC’s free bi-monthly newsletter featuring new perspectives on growth and recovery. </p>
						<?php es_subbox( $desc = "", $group = "" ); ?>
				</div>
			</div>
			<section  class="home-team grid-x" style="background-image:url('<?php echo get_theme_mod( 'sidebar_featured_background' ); ?>');">
				<div class="home-team-content cell 6 large-6 ">
				<h3>
					<?php echo get_theme_mod( 'sidebar_featured_title' ); ?>
				</h3>
				<p>
					<?php echo get_theme_mod( 'sidebar_featured_paragraph' ); ?>
				</p>
				<a class="button" href="<?php echo get_theme_mod( 'sidebar_featured_button_link' ); ?>">
					 <?php echo get_theme_mod( 'sidebar_featured_button_text' ); ?>
				</a>
			</div>
		</section>
		</section>
 </div>
	<div class="side-main medium-12 large-9 cell">
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
