<?php
/**
 * Check and setup theme's default settings
 *
 * @package diamonde
 *
 */

if ( ! function_exists( 'diamonde_setup_theme_default_settings' ) ) :
	function diamonde_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$diamonde_posts_index_style = get_theme_mod( 'diamonde_posts_index_style' );
		if ( '' == $diamonde_posts_index_style ) {
			set_theme_mod( 'diamonde_posts_index_style', 'default' );
		}

		// Sidebar position.
		$diamonde_sidebar_position = get_theme_mod( 'diamonde_sidebar_position' );
		if ( '' == $diamonde_sidebar_position ) {
			set_theme_mod( 'diamonde_sidebar_position', 'right' );
		}

		// Container width.
		$diamonde_container_type = get_theme_mod( 'diamonde_container_type' );
		if ( '' == $diamonde_container_type ) {
			set_theme_mod( 'diamonde_container_type', 'container' );
		}
	}
endif;
