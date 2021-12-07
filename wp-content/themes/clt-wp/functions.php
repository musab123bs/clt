<?php
/**
 * CLT-WP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CLT-WP
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'clear_location_travel_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function clear_location_travel_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CLT-WP, use a find and replace
		 * to change 'clear-location-travel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'clear-location-travel', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'clear-location-travel' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'clear_location_travel_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
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
endif;
add_action( 'after_setup_theme', 'clear_location_travel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clear_location_travel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clear_location_travel_content_width', 640 );
}
add_action( 'after_setup_theme', 'clear_location_travel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clear_location_travel_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'clear-location-travel' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'clear-location-travel' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'footer-Sidebar-1', 'clear-location-travel' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'clear-location-travel' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s footer-heading">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'footer-Sidebar-2', 'clear-location-travel' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'clear-location-travel' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s footer-heading">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'footer-Sidebar-3', 'clear-location-travel' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'clear-location-travel' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s footer-heading">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'footer-Sidebar-4', 'clear-location-travel' ),
			'id'            => 'sidebar-5',
			'description'   => esc_html__( 'Add widgets here.', 'clear-location-travel' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s footer-heading">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'clear_location_travel_widgets_init' );

function tabs(){
	return'<div class="banner-tabs">  
	<div class="tabs">
	  <div class="tab-heading" id="flight">
		<h3>Flight</h3>
	  </div>
	  <div class="tab-heading" id="stay">
		<h3>Stay</h3>
	  </div>
	  <div class="tab-heading" id="toursim">
		<h3>Tourism</h3>
	  </div>
	  <div class="tab-heading" id="cars">
		<h3>Cars</h3>
	  </div>
	</div>
	<div class="tab-desc" id="booking">
	  <div class="tab-para">
		<p><input type="text" placeholder="YOUR BOOKING"></p>
	  </div>
	  <div class="tab-para dob">
		<p><input type="text" id="datepicker" placeholder="DATE OF BOOKING"></p>
	  </div>
	  <div class="tab-para">
		<p><input type="number" placeholder="NO. OF PEOPLE ADULT & KIDS"></p>
	  </div>
	  <div class="tab-search-btn">
		<!-- <p><a href="#">Search</a></p> -->
		<p><input type="submit" value="Search"></p>
	  </div>
	</div>
  </div>';
}
add_shortcode('tabs-view', "tabs");


function contact_form(){
	return '<div class="contact-form">
	<div class="container">
		<div class="row main-form">
			<div class="main-form-heading text-center">
				<h2>Contact Form</h2>
			</div>
			<div class="col-md-6 mx-auto">
				<form action="contact-process.php">
					<div class="inner-heading text-center">
						<h3>Find The Right Car Now</h3>
					</div>
					<div class="form-fields">
						<div class="row main-form-field">
							<div class="col-md-12 inner-form-field">
								<input type="text" name="fname" placeholder="Your Name">
							</div>
							<div class="col-md-12 inner-form-field" >
								<input type="email" name="email" placeholder="Your Email">
							</div>
							<div class="col-md-12 inner-form-field">
								<input type="phone" name="phone" placeholder="Your Mobile Number">
							</div>
							<div class="col-md-6 inner-form-field pr-1">
								<select id="Brand_of_Cars">
									<option value="Select Car">Select Cars</option>
									<option value="volvo">Volvo</option>
									<option value="saab">Saab</option>
									<option value="mercedes">Mercedes</option>
									<option value="audi">Audi</option>
								</select>
							</div>
							<div class="col-md-6 inner-form-field pl-1">
								<select id="type_of_cars">
									<option value="Select Car">Type of Car</option>
									<option value="volvo">Volvo</option>
									<option value="saab">Saab</option>
									<option value="mercedes">Mercedes</option>
									<option value="audi">Audi</option>
								</select>
							</div>
							<div class="select-price">
								<p>Select Your Price</p>
							</div>
							<div class="price-element">
								<input type="radio" name="gender" value="below $40,000"> below $40,000
								<input type="radio" name="gender" value="$43,000"> $43,000
								<input type="radio" name="gender" value="$93,000"> $93,000
								<input type="radio" name="gender" value="$45,000"> $45,000
							</div>
							<div class="col-md-12">
								<div class="contact-btn-holder text-center mt-4">
									<input type="button" value="Submit">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>';
}
add_shortcode('contact_form_page', 'contact_form');

function load_js_assets(){
	if (is_page( 8 )){
	wp_enqueue_script('alert', 'http://localhost/clt-wp/alert.js', array('jquery'), '', 'false');
	}
}
add_action('wp_enqueue_scripts', 'load_js_assets');  


/**
 * Enqueue scripts and styles.
 */
function clear_location_travel_scripts() {
	wp_enqueue_style( 'clear-location-travel-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'clear-location-travel-style', 'rtl', 'replace' );

	wp_enqueue_script( 'clear-location-travel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clear_location_travel_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

