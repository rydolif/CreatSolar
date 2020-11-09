<?php
	get_header();
?>

	<section class="about__hero hero">
		<div class="container">

			<div class="hero__down">
				<a href="#about">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/about__icon.svg" alt="">
				</a>
			</div>

		</div>
	</section>

	<section class="about__description" id="about">
		<div class="container">

			<div class="about__crumbs">
				<a href="<?php echo get_home_url(); ?>">На главную</a>
			</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>

<?php
	get_footer();
