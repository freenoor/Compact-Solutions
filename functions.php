<?php
/**
 * @package Standard
 */

function standard_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'standard' ),
			'menu-2' => esc_html__( 'Secondary', 'standard' ),
			'menu-left-logocenter' => esc_html__( 'Logo Center Menu Left', 'standard' ),
			'menu-right-logocenter' => esc_html__( 'Logo Center Menu Right', 'standard' ),
			'mobile-menu-logo-center' => esc_html__( 'Mobile Menu Center Logo', 'standard' ),
		)
	);
}
add_action( 'after_setup_theme', 'standard_setup' );


function standard_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'standard_content_width', 640 );
}
add_action( 'after_setup_theme', 'standard_content_width', 0 );


function standard_widgets_init() {
	register_sidebar(
		array('name'          => esc_html__( 'Logo Header', 'standard' ),
			'id'            => 'widget-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 1', 'standard' ),
			'id'            => 'footer-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 2', 'standard' ),
			'id'            => 'footer-2',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 3', 'standard' ),
			'id'            => 'footer-3',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 4', 'standard' ),
			'id'            => 'footer-4',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'CF71', 'standard' ),
			'id'            => 'contactform-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Header Rightside Widget', 'standard' ),
			'id'            => 'header-widget',)
	);
}
add_action( 'widgets_init', 'standard_widgets_init' );

function standard_scripts() {
	wp_enqueue_style( 'standard-style', get_stylesheet_uri() );
	wp_enqueue_style( 'standard-bootstrap-style', get_template_directory_uri() . '/src/css/bootstrap.min.css', array(), null );
	wp_enqueue_style( 'standard-main-style', get_template_directory_uri() . '/src/scss/style.css', array(), null );
	wp_enqueue_style( 'standard-awesome-style', get_template_directory_uri() . '/src/css/font-awesome.css', array(), null );
	wp_enqueue_style( 'standard-swiper-style', get_template_directory_uri() . '/src/css/swiper.css', array(), null );

	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/src/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'standard-jquery-js', get_template_directory_uri() . '/src/js/jquery.js', array(), null, false );
	wp_enqueue_script( 'standard-swiper-js', get_template_directory_uri() . '/src/js/swiper.js', array(), null, true );
	wp_enqueue_script( 'standard-main-js', get_template_directory_uri() . '/src/js/main.js', array(), null, true );

}
add_action( 'wp_enqueue_scripts', 'standard_scripts' );


function custom_post_type(){
	$labels_frontpage = array(
	  'name' => 'Facade Systems',
	);
	  register_post_type('ourservices', array(
	  'labels' => $labels_frontpage,
	  'public' => true,
	  'has_archive' => true,
	  'publicly_queryable' => true,
	  'query_var' => true,
	  'rewrite' => true,
	  'capability_type' => 'post',
	  'hierarchical' => false,
	  'supports' => array(
	  'title',
	  'editor',
	  'excerpt',
	  'thumbnail',
	  'revisions',),
	  'menu_position' => 8,
	  'exclude_from_search' => false,
	  'menu_icon' => 'dashicons-welcome-add-page',
	  ));
  }
add_action('init', 'custom_post_type');


	// This function enable option to put PHP code inside Widget Custom HTML 
	add_filter('widget_text','execute_php',100);
	function execute_php($html){
		 if(strpos($html,"<"."?php")!==false){
			  ob_start();
			  eval("?".">".$html);
			  $html=ob_get_contents();
			  ob_end_clean();
		 }
		 return $html;
	}	
	add_filter('widget_text','do_shortcode',10);
	// END of function which enable PHP code inside Widget Custom HTML 


	//Replace of POSTS post type on Dashboard
	function change_post_type_icon() {
    global $wp_post_types;
    // Change the icon of the "post" post type
    $wp_post_types['post']->menu_icon = 'dashicons-welcome-add-page'; // Replace 'your-icon' with the chosen Dashicon class.
	}
	add_action('init', 'change_post_type_icon');