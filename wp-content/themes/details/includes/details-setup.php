<?php

	/* registrera ny bottstrap meny */
require_once("wp-bootstrap-navwalker.php");

function details_setup() {

		/* automatisk storlek på bilder */
	add_image_size('page-featured-image', 580, 250, array('center', 'center'));
	add_image_size('page-featured-gallery-image', 220, 200, array('center', 'center'));

		/* lägg till bild i inlägg */
	add_theme_support('post-thumbnails', array( 'post', 'image' ) );
	set_post_thumbnail_size(180,180, false);

		/* registrera meny */
	register_nav_menu('header-menu', __('Header Menu', 'details'));
}

	/* Laddas in under boot */
add_action('after_setup_theme', 'details_setup');

function details_sidebars() {
	/* registrera sidebars */
	register_sidebar(array(
			'name'					=> 'Blog Sidebar',
			'id'						=> 'blog-sidebar',
			'before-widget'	=> '<li class="widget">',
			'after-widget'	=> '</li>',
			'before-title'	=> '<h2>',
			'after-title'		=> '</h2>',
		));
}
add_action('widgets_init', 'details_sidebars');

function details_fotemeny() {
	/* registrera sidebars */
	register_sidebar(array(
			'name'					=> 'Meny',
			'id'						=> 'meny-sidebar',
			'before-widget'	=> '<li class="widget">',
			'after-widget'	=> '</li>',
			'before-title'	=> '<h2>',
			'after-title'		=> '</h2>',
		));
}
add_action('widgets_init', 'details_fotemeny');

function details_scripts_styles() {
		/* ladda bootstrap och theme css */
	wp_enqueue_style( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css',array(),'4.0.0-alpha.6','all');
	wp_enqueue_style( 'detail-site', get_template_directory_uri() . '/css/site.css',array('bootstrap4'),'1.0','all');
	  /* dumpa version och ladda om jquery */
	wp_deregister_script('jquery'); 
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', array(), '3.1.1', true);
		/* ladda bootstrap tether */
	wp_enqueue_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array( 'jquery' ), '1.4.0', true);
		/* ladda bootstrap js */
	wp_enqueue_script( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array( 'jquery', 'tether' ), '4.0.0-alpha.6', true);
}

	/* ladda in dessa styles och scripts */
add_action('wp_enqueue_scripts', 'details_scripts_styles');