<?php

function load_style_sheets(){

	wp_register_style('bootstrap_stylsheet',get_template_directory_uri().'/css/bootstrap.min.css', array(),false, 'all');
	wp_enqueue_style('bootstrap_stylsheet');

	wp_register_style('custom_stylsheet',get_template_directory_uri().'/style.css', array(),false, 'all');
	wp_enqueue_style('custom_stylsheet');
}
add_action('wp_enqueue_scripts','load_style_sheets');