<!DOCTYPE HTML>
<html>

<head>
    <meta charset="<?php bloginfo('charset') ?>>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class('is-preload') ?>>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="<?php echo home_url('/') ?>" class="logo">
                        <?php if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            bloginfo('title');
                        }  ?>
                    </a>
                    <ul class="icons">

                        <?php if (get_theme_mod('editorialtheme_twitter_url') !== '') { ?>
                            <li>
                                <a href="<?php echo get_theme_mod('editorialtheme_twitter_url', 'https://www.twitter.com') ?>" class="icon brands fa-twitter">
                                    <span class="label">
                                        Twitter
                                    </span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if (get_theme_mod('editorialtheme_facebook_url') !== '') { ?>
                            <li>
                                <a href="<?php echo get_theme_mod('editorialtheme_facebook_url', 'https://www.facebook.com') ?>" class="icon brands fa-facebook-f">
                                    <span class="label">
                                        Facebook
                                    </span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if (get_theme_mod('editorialtheme_snapchat_url') !== '') { ?>
                            <li>
                                <a href="<?php echo get_theme_mod('editorialtheme_snapchat_url', 'https://www.snapchat.com') ?>" class="icon brands fa-snapchat-ghost">
                                    <span class="label">
                                        Snapchat
                                    </span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if (get_theme_mod('editorialtheme_instagram_url') !== '') { ?>
                            <li>
                                <a href="<?php echo get_theme_mod('editorialtheme_instagram_url', 'https://www.instagram.com') ?>" class="icon brands fa-instagram">
                                    <span class="label">
                                        Instagram
                                    </span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if (get_theme_mod('editorialtheme_medium_url') !== '') { ?>
                            <li>
                                <a href="<?php echo get_theme_mod('editorialtheme_medium_url', 'https://www.medium.com') ?>" class="icon brands fa-medium-m">
                                    <span class="label">
                                        Medium
                                    </span>
                                </a>
                            </li>
                        <?php } ?>

                    </ul>
                </header>