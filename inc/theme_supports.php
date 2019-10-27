<?php

function editorialtheme_theme_support()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('custom-logo', array(
        'height'        =>  200,
        'width'         =>  600,
        'flex-height'   =>  true,
        'flex-width'    =>  true
    ));
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption'
    ));
}
add_action('after_setup_theme', 'editorialtheme_theme_support');
