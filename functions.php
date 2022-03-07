<?php
/**
 * auto-fuentes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package auto-fuentes
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function auto_fuentes_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on auto-fuentes, use a find and replace
		* to change 'auto-fuentes' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'auto-fuentes', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'auto-fuentes' ),
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
			'auto_fuentes_custom_background_args',
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
add_action( 'after_setup_theme', 'auto_fuentes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function auto_fuentes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'auto_fuentes_content_width', 640 );
}
add_action( 'after_setup_theme', 'auto_fuentes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function auto_fuentes_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'auto-fuentes' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'auto-fuentes' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'auto_fuentes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function auto_fuentes_scripts() {
	wp_enqueue_style( 'auto-fuentes-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	/* Estilos basicos */
	wp_enqueue_style( 'all', get_template_directory_uri().'/css/normalize.css');
	wp_enqueue_style( 'nomalize', get_template_directory_uri().'/css/all.css');
	/* Fin de estilos basicos */

	/* Estilos header */
	wp_enqueue_style( 'header-all', get_template_directory_uri().'/css/header/all.css');
	wp_enqueue_style( 'header-great', get_template_directory_uri().'/css/header/great.css');
	wp_enqueue_style( 'header-medium', get_template_directory_uri().'/css/header/medium.css');
	wp_enqueue_style( 'header-mini', get_template_directory_uri().'/css/header/mini.css');
	/* Fin de estilos header */

	/* Estilos index */
	wp_enqueue_style( 'index-all', get_template_directory_uri().'/css/index/all.css');
	wp_enqueue_style( 'index-great', get_template_directory_uri().'/css/index/great.css');
	wp_enqueue_style( 'index-medium', get_template_directory_uri().'/css/index/medium.css');
	wp_enqueue_style( 'index-mini', get_template_directory_uri().'/css/index/mini.css');
	/* Fin de estilos index */

	/* Estilos catalogo */
	wp_enqueue_style( 'catalogo-all', get_template_directory_uri().'/css/catalogo/all.css');
	wp_enqueue_style( 'catalogo-great', get_template_directory_uri().'/css/catalogo/great.css');
	wp_enqueue_style( 'catalogo-medium', get_template_directory_uri().'/css/catalogo/medium.css');
	wp_enqueue_style( 'catalogo-mini', get_template_directory_uri().'/css/catalogo/mini.css');
	/* Fin de estilos catalogo */

	/* Estilos items */
	wp_enqueue_style( 'item-all', get_template_directory_uri().'/css/item/all.css');
	/* Fin de estilos items */

	/* Estilos footer */
	wp_enqueue_style( 'footer-all', get_template_directory_uri().'/css/footer/all.css');
	wp_enqueue_style( 'footer-mini', get_template_directory_uri().'/css/footer/mini.css');
	/* Fin de estilos footer */
	
	wp_style_add_data( 'auto-fuentes-style', 'rtl', 'replace' );

	wp_enqueue_script( 'auto-fuentes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	/* JavaScript perzonalizado */
	wp_enqueue_script( 'header-menu', get_template_directory_uri() . '/js/header/menu.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true );
	/* Fin JavaScript perzonalizado */

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'auto_fuentes_scripts' );

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

// Funciones personalizadas

function verificar_datos_contacto($dato,$defaut){
      if(strlen($dato) > 1){
            $res = $dato;
        }else{
            $res = $defaut;
        }
      return $res;
  }