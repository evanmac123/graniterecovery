<?php
/**
 * Allow the input of settings
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/**
* Main Menu Options
*/
function menu_info_customize($wp_customize) {
$wp_customize->add_section('main_menu_info', array(
'title' => 'Main Menu and Footer Information',
'description' => '',
'priority' => 120,
) );

// add a setting for the site logo
$wp_customize->add_setting('header_logo');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo',
array(
'label' => 'Header Logo',
'section' => 'main_menu_info',
'settings' => 'header_logo',
) ) );

// add a setting for the site logo
$wp_customize->add_setting('mobile_header_logo');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mobile_header_logo',
array(
'label' => 'Mobile Header Logo',
'section' => 'main_menu_info',
'settings' => 'mobile_header_logo',
) ) );


// add a setting for the socail-link
$wp_customize->add_setting('facebook_link', array(
  'default'   => 'www.google.com',
  'transport' => 'refresh',
));
// Add a control for the phone number
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_link',
array(
'label' => 'Facebook Social link',
'section' => 'main_menu_info',
'settings' => 'facebook_link',
'type'  => 'url',
) ) );

// add a setting for the socail-link
$wp_customize->add_setting('instagram_link', array(
  'default'   => 'www.google.com',
  'transport' => 'refresh',
));
// Add a control for the phone number
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_link',
array(
'label' => 'Instagram Social link',
'section' => 'main_menu_info',
'settings' => 'instagram_link',
'type'  => 'url',
) ) );


// add a setting for the socail-link
$wp_customize->add_setting('pinterest_link', array(
  'default'   => 'www.google.com',
  'transport' => 'refresh',
));
// Add a control for the phone number
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest_link',
array(
'label' => 'Pinterest Social link',
'section' => 'main_menu_info',
'settings' => 'pinterest_link',
'type'  => 'url',
) ) );


// add a setting for the socail-link
$wp_customize->add_setting('youtube_link', array(
  'default'   => 'www.google.com',
  'transport' => 'refresh',
));
// Add a control for the phone number
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_link',
array(
'label' => 'Youtube Social link',
'section' => 'main_menu_info',
'settings' => 'youtube_link',
'type'  => 'url',
) ) );


// add a setting for the site phone number
$wp_customize->add_setting('phone_number', array(
  'default'   => '(866) 237-6140)',
) );

// Add a control for the phone number
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone_number',
array(
'label' => 'Add Phone Number to Menu',
'section' => 'main_menu_info',
'settings' => 'phone_number',
'type'  => 'text',
) ) );

// add a setting for the site address
$wp_customize->add_setting('address', array(
  'default'   => '6 Manor Pkwy, Salem, NH 03079',
) );
// Add a control for the address
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'address',
array(
'label' => 'Main Location Address',
'section' => 'main_menu_info',
'settings' => 'address',
'type'  => 'text',
) ) );

// add a setting for the site address
$wp_customize->add_setting('copyright', array(
  'default'   => '© Copyright 2018 Granite Recovery Centers',
  'transport' => 'refresh',
) );
// Add a control for the address
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'copyright',
array(
'label' => 'Footer Copyright',
'section' => 'main_menu_info',
'settings' => 'copyright',
'type'  => 'text',
) ) );

// add a setting for the site logo
$wp_customize->add_setting('footer_logo_1');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_1',
array(
'label' => 'Footer Logo 1',
'section' => 'main_menu_info',
'settings' => 'footer_logo_1',
) ) );


// add a setting for the site logo
$wp_customize->add_setting('footer_logo_2');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_2',
array(
'label' => 'Footer Logo 2',
'section' => 'main_menu_info',
'settings' => 'footer_logo_2',
) ) );
}

add_action('customize_register', 'menu_info_customize');

// Newsletter
function newsletter_customize($wp_customize) {
$wp_customize->add_section('newsletter_options', array(
'title' => 'Newsletter Options',
'description' => '',
'priority' => 120,
));

// add a setting for the sidebar_2_background
$wp_customize->add_setting('newsletter_shortcode', array(
  'default'   => '',
  'transport' => 'refresh',
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'newsletter_shortcode',
array(
'label' => 'Newsletter Shortcode',
'section' => 'newsletter_options',
'settings' => 'newsletter_shortcode',
) ) );
}

add_action('customize_register', 'newsletter_customize');


/////Sidebar

function sidebar_1_options_customize($wp_customize) {
$wp_customize->add_section('sidebar_1_options', array(
'title' => 'Sidebar Block 1 Settings',
'description' => '',
'priority' => 120,
));

// add a setting for the sidebar_1_background
$wp_customize->add_setting('sidebar_1_featured_background', array(
  'default'   => '',
  'transport' => 'refresh',
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sidebar_1_featured_background',
array(
'label' => 'Sidebar Featured Page Background',
'section' => 'sidebar_1_options',
'settings' => 'sidebar_1_featured_background',
) ) );

// add a setting for the sidebar_1_background
$wp_customize->add_setting('sidebar_1_featured_title', array(
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_1_featured_title',
array(
'label' => 'Sidebar Featured Page title',
'section' => 'sidebar_1_options',
'settings' => 'sidebar_1_featured_title',
) ) );

// add a setting for the sidebar_1_background
$wp_customize->add_setting('sidebar_1_featured_paragraph', array(
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_1_featured_paragraph',
array(
'label' => 'Sidebar Featured Page paragraph',
'section' => 'sidebar_1_options',
'settings' => 'sidebar_1_featured_paragraph',
) ) );

// add a setting for the sidebar_1_background
$wp_customize->add_setting('sidebar_1_featured_button_link', array(
));
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_1_featured_button_link',
array(
'label' => 'Sidebar Featured Page Button Link',
'section' => 'sidebar_1_options',
'settings' => 'sidebar_1_featured_button_link',
) ) );

