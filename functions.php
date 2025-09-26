<?php
/**
 * SMA Theme functions and definitions
 */

// Enqueue Styles and Scripts
function sma_theme_scripts() {
    // Enqueue Main Stylesheet (style.css)
    wp_enqueue_style('sma-theme-style', get_stylesheet_uri());
    
    // Enqueue Custom CSS
    wp_enqueue_style('sma-theme-main-css', get_template_directory_uri() . '/assets/css/main.css');
    
    // Enqueue Navigation JS
    wp_enqueue_script('sma-theme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true);
    
    // Enqueue Font Awesome for all pages
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // Conditionally load page-specific assets
    if (is_page_template('page-customize.php')) {
        wp_enqueue_style('customize-package-css', get_template_directory_uri() . '/assets/css/customize-package.css');
        wp_enqueue_script('customize-package-js', get_template_directory_uri() . '/assets/js/customize-package.js', array(), '1.0.0', true);
    }
    
    if (is_page('dify')) {
        wp_enqueue_script('pricing-calculator-js', get_template_directory_uri() . '/assets/js/pricing-calculator.js', array(), '1.0.0', true);
    }
    
}
add_action('wp_enqueue_scripts', 'sma_theme_scripts');

// Theme Support - Enable features for the theme
function sma_theme_setup() {
    // Enable post thumbnails
    add_theme_support('post-thumbnails');
    
    // Enable title tag
    add_theme_support('title-tag');
    
    // Enable custom logo
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
    
    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'sma-theme'),
    ));
}
add_action('after_setup_theme', 'sma_theme_setup');

// Add body class for template identification
function add_template_body_class($classes) {
    if (is_page_template('page-customize.php')) {
        $classes[] = 'customize-package-page';
    }
    return $classes;
}
add_filter('body_class', 'add_template_body_class');