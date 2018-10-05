<?php
/**
 * Allow the input of settings
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/**
* Phone Number in Menu
*/
function menu_info_customize($wp_customize) {
$wp_customize->add_section('main_menu_info', array(
'title' => 'Main Menu Information',
'description' => '',
'priority' => 120,
));

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
}

add_action('customize_register', 'menu_info_customize');
