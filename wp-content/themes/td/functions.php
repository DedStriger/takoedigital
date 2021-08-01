<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('after_setup_theme', 'menu');

function menu(){
	register_nav_menu('topMenu', 'топ меню');
	register_nav_menu('footerMenu', 'футер меню');
	add_theme_support('title-tag');
}

function style_theme(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('main', get_template_directory_uri() . 'animate.css');
}

