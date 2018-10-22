<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="home">
	<section class="home-slider">
		<h1 style="display:none;">Granite Recovery Center</h1>
		<div class="hide-for-small-only">
			<?php the_field("home-slider"); ?>
		</div>
		<div class="home-slider-mobile show-for-small-only">
			<a class="home-slider-mobile-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php
				// Display the Custom Logo, default logo, or the site's name
				if ( get_theme_mod( 'header_logo' ) ) { ?>
							<img class="custom-logo" src="<?php echo get_theme_mod( 'header_logo' ); ?>">
						<?php
							}
				 else { ?>
							<img alt="Granite Recovery" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/logo.png" class="custom-logo"/>
					<?php } ?>
			</a>

				<a href="<?php the_field("home-slider-mobile-link"); ?>"><h6 class="slider-header">Real People, Real Recovery.</h6></a>
		</div>
	</section>

<?php do_action( 'foundationpress_before_content' ); ?>

<section id="equalizer" class="home-intro" data-magellan-target="equalizer">
		<div class="grid-x" data-equalizer data-equalize-on="medium">
				<div class="large-6 cell home-intro-info">
					<div class="home-intro-info-container">
					<h1>
						<?php the_field("home-intro-info-title"); ?>
					</h1>
					<h5 class="home-intro-subtitle">
						<?php the_field("home-intro-info-sub-title"); ?>
					</h5>
					<p>
						<?php the_field("home-intro-info-content"); ?>
					</p>
				</div>
				</div>
				<div class="large-6  cell home-intro-location">
					<div class="grid-x" data-equalizer data-equalize-on="large">

					<?php if( have_rows('home-intro-location') ): ?>
						<?php while( have_rows('home-intro-location') ): the_row();
						// vars
						$image = get_sub_field('image');
						$title = get_sub_field('title');
						$content = get_sub_field('content');
						$link = get_sub_field('link');
					?>

					<a class="home-intro-location-block medium-6 large-4 cell" style="background-image:url('<?php echo $image; ?>');" href="<?php echo $link; ?>">
						<div class="location-container">
							<h5 class="title">
								<?php echo $title; ?>
							</h5>
							<div class="content">
								<?php echo $content; ?>
							</div>
						</div>
					</a>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<?php if( have_rows('home-video') ):
			$i = 1; ?>
			<?php while( have_rows('home-video') ): the_row();
			$video_section_name = get_sub_field('video-block-name');
			$video_still_1 = get_sub_field('video-still-1');
			$video_title_1 = get_sub_field('video-title-1');
			$video_author_1 = get_sub_field('video-author-1');
			$video_author_position_1 = get_sub_field('video-author-position-1');
			$video_embed_1 = get_sub_field('video-embed-1');
			$video_still_2 = get_sub_field('video-still-2');
			$video_title_2 = get_sub_field('video-title-2');
			$video_author_2 = get_sub_field('video-author-2');
			$video_author_position_2 = get_sub_field('video-author-position-2');
			$video_embed_2 = get_sub_field('video-embed-2');
			$video_still_3 = get_sub_field('video-still-3');
			$video_title_3 = get_sub_field('video-title-3');
			$video_author_3 = get_sub_field('video-author-3');
			$video_author_position_3 = get_sub_field('video-author-position-3');
			$video_embed_3 = get_sub_field('video-embed-3');
			?>

		<section id="equalizer" class="home-video grid-x flex-container" data-magellan-target="equalizer">
			<div class="home-video-label cell large-1">
				<h3 class="home-video-label-title">
					<?php echo $video_section_name; ?>
				</h3>
			</div>
			<div class="home-video-cell cell large-7 video-section-1">
				<a data-open="video1-<?php echo $i ?>" style="background-image:url('<?php echo $video_still_1; ?>');">
					<div class="home-video-cell-content">
						<h2 class="home-video-cell-title">
							<?php echo $video_title_1; ?>
						</h2>
						<div class="home-video-cell-author">
							<?php echo $video_author_1; ?>
						</div>
						<div class="home-video-cell-position">
							<?php echo $video_author_position_1; ?>
						</div>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/play.svg">
				</a>
			</div>
			<div class="home-video-cell cell large-4 video-section-2">
					<a data-open="video2-<?php echo $i ?>" style="background-image:url('<?php echo $video_still_2; ?>');">
					 	<div class="home-video-cell-content">
							<h2 class="home-video-cell-title">
								<?php echo $video_title_2; ?>
							</h2>
							<div class="home-video-cell-author">
								<?php echo $video_author_2; ?>
							</div>
							<div class="home-video-cell-position">
								<?php echo $video_author_position_2; ?>
							</div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/play.svg">
						</div>
					</a>
					<a data-open="video3-<?php echo $i ?>" style="background-image:url('<?php echo $video_still_3; ?>');">
						<div class="home-video-cell-content">
							<h2 class="home-video-cell-title">
								<?php echo $video_title_3; ?>
							</h2>
							<div class="home-video-cell-author">
								<?php echo $video_author_3; ?>
							</div>
							<div class="home-video-cell-position">
								<?php echo $video_author_position_3; ?>
							</div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/play.svg">
					</div>
				</a>
			</div>
		</section>
		<div class="full reveal" id="video1-<?php echo $i ?>" data-reveal>
			<div class="flex-video">
					<?php echo $video_embed_1; ?>
			</div>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
					<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="full reveal" id="video2-<?php echo $i ?>" data-reveal>
			<div class="flex-video">
					<?php echo $video_embed_2; ?>
			</div>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
					<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="full reveal" id="video3-<?php echo $i ?>" data-reveal>
			<div class="flex-video">
					<?php echo $video_embed_3; ?>
			</div>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
					<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<?php
		 	$i++;
			endwhile; ?>
	<?php endif; ?>
	<section class="orange grid-x grid-padding-x">
		<div class="orange-newsletter cell large-6">
			<h4> The GRC Newsletter</h4>
			<p> Sign up for GRC’s free bi-monthly newsletter featuring new perspectives on growth and recovery. </p>
				<?php es_subbox( $desc = "", $group = "" ); ?>
		</div>
		<div class="orange-network cell large-6">
			<h4>GRC is an In-Network Provider</h4>
			<div class="grid-x grid-padding-x grid-padding-y">
				<?php
					$images = get_field('home-network-gallery');
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					<div class="cell small-4">
						<span class="helper"></span>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<?php endforeach; ?>
					<?php endif; ?>
					<div class="cell small-4 orange-network-link">
						<a class="button" href="<?php the_field("home-network-link"); ?>">
							Learn More
						</a>
					</div>
			</div>
		</div>
	</section>
	<section  class="home-team grid-x" style="background-image:url('<?php the_field('home-team-background'); ?>');">
		<div class="home-team-content cell 6 large-6 medium-centered">
		<h3>
			<?php the_field("home-team-title"); ?>
		</h3>
		<p>
		<?php the_field("home-team-paragraph"); ?></p>
		<a class="button" href="<?php the_field("home-team-link"); ?>">
			 <?php the_field("home-team-button-text"); ?>
		</a>
	</div>
	</section>
	<section class="white-block grid-x grid-padding-x">
		<div class=" cell large-6">
			<div class="grid-x grid-padding-x grid-padding-y">
				<?php
					$images = get_field('home-seen-gallery');
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					<div class="cell medium-4">
						<span class="helper"></span>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<?php endforeach; ?>
					<?php endif; ?>
			</div>
		</div>
		<div class=" cell large-6">
		</div>
	</section>
</div>
<?php get_footer();
