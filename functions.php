<?php

require get_template_directory() . '/inc/customizer.php';

function template_default_load_scripts(){
    // Add stylesheet in the site.
    wp_enqueue_style( 'template-default-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ), 'all' );
    // Add fonts in the site.
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap', array(), null );
    // Add scripts in the site.
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'template_default_load_scripts' );

function template_default_config(){

    // Enable configuration for translation
    $textdomain = 'template-default';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

    // Register navigation menus uses wp_nav_menu in two places.
    register_nav_menus(
        array(
            'template_default_main_menu' =>  esc_html__( 'Main Menu', 'template-default' ),
            'template_default_footer_menu'   =>  esc_html__( 'Footer Menu', 'template-default' )
        )
    );
    // Image dimension for custom-header.
    $args = array(
        'height'    =>  225,
        'width'     =>  1920
    );
    // Register custom header.
    add_theme_support( 'custom-header', $args );
    // Register thumbnails images.
    add_theme_support( 'post-thumbnails' );
    // Register custom logo in the site.
    add_theme_support( 'custom-logo', array(
        'width'     =>  200,
        'height'    =>  110,
        'flex-height'   => true,
        'flex-width'    => true
    ) );
    // Register Feed Links in the site.
    add_theme_support( 'automatic-feed-links' );
    // Register HTML5 in the site.
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    // Register title in the site.
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'template_default_config', 0 );

function template_default_sidebars(){
    // Register the sidebar on the site's blog
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'Blog Sidebar', 'template-default' ),
            'id'    =>  'sidebar-blog',
            'description'   =>  esc_html__( 'This is the Blog Sidebar. You can add your widgets here.', 'template-default' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    // Register the Social Medias on the site
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'Social Medias', 'template-default' ),
            'id'    =>  'social-medias',
            'description'   =>  esc_html__( 'This is the Social Medias. You can add your widgets here.', 'template-default' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    // Register the Maps on the site
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'Maps', 'template-default' ),
            'id'    =>  'maps',
            'description'   =>  esc_html__( 'This is the Map. You can add your widgets here.', 'template-default' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
    // Register the Contact on the site
    register_sidebar(
        array(
            'name'  =>  esc_html__( 'Contact', 'template-default' ),
            'id'    =>  'contact',
            'description'   =>  esc_html__( 'This is the Contact the site. You can add your shortcode here.', 'template-default' ),
            'before_widget' =>  '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
}
add_action( 'widgets_init', 'template_default_sidebars' );

if( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
} // Verification Wordpress