<?php
/* Template name: Контакты */
?>

<?php get_header(); ?>

	<section class="contacts__hero about__hero hero">
		<div class="container">

			<div class="contacts__down hero__down">
				<a href="#question">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/contscts__chat.svg" alt="">
				</a>
			</div>

		</div>
	</section>

	<section class="question question--bg" id="question">
		<div class="question__container container">

			<div class="question__desc">
				<h2 class="question__subtitle subtitle">
					Остались вопросы? <br> <b>Готовы к <br> сотрудничеству?</b>
				</h2>
				<p>Заполните форму  обратной связи и наш менеджер свяжеться с Вами в ближайшее время.</p>
				<p class="question__desc_center">или</p>
				<ul>
					<li>
						<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/phone.png" alt="">Звоните</span>
						<a href="tel:+74959229355"><b>+7 (495) 922-93-55</b></a>
					</li>
					<li>
						<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/mail.png" alt="">Пишите</span>
						<a href="mailto:info@solergy.ru"><b>info@solergy.ru</b></a>
					</li>
				</ul>
			</div>

			<div class="question__form form">
				<?php echo do_shortcode( '[contact-form-7 id="34" title="Контакты"]' ); ?>
			</div>

		</div>
	</section>

<?php get_footer(); ?>
