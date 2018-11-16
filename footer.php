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
    							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/facebook-square.svg">
    						</a>
              <?php endif; ?>
              <?php if ( get_theme_mod( 'instagram_link' ) ) : ?>
  						<a target="_blank" href="<?php echo get_theme_mod( 'instagram_link' ); ?>">
  							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/instagram.svg">
  						</a>
              <?php endif; ?>
              <?php if ( get_theme_mod( 'youtube_link' ) ) : ?>
  						<a target="_blank" href="<?php echo get_theme_mod( 'youtube_link' ); ?>">
  							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/youtube.svg">
  						</a>
              <?php endif; ?>
              <?php if ( get_theme_mod( 'pinterest_link' ) ) : ?>
  						<a target="_blank" href="<?php echo get_theme_mod( 'pinterest_link' ); ?>">
  							<img class="icons" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/icons/pinterest.svg">
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
            <?php //wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
            <div class="menu-footer-container"><ul id="menu-footer" class="menu"><li id="menu-item-1425" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1425"><a href="https://www.graniterecoverycenters.com/nh-drug-rehab-centers/">Our NH Drug Rehab Centers</a></li>
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
           <?php echo do_shortcode('[ninja_form id=1]');?>
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
<script>
var MasterSlider = function(){
	this.control = function() {}
	this.setup = function() {}
} </script>
<script type="text/javascript" src="//cdn.callrail.com/companies/375093248/25b0e927b24965b0b059/12/swap.js"></script>
</body>
</html>
