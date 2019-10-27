<?php
function editorialtheme_nav_registration()
{
    register_nav_menu('primary_menu_left', esc_html__('Primary Menu', 'editorialtheme'));
}
add_action('after_setup_theme', 'editorialtheme_nav_registration');

add_image_size('frontpage_img', 500, 400, true);
