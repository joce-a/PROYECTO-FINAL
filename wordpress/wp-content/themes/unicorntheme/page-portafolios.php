<?php get_header() ?>

	<section class="main_intro container">
		<div class="main_intro__box">
			<h1 class="main_intro__box-txt"> PORTAFOLIO </h1>
		</div>
		
		<div class="main_intro__br"></div>
	</section>

	<section class="main_portfolio__web container">
		<h3 class="main_portfolio__intro"> NOTAS </h3>

		<?php get_template_part('notas_posttype'); ?>

		<div class="main_intro__br"></div>
	</section>

	<section class="main_portfolio__web container">
		<h3 class="main_portfolio__intro"> PRODUCCIÓN </h3>

		<?php get_template_part('produccion_posttype'); ?>

		<div class="main_intro__br"></div>
	</section>

	<section class="main_portfolio__web container">
		<h3 class="main_portfolio__intro"> ENTREVISTAS </h3>

		<?php get_template_part('entrevistas_posttype'); ?>

		<div class="main_intro__br"></div>
	</section>

	<section class="main_portfolio__audio container">
		<h3 class="main_portfolio__intro"> AUDIO </h3>

		<?php get_template_part('audios_posttype') ?>

		<div class="main_intro__br"></div>
	</section>

	<section class="main_portfolio__video container">
		<h3 class="main_portfolio__intro"> VIDEO </h3>

		<?php get_template_part('videos_posttype') ?>

		<div class="main_intro__br"></div>	
	</section>
	
	<section class="main_portfolio__gallery container scroll">
		<h3 class="main_portfolio__intro"> GALERÍA </h3>

		<?php get_template_part('galeria_posttype') ?>
		
	</section>

<?php get_footer() ?>