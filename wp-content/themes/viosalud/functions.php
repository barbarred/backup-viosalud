<?php
// FUNCION PARA IMAGENES DESTACADAS
function viosalud_setup(){
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'viosalud_setup');
function viosalud_styles(){
// REGISTRAR ESTILOS
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
	wp_register_style('bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.css', array(), '4.3.1');
	wp_register_style('quicksand', "https://fonts.googleapis.com/css?family=Quicksand&display=swap");
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
	wp_register_style('mobile', get_template_directory_uri() . '/css/mobile.css', array(), '1.0');
	wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0');
// LLAMAR A LOS ESTILOS
	wp_enqueue_style('normalize');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('style');
	wp_enqueue_style('mobile');
	wp_enqueue_style('animate');
// REGISTAR CODIGO JAVASCRIPT
	wp_register_script('bootstrap', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array(), '4.3.1', true );
	wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
	wp_register_script('wow', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true );
// LLAMAR LOS JS
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('scripts');
	wp_enqueue_script('wow');
}
add_action('wp_enqueue_scripts', 'viosalud_styles');
//	CREACION DE MENUS
function viosalud_menus(){
	register_nav_menus(array(
		'header-menu' => __('Header Menu', 'viosalud'),
		'footer-menu' => __('Footer Menu', 'viosalud')
	));
}
add_action('init', 'viosalud_menus');

// Función para cambiar la función del remitente

function new_mail_from_name($old){
	return 'viosalud info';
}
add_filter('wp_mail_from_name', 'new_mail_from_name');

function new_mail_from($old){
	return 'viosalud@viosalud.com';
}
add_filter('wp_mail_from', 'new_mail_from');