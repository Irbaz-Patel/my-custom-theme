<?php
function load_theme_assets() {
      // Load custom style.css from root
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );
    // JS file
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'load_theme_assets');