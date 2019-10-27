<?php
//Features
function editorialtheme_feature_customize_register($wp_customize)
{

    ///////////////// Feature 1 //////////////////////
    //Section Adding
    $wp_customize->add_section('editorialtheme_feature_section', array(
        'title' => esc_html__('Features', 'editorialtheme'),
        'description' => esc_html__('Change Feature Title, Content & icon', 'editorialtheme')
    ));
    //Feature 1 Title Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_1_title', array(
        'default'           =>  'Portitor ullamcorper',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 1 Title Control
    $wp_customize->add_control('editorialtheme_feature_1_title', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 1 Title', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));

    //Feature 1 Content Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_1_content', array(
        'default'           =>  'Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin                     aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 1 Content Control
    $wp_customize->add_control('editorialtheme_feature_1_content', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 1 Content', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));

    //Feature 1 icon Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_1_icon', array(
        'default'           =>  'fa-gem',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 1 icon Control
    $wp_customize->add_control('editorialtheme_feature_1_icon', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 1 icon', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));
    ///////////////// end Feature 1 //////////////////////

    ///////////////// Feature 2 //////////////////////
    //Feature 2 Title Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_2_title', array(
        'default'           =>  'Sapien veroeros',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 1 Title Control
    $wp_customize->add_control('editorialtheme_feature_2_title', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 2 Title', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));

    //Feature 2 Content Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_2_content', array(
        'default'           =>  'Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin                     aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 2 Content Control
    $wp_customize->add_control('editorialtheme_feature_2_content', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 2 Content', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));

    //Feature 2 icon Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_2_icon', array(
        'default'           =>  'fa-paper-plane',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 2 icon Control
    $wp_customize->add_control('editorialtheme_feature_2_icon', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 2 icon', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));
    ///////////////// end Feature 2 //////////////////////

    ///////////////// Feature 3 //////////////////////
    //Feature 3 Title Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_3_title', array(
        'default'           =>  'Quam lorem ipsum',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 3 Title Control
    $wp_customize->add_control('editorialtheme_feature_3_title', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 3 Title', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));

    //Feature 3 Content Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_3_content', array(
        'default'           =>  'Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin                     aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 3 Content Control
    $wp_customize->add_control('editorialtheme_feature_3_content', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 3 Content', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));

    //Feature 3 icon Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_3_icon', array(
        'default'           =>  'fa-rocket',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 3 icon Control
    $wp_customize->add_control('editorialtheme_feature_3_icon', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 3 icon', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));
    ///////////////// end Feature 3 //////////////////////

    ///////////////// Feature 4 //////////////////////


    //Feature 4 Title Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_4_title', array(
        'default'           =>  'Sed magna finibus',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 4 Title Control
    $wp_customize->add_control('editorialtheme_feature_4_title', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 4 Title', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));

    //Feature 4 Content Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_4_content', array(
        'default'           =>  'Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin                     aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 4 Content Control
    $wp_customize->add_control('editorialtheme_feature_4_content', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 4 Content', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));

    //Feature 4 icon Setting Adding
    $wp_customize->add_setting('editorialtheme_feature_4_icon', array(
        'default'           =>  'fa-rocket',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Feature 4 icon Control
    $wp_customize->add_control('editorialtheme_feature_4_icon', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Feature 4 icon', 'editorialtheme'),
        'section'   =>  'editorialtheme_feature_section'
    ));
    ///////////////// end Feature 4 //////////////////////


    ///////////////// Show Box //////////////////////

    //Show Box Section Adding
    $wp_customize->add_section('editorialtheme_showbox_section', array(
        'title' => esc_html__('Show Box', 'editorialtheme'),
        'description' => esc_html__('Change ShowBox Title, Content, Image', 'editorialtheme')
    ));

    //Show Box Title Setting
    $wp_customize->add_setting('editorialtheme_showbox_title', array(
        'default'           =>  'Aenean ornare velit lacus, ac varius enim ullamcorper eu',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Show Box Title Control
    $wp_customize->add_control('editorialtheme_showbox_title', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Show Box Title', 'editorialtheme'),
        'section'   =>  'editorialtheme_showbox_section'
    ));

    //Show Box SubTitle Setting
    $wp_customize->add_setting('editorialtheme_showbox_subtitle_content', array(
        'default'           =>  'Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Show Box SubTitle Control
    $wp_customize->add_control('editorialtheme_showbox_subtitle_content', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Show Box SubTitle', 'editorialtheme'),
        'section'   =>  'editorialtheme_showbox_section'
    ));

    //Show Box Content Setting
    $wp_customize->add_setting('editorialtheme_showbox_content', array(
        'default'           =>  'Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.',
        'sanitize_callback' =>  'sanitize_text_field'
    ));
    //Show Box Content Control
    $wp_customize->add_control('editorialtheme_showbox_content', array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Show Box Content', 'editorialtheme'),
        'section'   =>  'editorialtheme_showbox_section'
    ));

    //Showbox Image Setting
    $wp_customize->add_setting('editorialtheme_showbox_image', array(
        'default'   => get_bloginfo('template_directory') . '/images/pic10.jpg',
    ));

    //Showbox Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'editorialtheme_showbox_image', array(
        'label' => esc_html__('ShowBox Image', 'editorialtheme'),
        'section'   => 'editorialtheme_showbox_section',
        'setting'   => 'editorialtheme_showbox_image'
    )));
    ///////////////// end Show Box //////////////////////


    ///////////////// Social Icons //////////////////////

    //Social Section Adding
    $wp_customize->add_section('editorialtheme_social_section', array(
        'title' => esc_html__('Social Icons', 'editorialtheme')
    ));

    //Twitter Url Setting
    $wp_customize->add_setting('editorialtheme_twitter_url', array(
        'default'           =>  'https://www.twitter.com'
    ));
    //Twitter Url Control
    $wp_customize->add_control('editorialtheme_twitter_url', array(
        'label'     =>  esc_html__('Twitter', 'editorialtheme'),
        'section'   =>  'editorialtheme_social_section'
    ));

    //Facebook Url Setting
    $wp_customize->add_setting('editorialtheme_facebook_url', array(
        'default'           =>  'https://www.facebook.com'
    ));
    //Facebook Url Control
    $wp_customize->add_control('editorialtheme_facebook_url', array(
        'label'     =>  esc_html__('Facebook', 'editorialtheme'),
        'section'   =>  'editorialtheme_social_section'
    ));

    //Snapchat Url Setting
    $wp_customize->add_setting('editorialtheme_snapchat_url', array(
        'default'           =>  'https://www.snapchat.com'
    ));
    //Snapchat Url Control
    $wp_customize->add_control('editorialtheme_snapchat_url', array(
        'label'     =>  esc_html__('Snapchat', 'editorialtheme'),
        'section'   =>  'editorialtheme_social_section'
    ));

    //Instagram Url Setting
    $wp_customize->add_setting('editorialtheme_instagram_url', array(
        'default'           =>  'https://www.instagram.com'
    ));
    //Instagram Url Control
    $wp_customize->add_control('editorialtheme_instagram_url', array(
        'label'     =>  esc_html__('Instagram', 'editorialtheme'),
        'section'   =>  'editorialtheme_social_section'
    ));

    //Medium Url Setting
    $wp_customize->add_setting('editorialtheme_medium_url', array(
        'default'           =>  'https://www.medium.com'
    ));
    //Medium Url Control
    $wp_customize->add_control('editorialtheme_medium_url', array(
        'label'     =>  esc_html__('Medium', 'editorialtheme'),
        'section'   =>  'editorialtheme_social_section'
    ));


    ///////////////// end Social Icons //////////////////////
}
add_action('customize_register', 'editorialtheme_feature_customize_register');
