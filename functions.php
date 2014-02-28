<?php
/**
 * base functions and definitions
 *
 * @package base
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'base_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function base_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on base, use a find and replace
	 * to change 'base' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'base', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */

	//アイキャッチ画像の有効化
	add_theme_support( 'post-thumbnails', array( 'post' ) );
	set_post_thumbnail_size(500,500,true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'base' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'base_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // base_setup
add_action( 'after_setup_theme', 'base_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function base_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'base' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s small-12 medium-4 large-12 columns">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
	    'name' => __( 'Footer Widget Area 1', 'twentytwelve' ),
	    'id' => 'footer-widget-1',
	    'description' => __( 'Widget area is displayed on a footer portion', 'twentytwelve' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );

	register_sidebar( array(
	    'name' => __( 'Footer Widget Area 2', 'twentytwelve' ),
	    'id' => 'footer-widget-2',
	    'description' => __( 'Widget area is displayed on a footer portion', 'twentytwelve' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	    ) );

	register_sidebar( array(
	    'name' => __( 'Footer Widget Area 3', 'twentytwelve' ),
	    'id' => 'footer-widget-3',
	    'description' => __( 'Widget area is displayed on a footer portion', 'twentytwelve' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );

	register_sidebar( array(
	    'name' => __( 'Footer Widget Area 4', 'twentytwelve' ),
	    'id' => 'footer-widget-4',
	    'description' => __( 'Widget area is displayed on a footer portion', 'twentytwelve' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	    ) );
}
add_action( 'widgets_init', 'base_widgets_init' );

/**
 * フッターにウィジェット追加
 */
function twentytwelve_footer_widget_class() {
    $count = 0;

    if ( is_active_sidebar( 'footer-widget-1' ) )
        $count++;

    if ( is_active_sidebar( 'footer-widget-2' ) )
        $count++;

    if ( is_active_sidebar( 'footer-widget-3' ) )
        $count++;

    if ( is_active_sidebar( 'footer-widget-4' ) )
        $count++;

    $class = '';

    switch ( $count ) {
        case '1':
            $class = 'one';
            break;
        case '2':
            $class = 'two';
            break;
        case '3':
            $class = 'three';
            break;
        case '4':
            $class = 'four';
            break;
    }

    if ( $class )
        echo $class;
}

/**
 * Enqueue scripts and styles.
 */
function base_scripts() {
	wp_enqueue_style( 'base-style', get_stylesheet_uri() );

	wp_enqueue_script( 'base-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'base-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'base_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * 続きを読む
 */
function new_excerpt_mblength($length) {
    return 96;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

function new_excerpt_more($more) {
    return '...<a href="'. get_permalink($post->ID) . '" class="more-link">' . '続きを読む' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * アイキャッチ画像がない場合の処理
*/
add_action( 'save_post', 'save_default_thumbnail' );
function save_default_thumbnail( $post_id ) {
    $post_thumbnail = get_post_meta( $post_id, $key = '_thumbnail_id', $single = true );
    if ( !wp_is_post_revision( $post_id ) ) {
        if ( empty( $post_thumbnail ) ) {
            update_post_meta( $post_id, $meta_key = '_thumbnail_id', $meta_value = '56' );
        }
    }
}