<?php get_header(); ?>


<!-- Section -->
<section>
    <header class="major">
        <?php the_archive_title('<h1>', '</h1>'); ?>
        <?php the_archive_description('<p>', '</p>'); ?>
    </header>
    <div class="posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail() ?></a>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo wp_trim_words(get_the_content(), 27, NULL) ?></p>
                    <ul class="actions">
                        <li><a href="<?php the_permalink(); ?>" class="button">More</a></li>
                    </ul>
                </article>
            <?php endwhile;
            else : ?>
            <p><?php esc_html__('Sorry no posts found', 'editorialtheme') ?></p>
        <?php endif; ?>

    </div>
</section>

</div>
</div>

<!-- Sidebar -->
<div id="sidebar">
    <div class="inner">

        <!-- Search -->
        <section id="search" class="alt">
            <?php get_search_form(); ?>
        </section>

        <!-- Menu -->
        <?php get_template_part('template-parts/navigation'); ?>
        <!-- Section -->
        <section>
            <header class="major">
                <h2>Ante interdum</h2>
            </header>
            <div class="mini-posts">
                <article>
                    <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic07.jpg" alt="" /></a>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic08.jpg" alt="" /></a>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic09.jpg" alt="" /></a>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                </article>
            </div>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </section>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Get in touch</h2>
            </header>
            <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="contact">
                <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                <li class="icon solid fa-phone">(000) 000-0000</li>
                <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                    Nashville, TN 00000-0000</li>
            </ul>
        </section>

        <?php get_footer(); ?>