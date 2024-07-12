<?php

/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

define('HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0');

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles()
{

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20);

/**
 * Custom Landing Page Enqueue scripts and styles.
 */
function lp_scripts()
{
	if (is_page_template('landing-page.php')) {
		$swiper_css = '/lib/swiper/swiper-bundle.min.css';
		$icomoon_css = '/lib/icomoon/style.css';
		$style_css = '/assets/css/style.css';
		wp_enqueue_style('lp-swiper', get_theme_file_uri() . $swiper_css, [], wp_get_theme()->get('Version'));
		wp_enqueue_style('lp-icomoon', get_theme_file_uri() . $icomoon_css, [], wp_get_theme()->get('Version'));
		wp_enqueue_style('lp-style', get_theme_file_uri() . $style_css, [], wp_get_theme()->get('Version'));

		$jquery = '/lib/jquery.min.js';
		$swiper_js = '/lib/swiper/swiper-bundle.min.js';
		$main_js = '/assets/js/main.js';

		wp_enqueue_script('lp-jquery', get_theme_file_uri() . $jquery, [], wp_get_theme()->get('Version'), true);
		wp_enqueue_script('lp-swiper', get_theme_file_uri() . $swiper_js, [], wp_get_theme()->get('Version'), true);
		wp_enqueue_script('lp-script', get_theme_file_uri() . $main_js, [], wp_get_theme()->get('Version'), true);
	}
}
add_action('wp_enqueue_scripts', 'lp_scripts', 999);

// Disable the 'Main default_theme scripts and styles.'
function disable_default_theme_scripts_styles()
{
	if (is_page_template('landing-page.php')) {
		wp_deregister_style('hello-elementor');
		wp_dequeue_style('hello-elementor');
		wp_deregister_style('hello-elementor-theme-style');
		wp_dequeue_style('hello-elementor-theme-style');
		wp_deregister_style('hello-elementor-header-footer');
		wp_dequeue_style('hello-elementor-header-footer');
		wp_deregister_style('elementor-post-4981');
		wp_dequeue_style('elementor-post-4981');
		wp_deregister_style('elementor-post-5351');
		wp_dequeue_style('elementor-post-5351');
		wp_deregister_style('elementor-post-5353');
		wp_dequeue_style('elementor-post-5353');
	}
}
add_action('wp_enqueue_scripts', 'disable_default_theme_scripts_styles', 999);

// Gravity form Disable loading of CSS files
add_filter('gform_disable_css', '__return_true');
