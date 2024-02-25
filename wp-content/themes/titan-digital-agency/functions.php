<?php
/**
 * Titan Digital Agency functions
 */

if ( ! function_exists( 'titan_digital_agency_styles' ) ) :
	function titan_digital_agency_styles() {
		// Register theme stylesheet.
		wp_register_style('titan-digital-agency-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'titan-digital-agency-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'titan_digital_agency_styles' );