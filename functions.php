<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles()
{

    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}


function child_blocks()
{
    wp_register_style('child_wp_admin_css', get_stylesheet_directory_uri() . '/css/gutenberg.css', false, '1.0.0');
    wp_enqueue_style('child_wp_admin_css');
}

add_action('admin_enqueue_scripts', 'child_blocks');



/**
 * Load the parent ACF fields
 */

/*add_filter('acf/settings/load_json', 'parent_theme_field_groups');
function parent_theme_field_groups($paths) {
    $path = get_template_directory() . '/acf-json';
    $paths[] = $path;
    return $paths;
}*/








