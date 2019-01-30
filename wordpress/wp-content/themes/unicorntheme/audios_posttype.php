<?php 
	
	// WP_Query arguments
	$args = array(
		'post_type'              => array( 'portafolio' ),
		'posts_per_page'         => '5',
		'category_name'			 => 'audios'
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
	
				<?php the_content(); ?>
	
<!-- /aqui html -->	


	<?php 
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();



 ?>