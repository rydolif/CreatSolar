<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title("", true); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">
	<meta name="theme-color" content="#000">

</head>

<?php wp_head(); ?>

<body>

	<header class="header">
		<div class="header__container">

			<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
			</a>

			<nav class="header__nav">
				<?php 
					wp_nav_menu( array(
						'menu'=>'nav',
						'menu_class'=>'list',
						'theme_location'=>'menu',
					) );
				?>
				<div class="header__info">
					<a href="meilto:info@solergy.ru" class="header__mail"><b>info@solergy.ru</b></a>
					<a href="tel:+74959229355" class="header__tel">+7 (495) 922-93-55</a>
				</div>
			</nav>

			<button class="hamburger" type="button">
				<span class="hamburger__box">
					<span class="hamburger__item"></span>
				</span>
			</button>

		</div>
	</header>

	<main class="main">