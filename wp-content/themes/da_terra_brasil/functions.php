<?php 
	
	function da_terra_brasil_setup() {
		load_theme_textdomain('da_terra_brasil');

		add_theme_support('title-tag');

		add_theme_support('custom-logo', array(
			'height' => 85,
			'width' => 129,
			'flex-height' => true

		));

		add_theme_support('post-thumbnails');

		add_filter( 'post_thumbnail_html', 'remove_wps_width_attribute', 10 );

		add_filter( 'image_send_to_editor', 'remove_wps_width_attribute', 10 );
			function remove_wps_width_attribute( $html ) {
			$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
			return $html;
		}

		add_theme_support('html5', array(
			'search_form',
			'comment_form',
			'comment_list',
			'gallery',
			'caption'
		));

		add_theme_support('post-formats', array(
			'aside',
			'image',
			'video',
			'gallery'
		));

		add_theme_support('pageparentdiv');


		register_nav_menu('primary', 'Primary menu');
		register_nav_menu('secondary', 'Secondary menu');


		function new_excerpt_length($length) {
			return 70;
		}
		add_filter('excerpt_length', 'new_excerpt_length');

	}

	add_action('after_setup_theme', 'da_terra_brasil_setup');

	function da_terra_brasil_scripts() {

		wp_enqueue_style( 'style-css', get_stylesheet_uri() );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/src/js/main.js');

	}

add_action( 'wp_enqueue_scripts', 'da_terra_brasil_scripts' );

