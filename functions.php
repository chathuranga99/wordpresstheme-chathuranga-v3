<?php

function load_style_sheets(){

	wp_register_style('bootstrap_stylsheet',get_template_directory_uri().'/css/bootstrap.min.css', array(),false, 'all');
	wp_enqueue_style('bootstrap_stylsheet');

	wp_register_style('custom_stylsheet',get_template_directory_uri().'/style.css', array(),false, 'all');
	wp_enqueue_style('custom_stylsheet');
}
add_action('wp_enqueue_scripts','load_style_sheets');

function load_jscripts(){
	wp_register_script('jquery_script', get_template_directory_uri().'/js/jquery-3.4.1.min.js','',true);
	wp_enqueue_script('jquery_script');

	wp_register_script('theme_scripts', get_template_directory_uri().'/js/theme_scripts.js','',true);
	wp_enqueue_script('theme_scripts');
}
add_action('wp_enqueue_script','load_jscripts');