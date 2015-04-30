<?php

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	function register_theme_menus(){
		register_nav_menus(
			array(
				'main-menu' => __('Main Menu')
				)
		);
	}
	add_action('init', 'register_theme_menus');

	function gus_theme_styles(){
		wp_enqueue_style( 'ebm', get_template_directory_uri() . '/app/assets/css/ebm.css');
		wp_enqueue_style( 'style', get_template_directory_uri() . '/app/assets/css/style.css');
	}
	add_action('wp_enqueue_scripts', 'gus_theme_styles');

	function gus_theme_js(){
		wp_enqueue_script( 'jq', get_template_directory_uri() . '/app/assets/js/jquery.min.js', array(), '', true );
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/app/assets/js/scripts.min.js', array(), '', true );
	}
	add_action('wp_enqueue_scripts', 'gus_theme_js');

 ?>

