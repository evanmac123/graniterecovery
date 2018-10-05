<?php
/*
Template Name: Home
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
			<a role="button" class="download large button sites-button hide-for-small-only" href="https://github.com/olefredrik/foundationpress">Download FoundationPress</a>
		</div>

		<div class="watch">
			<span id="stargazers"><a href="https://github.com/olefredrik/foundationpress">1.5k stargazers</a></span>
			<span id="twitter"><a href="https://twitter.com/olefredrik">@olefredrik</a></span>
		</div>
	</div>

</header>

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
