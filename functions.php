<?php
// Enqueue styles and scripts
function asdrubal_enqueue_assets(){
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'asdrubal_enqueue_assets');
?>