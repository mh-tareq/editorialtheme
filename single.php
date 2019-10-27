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
			<form method="post" action="#">
				<input type="text" name="query" id="query" placeholder="Search" />
			</form>
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
					<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
					<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
				</article>
				<article>
					<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
					<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
				</article>
				<article>
					<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
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
			<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem
				ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat
				tempus aliquam.</p>
			<ul class="contact">
				<li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
				<li class="icon solid fa-phone">(000) 000-0000</li>
				<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
					Nashville, TN 00000-0000</li>
			</ul>
		</section>



		<!-- Footer -->
		<?php get_footer(); ?>