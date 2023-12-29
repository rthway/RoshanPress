<?php
// Your functions here

// Add theme support for custom logo
function roshanpress_custom_logo_setup() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'roshanpress_custom_logo_setup');

