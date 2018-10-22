<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-container">

        <div class="footer-grid">
          <section class="footer-info">
            <div class="footer-info-title">
              <?php bloginfo( 'name' ); ?>
            </div>
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
                <a href="<?php echo get_theme_mod( 'facebook_link' ); ?>">
    							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/facebook-square.svg">
    						</a>
              <?php endif; ?>
              <?php if ( get_theme_mod( 'instagram_link' ) ) : ?>
  						<a href="<?php echo get_theme_mod( 'instagram_link' ); ?>">
  							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/instagram.svg">
  						</a>
              <?php endif; ?>
              <?php if ( get_theme_mod( 'youtube_link' ) ) : ?>
  						<a href="<?php echo get_theme_mod( 'youtube_link' ); ?>">
  							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/youtube.svg">
  						</a>
              <?php endif; ?>
              <?php if ( get_theme_mod( 'pinterest_link' ) ) : ?>
  						<a href="<?php echo get_theme_mod( 'pinterest_link' ); ?>">
  							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/pinterest.svg">
  						</a>
            <?php endif; ?>
            </div>
          </div>
          <div>
          </div>
            <div class="footer-info-logo">
              <?php if ( get_theme_mod( 'footer_logo' ) ) : ?>
                <img src="<?php echo get_theme_mod( 'footer_logo' ); ?>">
              <?php endif; ?>
            </div>
            <div class="footer-info-copyright">
              <?php if ( get_theme_mod( 'copyright' ) ) : ?>
                <?php echo get_theme_mod( 'copyright' ); ?> Hello
              <?php endif; ?>
            </div>

          </section>
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
