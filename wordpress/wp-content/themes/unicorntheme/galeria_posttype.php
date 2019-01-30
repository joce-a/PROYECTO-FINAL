<?php 
	
	// WP_Query arguments
	$args = array(
		'post_type'              => array( 'portafolio' ),
		'posts_per_page'         => '1',
		'category_name'			 => 'galeria'
	);

	// The Query
	$query_galeria = new WP_Query( $args );

	// The Loop
	if ( $query_galeria->have_posts() ) {
		while ( $query_galeria->have_posts() ) {
			$query_galeria->the_post();
	 ?>

<!-- aqui html  -->
	<h2><?php //the_title(); ?></h2>
	<div class="container main_portfolio__gallery-img img-responsive">
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
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