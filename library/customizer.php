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
$wp_customize->add_setting('footer_logo');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo',
array(
'label' => 'Footer Logo',
'section' => 'main_menu_info',
'settings' => 'footer_logo',
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

// add a setting for the sidebar_background
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

function sidebar_options_customize($wp_customize) {
$wp_customize->add_section('sidebar_options', array(
'title' => 'Sidebar Options',
'description' => '',
'priority' => 120,
));

// add a setting for the sidebar_background
$wp_customize->add_setting('sidebar_featured_background', array(
  'default'   => '',
  'transport' => 'refresh',
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sidebar_featured_background',
array(
'label' => 'Sidebar Featured Page Background',
'section' => 'sidebar_options',
'settings' => 'sidebar_featured_background',
) ) );

// add a setting for the sidebar_background
$wp_customize->add_setting('sidebar_featured_title', array(
  'default'   => 'Passion. Purpose. Understanding.',
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_featured_title',
array(
'label' => 'Sidebar Featured Page title',
'section' => 'sidebar_options',
'settings' => 'sidebar_featured_title',
) ) );

// add a setting for the sidebar_background
$wp_customize->add_setting('sidebar_featured_paragraph', array(
  'default'   => '',
));

// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_featured_paragraph',
array(
'label' => 'Sidebar Featured Page paragraph',
'section' => 'sidebar_options',
'settings' => 'sidebar_featured_paragraph',
) ) );

// add a setting for the sidebar_background
$wp_customize->add_setting('sidebar_featured_button_link', array(
  'default'   => '',
));
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_featured_button_link',
array(
'label' => 'Sidebar Featured Page Button Link',
'section' => 'sidebar_options',
'settings' => 'sidebar_featured_button_link',
) ) );

// add a setting for the sidebar_background
$wp_customize->add_setting('sidebar_featured_button_text', array(
  'default'   => 'Meet Our Team',
));
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_featured_button_text', array(
'label' => 'Sidebar Featured Page Text',
'section' => 'sidebar_options',
'settings' => 'sidebar_featured_button_text',
) ) );
}

add_action('customize_register', 'sidebar_options_customize');


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

	set_theme_mod( 'facebook_link', 'www.google.com' );
	set_theme_mod( 'instagram_link', 'www.google.com' );
	set_theme_mod( 'pinterest_link', 'www.google.com' );
	set_theme_mod( 'youtube_link', 'www.google.com' );
	set_theme_mod( 'phone_number', '(866) 237-6140)' );
	set_theme_mod( 'address', '6 Manor Pkwy, Salem, NH 03079' );
	set_theme_mod( 'copyright', '© Copyright 2018 Granite Recovery Centers' );
}
add_action( 'after_switch_theme', 'my_default_total_settings' );
