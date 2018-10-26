<?php
/*
Template Name: Staff
*/
get_header(); ?>
<div class="side staff">
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
				<main class="main-content-full-width staff-grid">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php endwhile; ?>
					<?php
					$al_staff_query = "SELECT `ID` FROM `wp_posts` WHERE `post_parent` = '817'";
					$al_staff_posts = $wpdb->get_results($al_staff_query);
					foreach ($al_staff_posts as $post_id) {
							$al_staff_meta = get_post_meta($post_id->ID);
						?>

							<div class="reveal large staff-bio " id="staff-<?php echo $post_id->ID; ?>" data-reveal>
									<img class="float-left" src="<?php echo $al_staff_meta["_imgUrlL"][0]; ?>" alt="<?php echo $al_staff_meta["_imgAlt"][0]; ?>" />
									<h2><?php echo $al_staff_meta["_txt_F1"][0]; ?></h2>
									<h3><?php echo $al_staff_meta["_txt_F2"][0]; ?></h3>
									<p><?php echo $al_staff_meta["_editorCnt_F3"][0] //print_r ($al_staff_meta); ?></p>
									<p class="text-center"><a data-close aria-label="Close modal">Close</a></p>
									<button class="close-button" data-close aria-label="Close modal" type="button">
											<span aria-hidden="true">&times;</span>
									</button>
							</div>
					<?php }; ?>
				 </main>
				</div>
		</div>
	</div>
</div>
</div>
<?php get_footer();
