<?php
/**
 * business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package business
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'business_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function business_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on business, use a find and replace
		 * to change 'business' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'business', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'business' ),
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
				'business_custom_background_args',
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
add_action( 'after_setup_theme', 'business_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function business_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'business_content_width', 640 );
}
add_action( 'after_setup_theme', 'business_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function business_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'business' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'business' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'business_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

// include custom jQuery
function shapeSpace_include_custom_jquery() {
 wp_deregister_script('jquery');
 wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');


function business_scripts() {
	wp_enqueue_style( 'business-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'business-style', 'rtl', 'replace' );

	wp_enqueue_style( 'main', get_template_directory_uri(). '/css/main.css' );

	wp_enqueue_script( 'business-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'slick.min', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'));

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'business_scripts' );

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


//Kalkulator

function kalkulator_func( $atts ){
	return '<div class="kalkulator">
				<h2>DETERMINE THE COST OF WORK</h2>
				<p>Lorem Ipsum - this text often "does" used in printing and web design.</p>

				<form>
					<select>
						<option>Experience</option>
						<option>Experience1</option>
						<option>Experience2</option>
						<option>Experience3</option>
					</select>
					<div>
						<select>
							<option>Staff</option>
							<option>Staff1</option>
							<option>Staff2</option>
							<option>Staff3</option>
						</select>
						<select>
							<option>Bonus</option>
							<option>Bonus1</option>
							<option>Bonus2</option>
							<option>Bonus3</option>
						</select>
					</div>
					<p class="kalkulator-result">$ 0.00</p>

					<div>
						<a href="#" class="btn-color">Continue</a>
						<a href="#" class="btn">5% Discount</a>
					</div>

				</form>
				
			</div>';
}
 
add_shortcode( 'kalk', 'kalkulator_func' );
