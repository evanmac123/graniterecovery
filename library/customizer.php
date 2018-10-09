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
));

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
$wp_customize->add_setting('facebook_link');
// Add a control for the phone number
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_link',
array(
'label' => 'Facebook Social link',
'section' => 'main_menu_info',
'settings' => 'facebook_link',
'type'  => 'url',
) ) );

// add a setting for the socail-link
$wp_customize->add_setting('instagram_link');
// Add a control for the phone number
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_link',
array(
'label' => 'Instagram Social link',
'section' => 'main_menu_info',
'settings' => 'instagram_link',
'type'  => 'url',
) ) );


// add a setting for the socail-link
$wp_customize->add_setting('pinterest_link');
// Add a control for the phone number
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest_link',
array(
'label' => 'Pinterest Social link',
'section' => 'main_menu_info',
'settings' => 'pinterest_link',
'type'  => 'url',
) ) );


// add a setting for the socail-link
$wp_customize->add_setting('youtube_link');
// Add a control for the phone number
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_link',
array(
'label' => 'Youtube Social link',
'section' => 'main_menu_info',
'settings' => 'youtube_link',
'type'  => 'url',
) ) );


// add a setting for the site phone number
$wp_customize->add_setting('phone_number');
// Add a control for the phone number
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone_number',
array(
'label' => 'Add Phone Number to Menu',
'section' => 'main_menu_info',
'settings' => 'phone_number',
'type'  => 'text',
) ) );

// add a setting for the site address
$wp_customize->add_setting('address');
// Add a control for the address
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'address',
array(
'label' => 'Main Location Address',
'section' => 'main_menu_info',
'settings' => 'address',
'type'  => 'text',
) ) );

// add a setting for the site address
$wp_customize->add_setting('copyright');
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
