<?php 
	
	// WP_Query arguments
	$args = array(
		'post_type'              => array( 'portafolio' ),
		'posts_per_page'         => '5',
		'category_name'			 => 'notas',
	);

	// The Query
	$query_galeria = new WP_Query( $args );

	// The Loop
	if ( $query_galeria->have_posts() ) {
		while ( $query_galeria->have_posts() ) {
			$query_galeria->the_post();
	 ?>

<!-- aqui html  -->
      <div class="row main_portfolio__web_note">
			<div class="main_portfolio__web_box col-xs-12 col-md-6">
				<?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-responsive' ) ); ?>
			</div>
			<div class="main_portfolio__web_box col-xs-12 col-md-6">
				<a class="main_portfolio__web_link" href="<?php the_field('url_original');?>"><h3 class="main_portfolio__web_box-title"><?php the_title(); ?></h3></a>
				<h4 class="main_portfolio__web_box-txt"> <?php the_content(); ?> </h4>
			</div>
		</div>
<!-- /aqui html -->	


	<?php 
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();



 ?>