<?php get_header(); ?>

<!-- Banner -->
<section id="banner">
	<div class="content">
		<header>
			<h1>
				<?php echo get_theme_mod('editorialtheme_showbox_title', 'Aenean ornare velit lacus, ac varius enim ullamcorper eu') ?>
			</h1>
			<p>
				<?php echo get_theme_mod('editorialtheme_showbox_subtitle_content', 'Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas') ?>
			</p>
		</header>
		<p>
			<?php echo get_theme_mod('editorialtheme_showbox_content', 'Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.') ?>
		</p>
	</div>
	<span class="image object">
		<img src="<?php echo get_theme_mod('editorialtheme_showbox_image', get_bloginfo('template_directory') . '/images/pic10.jpg') ?>" alt="" />
	</span>
</section>

<!-- Section -->
<?php get_template_part('template-parts/features'); ?>

<!-- Section -->
<section>
	<header class="major">
		<h2>Recent Posts</h2>
	</header>
	<div class="posts">

		<?php $withoutSticky = new WP_Query(array(
			'post__not_in' => get_option('sticky_posts'),
			'posts_per_page' => 6
		));
		?>
		<?php if ($withoutSticky->have_posts()) : while ($withoutSticky->have_posts()) : $withoutSticky->the_post(); ?>
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