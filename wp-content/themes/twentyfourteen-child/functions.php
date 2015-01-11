<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}

function hello_dolly_shortcode() {
    return "Hello Dolly";
}
add_shortcode( 'hello-dolly', 'hello_dolly_shortcode' );

add_action( 'init', 'create_post_type' );
//Registers the Product's post type
function create_post_type() {
    register_post_type( 'acme_product',
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
        'public' => true,
        'has_archive' => true,
        )
    );
}