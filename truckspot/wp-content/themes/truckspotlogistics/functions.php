<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'truck_spot_setup' ) ) :

	function truck_spot_setup() {

		load_theme_textdomain( 'truck-spot', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'menu-header-home' => esc_html__( 'Header home', 'truck-spot' ),
				'menu-header' => esc_html__( 'Header', 'truck-spot' ),
				'menu-services' => esc_html__( 'Services', 'truck-spot' ),
				'menu-information' => esc_html__( 'Information', 'truck-spot' ),
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'truck_spot_setup' );



/**
 * Enqueue scripts and styles.
 */
function truck_spot_scripts() {
	wp_enqueue_style( 'truck-style', get_stylesheet_uri(), array() );
	wp_enqueue_style( 'truck-normalize', get_template_directory_uri() . '/assets/css/normalize.min.css', _S_VERSION, array(), false );
	wp_enqueue_style( 'truck-slick', get_template_directory_uri() . '/assets/css/style.css', _S_VERSION, array(), false );
	wp_enqueue_style( 'truck-slick-theme', get_template_directory_uri() . '/assets/css/slick/slick.css', _S_VERSION, array(), false );
	wp_enqueue_style( 'truck-main-style', get_template_directory_uri() . '/assets/css/slick/slick-theme.css', _S_VERSION, array(), false );
	wp_enqueue_style( 'truck-responsive', get_template_directory_uri() . '/assets/css/responsive.css', _S_VERSION, array(), false );
	wp_enqueue_style( 'truck-google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700&display=swap', _S_VERSION, array(), false );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'truck-jquery-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js', _S_VERSION, array(), true );
	wp_enqueue_script( 'truck-jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js', _S_VERSION, array(), true );
	wp_enqueue_script( 'truck-slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', _S_VERSION, array(), true );
	wp_enqueue_script( 'truck-main', get_template_directory_uri() . '/assets/js/main.js', _S_VERSION, array(), true );
}
add_action( 'wp_enqueue_scripts', 'truck_spot_scripts' );



add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'services', [
		'label'  => null,
		'labels' => [
			'name'               => 'Services',
			'menu_name'          => 'Services',
			'singular_name'      => 'Service',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Service',
			'edit_item'          => 'Edit Service',
			'new_item'           => 'New Service',
			'view_item'          => 'View Service',
			'search_items'       => 'Search Services',
			'not_found'          => 'No services found',
			'not_found_in_trash' => 'No services found in Trash',
			'parent_item_colon'  => 'Parent Services:',
		],
		'public'              => true,
		'show_in_menu'        => true,
		'menu_position'       => 24,
		'menu_icon'           => 'dashicons-car',
		'has_archive'        => true,
		'rewrite' => array( 'slug' => 'services', 'with_front'=> false ),
		'supports'            => [ 'title', 'thumbnail', 'excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
}


/**
 * Remove tag <p> from the_content()
*/
// remove_filter('the_content', 'wpautop');

/**
 * Remove tag <p> from the_excerpt()
*/
remove_filter( 'the_excerpt', 'wpautop' );

function do_excerpt($string, $word_limit) {
	echo mb_strimwidth($string, 0, $word_limit, "...");
}