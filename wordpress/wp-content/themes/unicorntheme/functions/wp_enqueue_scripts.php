<?php 

/**
 * Scripts Enqueue
 * Registers and Enqueue Scripts in footer or head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_script/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_script/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_scripts() {

	global $theme_options;
	$theme_data = wp_get_theme();
	$deps = null;

	/* Deregister Scripts */
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );


	/* Check jQuery Support */
	if ( $theme_options['jQuery'] || $theme_options['woocommerce'] || $theme_options['slider']['flexslider'] || $theme_options['slider']['flickity'] ) {

		wp_register_script('jquery', get_theme_file_uri('/assets/js/lib/jquery.min.js'), null, '3.3.1', true);
		wp_register_script('jquery-migrate', get_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jquery'), '3.0.0', true);
		$deps = array('jquery-migrate');

	}


	/* Register Scripts */
	wp_register_script( 'flickity', get_theme_file_uri('/assets/js/lib/flickity.pkgd.js'), array('jquery-migrate'), '2.1.0', true );
	wp_register_script( 'flexslider', get_theme_file_uri('/assets/js/lib/jquery.flexslider.js'), array('jquery-migrate'), null, true );
	wp_register_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_register_script( 'covervideo', get_theme_file_uri('/assets/js/covervid.min.js'), $deps, $theme_data->get( 'Version' ), true );
	wp_register_script( 'cover_vid_funcs', get_theme_file_uri('/assets/js/cover_vid_funcs.js'), array('covervideo'), null, true );
	wp_register_script( 'popup_plugin', get_theme_file_uri('/assets/js/jquery.simplePopup.js'), $deps, $theme_data->get( 'Version' ), true );
	wp_register_script( 'unicorn', get_theme_file_uri('/assets/js/unicorn.js'), $deps, $theme_data->get( 'Version' ), true );

	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_script( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_script( 'flickity' );
	}

	if (is_page('about')) {
		wp_enqueue_script( 'covervideo' );
		wp_enqueue_script( 'cover_vid_funcs' );
	}

	wp_enqueue_script( 'bootstrap_js' );
	wp_enqueue_script( 'covervideo' );
	wp_enqueue_script( 'popup_plugin' );
	wp_enqueue_script( 'unicorn' );
}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
