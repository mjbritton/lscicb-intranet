<?php
add_action('wp_enqueue_scripts', 'lscicb_enqueue_styles');
function lscicb_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Image sizes for 16:9

add_image_size( '16x9-hd', 1920, 1080, true );
add_image_size( '16x9-4k', 3840, 2160, true );