<?php
/**
 * basic-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package basic-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function basic_theme_setup():void {

	load_theme_textdomain( 'basic-theme', get_template_directory() . '/languages');

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );


	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'basic-theme' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'basic_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );


	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'basic_theme_setup' );


function basic_theme_widgets_init(): void
{
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'basic-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'basic-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'basic_theme_widgets_init' );

function basic_theme_scripts(): void
{
	wp_enqueue_style( 'basic-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
    $path_to_css = get_template_directory_uri() . '/assets/css';
    $path_to_js = get_template_directory_uri() . '/assets/js';
    wp_enqueue_style( 'style', $path_to_css . '/main.css', array(), '1.0' );

    wp_enqueue_script(
        'menu-script',
        $path_to_js . '/menu.js',
        array('jquery'),
        null,
        true
    );
    if (is_page_template('calculator.php')) {
        wp_enqueue_script(
            'three-js',
            'https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js',
            array(),
            null,
            true
        );

        wp_enqueue_script(
            'fog-js',
            'https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js',
            array('three-js'), // Зависимость от three-js
            null,
            true
        );


        wp_enqueue_script(
            'calculator-script',
            $path_to_js . '/calculator.js',
            array('jquery'),
            null,
            true
        );
        wp_localize_script('calculator-script', 'lets', array('ajax_url' => admin_url('admin-ajax.php')));

    }

}
add_action( 'wp_enqueue_scripts', 'basic_theme_scripts' );

function dd($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}


//require inc
require_once (get_template_directory() . '/inc/acf-setup/acf-init.php');
require_once (get_template_directory() . '/inc/wp-menus.php' );
require_once (get_template_directory() . '/inc/acf-setup/acf-setup.php');


//calculator
require_once (get_template_directory() . '/calculator/years-data.php');
require_once (get_template_directory() . '/calculator/month-data.php');
require_once (get_template_directory() . '/calculator/contyr-data.php');
require_once (get_template_directory() . '/calculator/reactive_type.php');

require_once (get_template_directory() . '/calculator/calculate.php');
require_once (get_template_directory() . '/calculator/ajax-calculate.php');
