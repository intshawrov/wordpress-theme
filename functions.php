<?php

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('header');

function mir_enqueue_styles() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'mir_enqueue_styles');
