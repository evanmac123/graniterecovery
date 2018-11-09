<?php
/*
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
		<?php get_template_part( 'template-parts/sidebar-left-content'); ?>
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
