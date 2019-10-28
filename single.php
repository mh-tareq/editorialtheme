<?php get_header(); ?>

<!-- Content -->
<section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<header class="main">
				<h1><?php the_title(); ?></h1>
			</header>

			<span class="image main">
				<?php the_post_thumbnail() ?>
			</span>
			<p><?php the_content(); ?></p>
		<?php endwhile;
		else : ?>
		<?php esc_html__('Sorry no posts found', 'editorialtheme') ?>
	<?php endif; ?>
	<?php echo comments_template() ?>

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



		<!-- Footer -->
		<?php get_footer(); ?>