<?php
/**
 * METATONEHEN Theme functions and definitions
 */

if (!function_exists('metatonehen_setup')) :
    function metatonehen_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Register nav menus
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'metatonehen'),
            'footer' => esc_html__('Footer Menu', 'metatonehen'),
        ));

        // Add theme support for various features
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background');

        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align blocks.
        add_theme_support('align-wide');

        // Add support for editor styles.
        add_theme_support('editor-styles');

        // Add support for responsive embeds.
        add_theme_support('responsive-embeds');

        // Load languages
        load_theme_textdomain('metatonehen', get_template_directory() . '/languages');
    }
endif;
add_action('after_setup_theme', 'metatonehen_setup');

/**
 * Enqueue scripts and styles.
 */
function metatonehen_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    
    // Theme stylesheet
    wp_enqueue_style('metatonehen-style', get_stylesheet_uri());
    
    // Custom CSS
    wp_enqueue_style('metatonehen-custom', get_template_directory_uri() . '/css/styles.css');
    
    // jQuery (ya incluido en WordPress)
    wp_enqueue_script('jquery');
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    
    // Custom JS
    wp_enqueue_script('metatonehen-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'metatonehen_scripts');

/**
 * Register widget area.
 */
function metatonehen_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'metatonehen'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'metatonehen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'metatonehen_widgets_init');

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
