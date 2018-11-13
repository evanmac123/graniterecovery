<?php
/**
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<section>
	<div>
		<?php foundationpress_left_nav(); ?>
	</div>
	<?php
	if(have_rows("left-sidebar-under-menu") ) :
	while ( have_rows("left-sidebar-under-menu") ) : the_row();
	if( get_row_layout() == 'left-sidebar-under-menu-newsletter' ): ?>
	<div class="orange">
		<div class="orange-newsletter">
			<h4> The GRC Newsletter</h4>
			<?php
			$shortcode =  get_sub_field('left-sidebar-under-menu-newsletter-shortcode');
				echo do_shortcode( $shortcode );
			?>
		</div>
	</div>
	<?php elseif( get_row_layout() == 'left-sidebar-under-menu-content-block' ): ?>
	<div class="home-team grid-x" style="background-image:url('<?php echo get_sub_field( 'sidebar-block-background-img' ); ?>');">
		<div class="home-team-content cell 6 large-6 ">
			<h3>
			<?php echo get_sub_field( 'sidebar-block-title' ); ?>
		</h3>
			<p>
				<?php echo get_sub_field( 'sidebar-block-paragraph' ); ?>
			</p>
			<a class="button" href="<?php echo get_sub_field( 'sidebar-block-button-link'); ?>">
			 <?php echo get_sub_field( 'sidebar-block-button-text' ); ?>
		</a>
		</div>
	</div>
	<?php
endif;
endwhile;?>
	<?php else : ?>
	<div class="orange">
		<div class="orange-newsletter">
			<h4> The GRC Newsletter</h4>
			<?php
	$shortcode = get_theme_mod( 'newsletter_shortcode' );
		echo do_shortcode( $shortcode );
	?>
		</div>
	</div>
	<?php	if ( get_theme_mod( 'sidebar_featured_background' ) ) :?>
	<div class="home-team grid-x" style="background-image:url('<?php echo get_theme_mod( 'sidebar_featured_background' ); ?>');">
		<?php else:?>
		<div class="home-team grid-x" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/sidebar-background.jpg');">
			<?php endif; ?>
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
		</div>
		<?php endif;?>
</section>
