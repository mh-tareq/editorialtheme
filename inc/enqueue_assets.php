<?php
function editorialtheme_enqueue_assets()
{
    //Stylesheet
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');


    //Scripts
    wp_enqueue_script("jquery");
    wp_enqueue_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js', array(), '1.0.0', true);
    wp_enqueue_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), '1.0.0', true);
    wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', array(), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'editorialtheme_enqueue_assets');
