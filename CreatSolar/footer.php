
	</main>

	<footer class="footer">
		<div class="footer__container container">

			<div class="footer__col">
				<?php 
					wp_nav_menu( array(
						'menu'=>'nav',
						'menu_class'=>'list',
						'theme_location'=>'menu',
					) );
				?>
			</div>

			<div class="footer__col">
				<a href="#" class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer__logo.png" alt=""></a>
				<p>2020, Solergy</p>
				<p>Все права защищены</p>
			</div>

			<div class="footer__col">
				<?php 
					wp_nav_menu( array(
						'menu'=>'footer__nav',
						'menu_class'=>'list',
						'theme_location'=>'menu',
					) );
				?>
			</div>

		</div>
	</footer>

	<?php get_template_part( 'parts/modal' ); ?>

	<?php wp_footer(); ?>

</body>
</html>
