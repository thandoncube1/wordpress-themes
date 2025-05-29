<?php

function altair_files() {
    // Main stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'altair_files');

// Navigation Menu
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu') // Secondary Footer
));

function add_newsletter_to_footer() {
    // Replace with your plugin's shortcode or function
    echo do_shortcode('[newsletter_form]');
    // Or call the plugin's direct function if available
    // newsletter_plugin_display_form();
}
