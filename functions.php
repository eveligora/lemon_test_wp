<?php

add_action('wp_enqueue_scripts', 'theme_scripts');

function theme_scripts()
{
	wp_enqueue_style('swiper-styles', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array());
	wp_enqueue_style('style-main', get_template_directory_uri() . '/app/css/style.css', array(), filemtime(get_theme_file_path('/app/css/style.css')));

	wp_enqueue_script('script-main', get_template_directory_uri() . '/app/js/script.min.js', array(), filemtime(get_theme_file_path('/app/js/script.min.js')));
}
