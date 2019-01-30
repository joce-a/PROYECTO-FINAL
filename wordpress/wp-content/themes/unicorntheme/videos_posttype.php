 <?php
 	$arg = array(
 		'post_type'              => array( 'portafolio' ),
		'posts_per_page'         => '3',
		'category_name'			 => 'videos'
 	);
 
 	$get_arg = new WP_Query( $arg );
 
 	while ( $get_arg->have_posts() ) {
 		$get_arg->the_post();
 	?>
 		
 		<h2><?php //the_title(); ?></h2>

	<div class="main_portfolio__video-link embed-responsive embed-responsive-16by9">
	  	<?php the_content(); ?>
	</div>
 
 	<?php } wp_reset_postdata();
 ?>