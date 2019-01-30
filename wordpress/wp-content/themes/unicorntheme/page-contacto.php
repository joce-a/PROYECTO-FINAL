<?php get_header() ?>

	<?php the_post() ?>

	<?php the_content(); 

	?>

	<div class="main_api container">

		<div class="row">
			<div class="">
        		<h4 class="main_api__txt"> TU VISITA MERECE UNA CERVEZA </h4>
        		<h3 class="main_api__txt2" id="nombre-cerveza"></h3>
        		<h5 class="main_api__txt2" id="desc"></h5>
        	</div>
      	</div>

      	<div class="row">
        	<div class="">
           		<img class="main_api__img img-responsive" src="" id="foto-cerveza">
        	</div>
      	</div>

    </div>
	
	<?php if ( is_active_sidebar( 'contact-widget' ) ) { ?>
		<?php dynamic_sidebar( 'contact-widget' ); ?>
	<?php }; ?>

<?php get_footer() ?>