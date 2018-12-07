<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="home">
	<section class="home-slider">
		<h1 style="display:none;">Granite Recovery Centers</h1>
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
					<div class="grid-x cell home-intro-location-grid" data-equalizer data-equalize-on="large">

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
					<image src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/icons/play.svg">
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
							<image src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/play.svg">
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
								<image src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/play.svg">
					</div>
				</a>
			</div>
		</section>
		<div class="medium reveal" id="video1-<?php echo $i ?>" data-reveal data-reset-on-close="true">
			<div class="flex-video">
					<?php echo $video_embed_1; ?>
			</div>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
					<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="medium reveal" id="video2-<?php echo $i ?>" data-reveal data-reset-on-close="true">
			<div class="flex-video">
					<?php echo $video_embed_2; ?>
			</div>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
					<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="medium reveal" id="video3-<?php echo $i ?>" data-reveal data-reset-on-close="true">
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
			<?php
			if ( get_field('home-newsletter-shortcode') ) {
				$shortcode = get_field( 'home-newsletter-shortcode' );
			}
			else{
				$shortcode = get_theme_mod( 'newsletter_shortcode' );
			}


			echo do_shortcode( $shortcode );
			?>
		</div>
		<div class="orange-network cell large-6">
			<h4>GRC is an In-Network Provider</h4>
			<div class="grid-x grid-padding-x grid-padding-y">
				<?php
					$images = get_field('home-network-gallery');
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					<div class="cell sponser medium-4">
						<span class="helper"></span>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<?php endforeach; ?>
					<?php endif; ?>
					<div class="cell medium-4 orange-network-link">
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
	<section id="equalizer" data-magellan-target="equalizer" class="grid-x home-white-block">
		<div class=" cell large-6">
			<div class="seen">
				<div class="block-title">
					<image class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/mega.svg">
					<h4>
						GRC IN THE NEWS
					</h4>
				</div>
				<div class="grid-x flex-container logos">
					<?php if( have_rows('home-news-images') ):
					  while( have_rows('home-news-images') ): the_row();
						?>
						<a href="<?php echo get_sub_field('news-url'); ?>" class="cell large-4 medium-3 small-6 logo">
							<img src="<?php echo get_sub_field('news-logo'); ?>"  />
						</a>
					<?php	endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<div class=" cell large-6">
			<div class="grid-x grid-padding-x medium-padding-collapse">
				<div class=" cell medium-6 events">
					<image class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/calendar.svg">
					<h4>
						Upcoming Events
					</h4>
					<div class="event-list">
						<?php
						global $post;
						// Retrieve the next 5 upcoming events
						$events = tribe_get_events( array(
							'posts_per_page' => 3,
							'start_date' => date( 'Y-m-d H:i:s' )
						) );

						// Loop through the events: set up each one as
						// the current post then use template tags to
						// display the title and content
						if(is_array($events)) :
						foreach ( $events as $post ) :
							setup_postdata( $post );
							?>
							<div class="event-post">
								<a class="event-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<div class="event-time"><?php echo tribe_get_start_date( $post, true, "F j, Y, g:i a" );?></div>
							</div>
							<?php
					  	endforeach;

					else:?>
						<div class=""> There are no upcoming events, check back soon. </div>
					<?php endif;
						?>
						<a class="more-events" href="/events">More Events</a>
					</div>
				</div>
				<div class=" cell medium-6 news">
					<image class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/news.svg">
					<h4>
						Recent News
					</h4>
					<div class="news-list">
						<?php
						$args = array(
						    'posts_per_page'   => 4, // -1 here will return all posts
						    'post_type'        => 'news', //your custom post type
						    'post_status'      => 'publish',
						);
						$the_query = new WP_Query( $args );

						if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="news-post">
							<div class="news-time"> <?php the_date(); ?></div>
							<a class="news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<div class="news-publisher"> <?php the_field("publisher"); ?></div>
						</div>
					<?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
					<?php wp_reset_query(); ?>
					<a class="more-news" href="/news">More News</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

</div>

