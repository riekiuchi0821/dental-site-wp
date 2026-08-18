<?php
function dental_theme_enqueue_styles() {

    wp_enqueue_style(
        'destyle',
        get_template_directory_uri() . '/css/destyle.css'
    );

    wp_enqueue_style(
        'dental-style',
        get_template_directory_uri() . '/css/style.css'
    );

    wp_enqueue_script(
    'dental-top',
    get_template_directory_uri() . '/js/top.js',
    array(),
    null,
    true
);
}

add_action('wp_enqueue_scripts', 'dental_theme_enqueue_styles');

add_theme_support('title-tag');