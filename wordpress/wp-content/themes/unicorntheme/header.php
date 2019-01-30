<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title> Joce Acuña </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Main CSS 
	<link rel="stylesheet" href="assets/css/unicorn.css">-->

	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

	<header class="main_header">
		<!--MENÚ ELEMENTOS-->
		<nav class="main_nav">
			<!--MENÚ HAMBURGUESA-->
			<div class="main_nav__hamb">
				<a href="#" class="main_nav__hamb-link"><img src="<?php bloginfo('template_url') ?>/assets/icons/bars-solid.svg" class="main_nav__hamb-img" alt="menu"></a>
				<a href="<?php bloginfo('url') ?>/"><img class="main_nav__logo-mq" src="<?php bloginfo('template_url') ?>/assets/images/pink-logo.png"></a>
			</div><!--/MENÚ HAMBURGUESA-->
			<ul class="main_nav__elements">
				<li class="main_nav__list"><a href="<?php bloginfo('url') ?>/" class="main_nav__link">HOME</a></li>
				<li class="main_nav__list"><a href="<?php bloginfo('url') ?>/about" class="main_nav__link">MÁS DE MI</a></li>
				<li class="main_nav__list"><a href="<?php bloginfo('url') ?>/trabajos" class="main_nav__link">WORK PLACES</a></li>
				<li class="main_nav__list"><a href="<?php bloginfo('url') ?>/portafolios" class="main_nav__link">PORTAFOLIO</a></li>
				<li class="main_nav__list"><a href="<?php bloginfo('url') ?>/contacto" class="main_nav__link">CONTACTO</a></li>
			</ul>
		</nav> <!--/MENÚ ELEMENTOS-->
	</header>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) ); ?>
<?php } ?>