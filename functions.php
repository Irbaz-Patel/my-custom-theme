<?php
function load_theme_assets() {
    // JS file
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'load_theme_assets');