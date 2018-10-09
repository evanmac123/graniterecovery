<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="home">
	<section>
		<h1 style="display:none;">Granite Recovery Center</h1>
		<div class="home__slider hide-for-small-only">
			<?php the_field("home-slider"); ?>
		</div>
					<div class="home__slider show-for-small-only">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>" alt="Teen in treatment"/>
							<h2 class="home-slider-heading-mobile">TRUSTED TREATMENT FOR TEEN MENTAL HEALTH, BEHAVIORAL, AND SUBSTANCE USE ISSUES.</h2>
							<p class="home__slider-description-mobile" style="text-align: left;">Muir Wood is a world renowned northern California treatment center for teens struggling with mental health, behavioral, and substance abuse issues. We offer residential inpatient treatment for teen boys 12&ndash;17 in Sonoma County, and outpatient treatment for boys and girls 12&ndash;19 in Marin County. <a href="/about-muir-wood/"><strong>Read more&raquo;</strong></a></p>
							<p class="align-center"><a class="button-white" href="/getting-started/"><strong>Getting Started</strong></a></p>
					</div>
	</section>

<?php do_action( 'foundationpress_before_content' ); ?>

<h2 id="equalizer" class="docs-heading" data-magellan-target="equalizer"><a href="#equalizer"></a>Equalizer</h2>
		<div class="grid-x" data-equalizer data-equalize-on="medium" id="test-eq">
				<div class="medium-4 cell">
						<div class="callout" data-equalizer-watch>
								<img src= "https://placeimg.com/300/200/arch">
						</div>
				</div>
				<div class="medium-4 cell">
						<div class="callout" data-equalizer-watch>
								<p>Pellentesque habitant morbi tristique senectus et netus et, ante.</p>
						</div>
				</div>
				<div class="medium-4 cell">
						<div class="callout" data-equalizer-watch>
								<img src= "https://placeimg.com/400/100/arch">
						</div>
				</div>
			</div>
<hr>


<?php get_footer();
