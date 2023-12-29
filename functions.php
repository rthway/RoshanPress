<?php
// Your functions here

// Add theme support for custom logo
function roshanpress_custom_logo_setup() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'roshanpress_custom_logo_setup');


// header_ads
function custom_theme_customizer($wp_customize) {
    // Add a section for header options
    $wp_customize->add_section('header_section', array(
        'title' => __('Header Options', 'custom-theme'),
        'priority' => 30,
    ));

    // Add a setting for header_ads_image (image upload)
    $wp_customize->add_setting('header_ads_image', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    // Add a control for header_ads_image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_ads_image', array(
        'label' => __('Header Advertisement Image (Upload)', 'custom-theme'),
        'section' => 'header_section',
        'settings' => 'header_ads_image',
    )));

    // Add a setting for header_ads_code (text area for code)
    $wp_customize->add_setting('header_ads_code', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    // Add a control for header_ads_code
    $wp_customize->add_control('header_ads_code', array(
        'label' => __('Header Advertisement Code', 'custom-theme'),
        'section' => 'header_section',
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'custom_theme_customizer');
