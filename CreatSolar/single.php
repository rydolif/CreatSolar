
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="about__hero hero"  style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
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
			<?php the_content(); ?>
		</div>
	</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>