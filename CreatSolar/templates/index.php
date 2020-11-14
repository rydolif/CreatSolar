<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

	<section class="hero">
		<div class="container">

			<h1 class="hero__title">Инвеститруй в будущее с <b>Solergy</b></h1>

			<p class="hero__text">
				Солнечные электростанции от лучших производителей в мире, 
				<br>
				<b>сделает ваши счета за электричество меньше</b>
			</p>

			<a href="#" class="modal--consultation hero__btn btn">подробнее</a>

			<div class="hero__down">
				<a href="#business">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero__down.png" alt="">
				</a>
			</div>
		</div>
	</section>

	<section class="business" id="business">
		<div class="business__wrap">
			<div class="business__container container">

				<div class="business__slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide business__item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/business__item1.jpg" alt="">
						</div>
						<div class="swiper-slide business__item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/business__item2.jpg" alt="">
						</div>
						<div class="swiper-slide business__item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/business__item3.jpg" alt="">
						</div>
						<div class="swiper-slide business__item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/business__item4.jpg" alt="">
						</div>
					</div>
					<div class="business__slider_button">
						<div class="business__slider_prev"></div>
						<div class="business__slider_next"></div>
					</div>
				</div>

				<div class="business__description">
					<h2 class="business__subtitle subtitle"><b>Решения</b> для бизнеса</h2>
					<p>
						Мы проектируем и строим <b>«под ключ» объекты <br>любой мощности</b>  как для сетевой, 
						так и <br> автономной генерации, учитывая все потребности <br> заказчика.
					</p>
					<a href="#" class="btn modal--edits">Оставить заявку</a>
				</div>

			</div>
		</div>
	</section>

	<section class="step">
		<div class="container">
			<h2 class="step__subtitle subtitle"><b>6 шагов</b> от первых раздумий <br>до собственной электростанции:</h2>
			<div class="step__list">
				<div class="step__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/step__item1.svg" alt="">
					<p>Оставляете нам заявку</p>
				</div>
				<div class="step__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/step__item2.svg" alt="">
					<p>Получаете ответы на свои вопросы</p>
				</div>
				<div class="step__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/step__item3.svg" alt="">
					<p>Мы подбираем наилучшие варианты</p>
				</div>
				<div class="step__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/step__item4.svg" alt="">
					<p>Оплачиваете Ваш заказ</p>
				</div>
				<div class="step__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/step__item5.svg" alt="">
					<p>Мы собираем станцию под ваш заказ</p>
				</div>
				<div class="step__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/step__item6.svg" alt="">
					<p>Мы отправляем вам станцию <br>с подробной инструкцией</p>
				</div>
			</div>
		</div>
	</section>

	<section class="recommend">
		<div class="recommend__wrap">
			<div class="recommend__container container">

				<div class="recommend__description recommend__col">
					<h2 class="recommend__subtitle subtitle">Мы <b>рекомендуем</b></h2>
					<p>
						В нашем ассортименте представлены все самые <b>лучшие солнечные панели</b> со всего мира.
					</p>
					<p>
						Наибольшую популярность среди ведущих мировых экспертов получила модель 
						BiHiKu6 производства <b>Canadian Solar</b>
					</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommend__img.png" alt="">
				</div>

				<div class="recommend__list recommend__col">
					<div class="recommend__list_item">
						<div class="recommend__list_number">
							585<span>W</span>
						</div>
						<p><b>Мощность</b></p>
					</div>
					<div class="recommend__list_item">
						<div class="recommend__list_number">
							21%
						</div>
						<p><b>Эффективность</b></p>
					</div>
					<div class="recommend__list_item">
						<div class="recommend__list_number">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommend__icon.png" alt="">
						</div>
						<p><b>Большая прочность</b></p>
					</div>
					<div class="recommend__list_item">
						<div class="recommend__list_number">
							30+
						</div>
						<p><b>Лет службы</b></p>
					</div>
				</div>

				<div class="recommend__image recommend__col">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommend__image.png" alt="">
				</div>

			</div>
		</div>
	</section>

	<section class="services">
		<div class="services__container container">

			<div class="services__consultation">
				<p>
					Проконсультируем <br>и рассчитаем <br>индивидуальную цену
				</p>
				<a href="#" class="modal--consultation2 btn btn--white">Заказать консультацию</a>
			</div>

			<div class="services__info">
				<h2 class="services__subtitle subtitle">Мы оказываем <b>все виды услуг:</b></h2>
				<div class="services__info_list">

					<div class="services__info_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/services__info_item1.svg" alt="">
						<h3>Предпроектное исследование</h3>
						<p>
							Стратегический этап процесса по результатам которого принимается решение о 
							постановке задачи на проект, трудоемкости и мощности создания системы 
						</p>
					</div>

					<div class="services__info_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/services__info_item2.svg" alt="">
						<h3>Проектирование</h3>
						<p>
							Разработка монтажных чертежей для строительства, электрических схем подключения,
							заземления, кабельных трасс 
						</p>
					</div>

					<div class="services__info_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/services__info_item3.svg" alt="">
						<h3>Поставка оборудования</h3>
						<p>
							Поставка оборудование осуществляеться нашей компанией точно в срок
						</p>
					</div>

					<div class="services__info_item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/services__info_item4.svg" alt="">
						<h3>Монтаж и експлуатация</h3>
						<p>
							Наши специалисты собирают станцию и вы получаете четкие инструкции и правила ее эксплуатации
						</p>
					</div>

				</div>
			</div>

		</div>
	</section>

	<section class="news tabs">
		<div class="container">

			<h2 class="news__subtitle subtitle"><b>Новости</b> компании</h2>

			<ul class="news__filter tabs__list">
				<?php
					$categories = get_categories(array(
						'orderby' => 'name',
						'order' => 'ASC'
					));
					foreach( $categories as $category ){
						echo '<li class="tabs__item">' . $category->name . '</li> ';
					}
				?>
			</ul>

				<?php $cats = get_categories(); // Получаем список всех категорий
					foreach ($cats as $cat) {
						echo "<div class='news__list tabs__wrap'>";
						query_posts('posts_per_page=-1&cat='.$cat->cat_ID); // изменяем параметры основного цикла WordPress и затем выводим посты
						$x = 1;
						for($x=0; $x++<4;) {
							the_post();
							$category = get_the_category(); // получаем список категорий для одного поста

							if ($category[0]->cat_ID == $cat->cat_ID) { // Сравниваем список всех категорий с ID первой категории этого поста, и если совпадает, то выводим ссылку на пост только один раз, даже если он указан в нескольких категориях
								?>

								<div class="news__list_item ">
									<div class="news__list_wrap">
										<div>
											<a href="<?php the_permalink(); ?>" class="news__list_img">
												<?php if ( has_post_thumbnail() ) {
													the_post_thumbnail();
												} else { ?>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" />
												<?php } ?>
											</a>
											<h3>
												<a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</h3>
										</div>
										<p class="news__list_more">
											<time datetime="2017-04-20"><?php echo get_the_date('Y-m-d'); ?></time>
											<a href="<?php the_permalink(); ?>">Подробнее</a>
										</p>
									</div>
								</div>

								<?php
							}
						}
						echo '</div>';
					}
				?>

		</div>
	</section>

	<section class="question">
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
