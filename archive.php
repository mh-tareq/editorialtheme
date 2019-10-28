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
        <?php get_sidebar(); ?>

        <?php get_footer(); ?>