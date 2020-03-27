<?php

function load_style_sheets(){

	wp_register_style('bootstrap_stylsheet',get_template_directory_uri().'/css/bootstrap.min.css', array(),false, 'all');
	wp_enqueue_style('bootstrap_stylsheet');
}