<footer class="footer">
    <div class="footer-container">

        <div class="grid-x footer-grid">
          <div class="footer-info cell large-4">
            <a  href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-info-title">
              <?php
               if ( get_theme_mod( 'header_logo' ) ) { ?>
                    <img class="custom-logo" src="<?php echo get_theme_mod( 'header_logo' ); ?>">
                  <?php
                    }
               else { ?>
                    <img alt="Granite Recovery" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logo.png" class="custom-logo"/>
                <?php } ?>
            </a>
            <div class="footer-info-address">
              <?php if ( get_theme_mod( 'address' ) ) : ?>
                <?php echo get_theme_mod( 'address' ); ?>
              <?php endif; ?>
            </div>
            <div class="footer-info-n-s grid-x">
            <div class="footer-info-number cell large-6 small-12">
              <?php if ( get_theme_mod( 'phone_number' ) ) : ?>
                <?php echo get_theme_mod( 'phone_number' ); ?>
              <?php endif; ?>
            </div>
            <div class="footer-info-social cell large-6 small-12">
              <?php if ( get_theme_mod( 'facebook_link' ) ) : ?>
                <a target="_blank" href="<?php echo get_theme_mod( 'facebook_link' ); ?>">
    							<image class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/facebook-square.svg">
    						</a>
              <?php endif; ?>
              <?php if ( get_theme_mod( 'instagram_link' ) ) : ?>
  						<a target="_blank" href="<?php echo get_theme_mod( 'instagram_link' ); ?>">
  							<image class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/instagram.svg">
  						</a>
              <?php endif; ?>
              <?php if ( get_theme_mod( 'youtube_link' ) ) : ?>
  						<a target="_blank" href="<?php echo get_theme_mod( 'youtube_link' ); ?>">
  							<image class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/youtube.svg">
  						</a>
              <?php endif; ?>
              <?php if ( get_theme_mod( 'pinterest_link' ) ) : ?>
  						<a target="_blank" href="<?php echo get_theme_mod( 'pinterest_link' ); ?>">
  							<image class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/pinterest.svg">
  						</a>
            <?php endif; ?>
            </div>
          </div>
          <div>
          </div>
            <div class="footer-info-logo">
              <?php if ( get_theme_mod( 'footer_logo_1' ) ) : ?>
                <img src="<?php echo get_theme_mod( 'footer_logo_1' ); ?>">
              <?php else: ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/CARF-logo.png">
              <?php endif; ?>
            </div>
            <div class="footer-info-logo naatp">
              <?php if ( get_theme_mod( 'footer_logo_2' ) ) : ?>
                <img src="<?php echo get_theme_mod( 'footer_logo_2' ); ?>">
              <?php else: ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/naatp-logo.png">
              <?php endif; ?>
            </div>
            <div class="footer-info-copyright">
              <?php if ( get_theme_mod( 'copyright' ) ) : ?>
                <?php echo get_theme_mod( 'copyright' ); ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="cell large-4">

            <div class="menu-footer-container">
              <ul id="menu-footer" class="">
                <li id="menu-item-1425" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1425">
                <a href="https://www.graniterecoverycenters.com/nh-drug-rehab-centers/">Our NH Drug Rehab Centers</a>
              </li>
              <li id="menu-item-2135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2135"><a href="https://www.graniterecoverycenters.com/alcohol-drug-rehab-programs/">Alcohol &amp; Drug Rehab Programs Overview</a></li>
              <li id="menu-item-1424" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1424"><a href="https://www.graniterecoverycenters.com/drug-treatment-help/addiction-helpline/">Addiction Helpline</a></li>
              <li id="menu-item-1435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1435"><a href="https://www.graniterecoverycenters.com/about-grc/drug-addiction-recovery-testimonials/">Drug Addiction Recovery Testimonials</a></li>
              <li id="menu-item-1099" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1099"><a href="https://www.graniterecoverycenters.com/drug-treatment-help/verify-insurance-benefits/">Verify Your Insurance Benefits</a></li>
              <li id="menu-item-1426" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1426"><a href="https://www.graniterecoverycenters.com/contact/">Contact Our Facilities</a></li>
              <li id="menu-item-1773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1773"><a href="https://www.graniterecoverycenters.com/hipaa-privacy-policy/">HIPAA Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="cell large-4">
            <h2 class="contact-us">
              Want To Learn More?
            </h2>

            <a href="/contact" class="footer-button">
              USE OUR CONTACT FORM
            </a>
          </div>
        </div>
    </div>
</footer>

</div>
<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
<script id="__bs_script__">//<![CDATA[
  //  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
<script type="text/javascript" src="//cdn.callrail.com/companies/375093248/25b0e927b24965b0b059/12/swap.js"></script>
</body>
</html>
