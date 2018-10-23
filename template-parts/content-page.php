<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
					<?php
						while ( have_rows("flexible-content") ) : the_row();
						if( get_row_layout() == 'flex-grid' ): ?>
						<div class="grid-x grid-padding-x grid-margin-y flex-grid">
							<?php while ( have_rows("simple-content-row") ) : the_row();?>
								<div class="cell large-auto">
									<?php echo get_sub_field('content-cell');?>
								</div>
							<?php
							endwhile;?>
						</div>
					<?php elseif( get_row_layout() == 'alternating-grid' ): ?>

							<?php while ( have_rows("alternating-row") ) : the_row();?>
								<div class="grid-x grid-padding-x grid-margin-y flex-grid alternating">
									<div class="cell large-4 medium-">
										<?php echo get_sub_field('alternating-cell-small');?>
									</div>
									<div class="cell large-8">
										<?php echo get_sub_field('alternating-cell-large');?>
									</div>
								</div>
						<?php
						endwhile;
						elseif( get_row_layout() == '    ' ):?>

						<?php
						elseif( get_row_layout() == 'row_4_columns' ): ?>
						<?php endif;
						endwhile;?>
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
		</article>
