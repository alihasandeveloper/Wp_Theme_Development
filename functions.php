<?php
/**
 * My theme Function
 */


// Theme title function

add_theme_support( 'title-tag' );

// Theme css and javaScript calling function

function ali_css_js_file_calling() {
    wp_enqueue_style('asif-style', get_stylesheet_uri());
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3', 'all');
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // Wp Jquery

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootsrap.js', array(), '5.3', true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);


}

add_action('wp_enqueue_scripts', 'ali_css_js_file_calling');

// Theme Function 

function asif_customizar_register($wp_customize) {
     $wp_customize->add_section('asif_header_area', array(
        'title' => __('Header Area', 'alihsan'),
        'description' => 'If you interested to update your header area, you can do it here'
     ));

     $wp_customize->add_setting('asif-logo', array(
        'default' => get_bloginfo('template_directory').'/img/logo.png',

     ));
     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'asif-logo', array(
        'label' => 'Logo Upload',
        'section' => 'asif_header_area',
        'setting' => 'asif-logo',
        'description' => 'If you interested to change or update your header area, you can do it here'

     )));
}
add_action('customize_register','asif_customizar_register');

// Add google font
function ali_google_font() {
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap" rel="stylesheet', false);
}

add_action('wp_enqueue_scripts', 'ali_google_font');

//Wordpress menu register

register_nav_menu(
    'main-menu', __('Main Menu'), 'alihsan'
);