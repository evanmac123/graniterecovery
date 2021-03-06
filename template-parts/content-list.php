<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="grid-x blog-list-post">
		<div class="large-3 cell">
		<?php if ( get_field( 'post-list-image' ) ) : ?>
			<div class="post-featured-image " style="background-image:url('<?php echo get_field( 'post-list-image' ); ?>">

			<?php elseif( get_theme_mod( 'blog_list_image' ) ):?>
			<div class="post-featured-image " style="background-image:url('<?php echo get_theme_mod( 'blog_list_image' ); ?>">
			<?php else:?>
				<div class="post-featured-image blog-featured-header">
		<?php endif;?>
			</div>
		</div>
		<div class="large-9 cell">
	<header>
	<?php
		if ( is_single() ) {
			the_title( '<h2 class="entry-title">', '</h2>' );
		} else {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		}
	?>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	</div>
</div>
</article>