// add a setting for the sidebar_1_background
$wp_customize->add_setting('sidebar_1_featured_button_text', array(
));
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_1_featured_button_text', array(
'label' => 'Sidebar Featured Page Text',
'section' => 'sidebar_1_options',
'settings' => 'sidebar_1_featured_button_text',
) ) );
}

add_action('customize_register', 'sidebar_1_options_customize');


function sidebar_2_options_customize($wp_customize) {
$wp_customize->add_section('sidebar_2_options', array(
'title' => 'Sidebar Block 2 Settings',
'description' => '',
'priority' => 120,
));

// add a setting for the sidebar_2_background
$wp_customize->add_setting('sidebar_2_featured_background', array(
  'transport' => 'refresh',
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sidebar_2_featured_background',
array(
'label' => 'Sidebar Featured Page Background',
'section' => 'sidebar_2_options',
'settings' => 'sidebar_2_featured_background',
) ) );

// add a setting for the sidebar_2_background
$wp_customize->add_setting('sidebar_2_featured_title', array(
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_2_featured_title',
array(
'label' => 'Sidebar Featured Page title',
'section' => 'sidebar_2_options',
'settings' => 'sidebar_2_featured_title',
) ) );

// add a setting for the sidebar_2_background
$wp_customize->add_setting('sidebar_2_featured_paragraph', array(
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_2_featured_paragraph',
array(
'label' => 'Sidebar Featured Page paragraph',
'section' => 'sidebar_2_options',
'settings' => 'sidebar_2_featured_paragraph',
) ) );

// add a setting for the sidebar_2_background
$wp_customize->add_setting('sidebar_2_featured_button_link', array(
  'default'   => '',
));
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_2_featured_button_link',
array(
'label' => 'Sidebar Featured Page Button Link',
'section' => 'sidebar_2_options',
'settings' => 'sidebar_2_featured_button_link',
) ) );

// add a setting for the sidebar_2_background
$wp_customize->add_setting('sidebar_2_featured_button_text', array(
));
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_2_featured_button_text', array(
'label' => 'Sidebar Featured Page Text',
'section' => 'sidebar_2_options',
'settings' => 'sidebar_2_featured_button_text',
) ) );
}

add_action('customize_register', 'sidebar_2_options_customize');


function blog_events_customize($wp_customize) {
$wp_customize->add_section('blog_event_options', array(
'title' => 'Blog & Event Options',
'description' => '',
'priority' => 120,
));

// add a setting for the blog header
$wp_customize->add_setting('blog_header_image', array(
  'default'   => '',
  'transport' => 'refresh',
));

// Add a control to blog header image
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'blog_header_image',
array(
'label' => 'Blog Header Image',
'section' => 'blog_event_options',
'settings' => 'blog_header_image',
) ) );

// add a setting for the blog header
$wp_customize->add_setting('blog_list_image', array(
  'default'   => '',
  'transport' => 'refresh',
));

// Add a control to blog header image
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'blog_list_image',
array(
'label' => 'Blog List Thumbnail Image',
'section' => 'blog_event_options',
'settings' => 'blog_list_image',
) ) );

// add a setting for the event_background
$wp_customize->add_setting('event_header_image', array(
  'default'   => '',
  'transport' => 'refresh',
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'event_header_image',
array(
'label' => 'Event Header Image',
'section' => 'blog_event_options',
'settings' => 'event_header_image',
) ) );
}

add_action('customize_register', 'blog_events_customize');


/**
  * Set default settings when switching themes
  * See all default setting id's at framework/customizer/settigs/[base].php
  */
function my_default_total_settings() {

	set_theme_mod( 'facebook_link', ' https://www.facebook.com/Graniterecoverycenters/' );
	set_theme_mod( 'instagram_link', 'https://www.instagram.com/graniterecoverycenters/' );
	set_theme_mod( 'pinterest_link', 'https://www.pinterest.com/graniterecoverycenters/' );
	set_theme_mod( 'youtube_link', ' https://www.youtube.com/channel/UCuQ8U-TV_ylSgqb5r5Kit6w' );
	set_theme_mod( 'phone_number', '603-339-4160' );
	set_theme_mod( 'address', '6 Manor Pkwy, Salem, NH 03079' );
	set_theme_mod( 'copyright', '© Copyright 2018 Granite Recovery Centers' );
  set_theme_mod( 'sidebar_1_featured_title', 'HOW MUCH<br>WILL MY<br>INSURANCE<br>COVER?' );
  set_theme_mod( 'sidebar_1_featured_paragraph', '' );
  set_theme_mod( 'sidebar_1_featured_button_text', 'https://www.graniterecoverycenters.com/drug-treatment-help/verify-insurance-benefits/' );
  set_theme_mod( 'sidebar_1_featured_button_link', '<strong>Verify Your<br>Benefits Here »</strong>' );
  set_theme_mod( 'sidebar_1_featured_background', '' );
	set_theme_mod( 'sidebar_2_featured_title', 'BIG BOOK<br>WORKSHOP<br>DEC. 8th ' );
  set_theme_mod( 'sidebar_2_featured_paragraph', 'With Marsha and Jonathan S. From Austin TX' );
  set_theme_mod( 'sidebar_2_featured_button_text', ' <strong>Learn More »</strong>' );
  set_theme_mod( 'sidebar_2_featured_button_link', 'https://www.graniterecoverycenters.com/event/big-book-workshop-2/' );
  set_theme_mod( 'sidebar_2_featured_background', '' );

}
add_action( 'after_switch_theme', 'my_default_total_settings' );
