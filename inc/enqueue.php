<?php
/**
 * Diamonde enqueue scripts
 *
 * @package diamonde
 */

if ( ! function_exists( 'diamonde_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */

		function diamonde_scripts() {
			// Get the theme data.
			$the_theme = wp_get_theme();
			wp_enqueue_style( 'animate-styles', get_stylesheet_directory_uri() . '/css/animate.min.css', array(), '3.5.1', false  );
			wp_enqueue_style( 'diamonde-styles', get_stylesheet_directory_uri() . '/css/theme.css', array(), $the_theme->get( 'Version' ), false );

			wp_enqueue_script( 'jquery');

			wp_enqueue_script( 'diamonde-isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '2.0.1', true );
			wp_enqueue_script( 'diamonde-imagesloaded-js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '3.1.8', true );
			wp_enqueue_script('diamonde-modernizr-script', get_template_directory_uri() . '/js/modernizr.custom.js', array('jquery'), '2.6.2', false);

			wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true);
			wp_enqueue_script( 'diamonde-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );

			wp_enqueue_script('diamonde-custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true);

			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}

} // endif function_exists( 'diamonde_scripts' ).

add_action( 'wp_enqueue_scripts', 'diamonde_scripts' );
