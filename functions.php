<?php
/**
 * woow functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package woow
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'woow_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function woow_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on woow, use a find and replace
		 * to change 'woow' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'woow', get_template_directory() . '/languages' );

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
				'menu-principal' => esc_html__( 'Primary', 'woow' ),
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
				'woow_custom_background_args',
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

		// Add theme support for Woocomerce.
		add_theme_support( 'woocommerce' );
	}
endif;
add_action( 'after_setup_theme', 'woow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function woow_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'woow_content_width', 640 );
}
add_action( 'after_setup_theme', 'woow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function woow_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'woow' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'woow' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'woow_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function woow_scripts() {
	wp_enqueue_style( 'woow-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'woow-style', 'rtl', 'replace' );

	wp_enqueue_script( 'woow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'woow_scripts' );

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
 * Cargue el archivo de compatibilidad de Jetpack.
 */

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*add_action('template_redirect', 'dcms_set_maintenance_template');

function dcms_set_maintenance_template() {
	if( ! current_user_can('administrator') ){
    	include 'maintenance.html';
    	exit;
	}
}*/

//Pa algo era esto...
// First unhook the WooCommerce wrappers:
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


// Then hook in your own functions to display the wrappers your theme requires:
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}
//:D...:D...:D...:D...:D...:D...:D


//Compatibilidad con Woocommerce
function my_theme_setup() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// Eliminar los CSS de WooCommerce uno por uno
/*add_filter( 'woocommerce_enqueue_styles', 'woocommerce_dequeue_styles' );
function woocommerce_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}*/

// Eliminar todos los CSS de WooCommerce de golpe
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Formulario del single
function formulario_single(){
	get_sidebar();
}
add_action('woocommerce_before_single_product', 'formulario_single');

// Botones para moverse entre los productos
function moverse_entre_productos(){
	echo '
		<div>
			<a href="#">
				<img class="botonR" src="../wp-content/themes/woow/img/right.svg" alt="Boton producto siguiente">
			</a>
			<a href="#">
				<img class="botonL" src="../wp-content/themes/woow/img/left.svg" alt="Boton producto anterior">
			</a>
		</div>
		<span class="separadore"></span>
	';
}
add_action('woocommerce_before_single_product_summary', 'moverse_entre_productos');

// Mostrar descripcion en productos de la Tienda
function short_desc_on_product_archives() {
     
	the_excerpt();   
  }
  add_action( 'woocommerce_after_shop_loop_item_title', 'short_desc_on_product_archives', 40 );

function vista_previa_hover() {
	echo '
	<img class="previa2" src="../wp-content/themes/woow/img/previa.svg">
	';
}
	add_action('woocommerce_before_shop_loop_item_title', 'vista_previa_hover');

// Barra decorativa sobre el titulo
function linea_decorativa_tienda() {
	echo '
	<h5 class="separadorsito">.</h5>
	';
}
  add_action('woocommerce_before_shop_loop_item_title', 'linea_decorativa_tienda');



  function njengah_pagination() {
	// print_r($wp_query);
    if( is_page(63) )

	echo'si es la tienda';

        return;

     global $wp_query;

     $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */

    if ( $paged >= 1 )

        $links[] = $paged;

    /** Add the pages around the current page to the array */

    if ( $paged >= 5 ) {

        $links[] = $paged - 1;

        $links[] = $paged - 2;

    }
    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */

    if ( get_previous_posts_link() )

        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page */

    if ( ! in_array( 1, $links ) ) {

        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    }
    /** Link to current page*/

    sort( $links );

    foreach ( (array) $links as $link ) {

        $class = $paged == $link ? ' class="active"' : '';

    }

    /** Link to last page,*/

    if ( ! in_array( $max, $links ) ) {

        if ( ! in_array( $max - 1, $links ) )

            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';

    }

    /** Next Post Link */

    if ( get_next_posts_link() )

        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
    echo '</ul></div>' . "\n";

}

add_action('woocommerce_after_main_content', 'njengah_pagination');