<?php
/**
 * METATONEHEN Theme Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function metatonehen_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
    
    // Sección para opciones de METATONEHEN
    $wp_customize->add_section('metatonehen_options', array(
        'title'    => __('METATONEHEN Options', 'metatonehen'),
        'priority' => 130,
    ));
    
    // Opción para el texto griego bajo el título
    $wp_customize->add_setting('greek_text', array(
        'default'           => 'μετὰ τὸ νέἕν',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('greek_text', array(
        'label'    => __('Greek Text', 'metatonehen'),
        'section'  => 'metatonehen_options',
        'type'     => 'text',
    ));
    
    // Opción para los colores del tema
    $wp_customize->add_setting('primary_color', array(
        'default'           => '#785eff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __('Primary Color', 'metatonehen'),
        'section'  => 'metatonehen_options',
        'settings' => 'primary_color',
    )));
    
    $wp_customize->add_setting('secondary_color', array(
        'default'           => '#ffd700',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label'    => __('Secondary Color', 'metatonehen'),
        'section'  => 'metatonehen_options',
        'settings' => 'secondary_color',
    )));
}
add_action('customize_register', 'metatonehen_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function metatonehen_customize_preview_js() {
    wp_enqueue_script('metatonehen_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'metatonehen_customize_preview_js');

/**
 * Output customizer CSS to wp_head
 */
function metatonehen_customizer_css() {
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo get_theme_mod('primary_color', '#785eff'); ?>;
            --secondary-color: <?php echo get_theme_mod('secondary_color', '#ffd700'); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'metatonehen_customizer_css');
