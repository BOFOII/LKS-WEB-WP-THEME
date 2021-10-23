<?php

//load script
function load_file()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script(
    'script',
    get_template_directory_uri() . '/assets/js/script.js',
    array( 'sc' ),
    wp_get_theme()->get( 'Version' ),
    true
  );
}

add_action('wp_enqueue_scripts', 'load_file');
// end load script

// reigster navmenu
register_nav_menu('main_menu', 'Main_menu');

// the excerpt
function excerpt_set_length() {
  return 10;
}

function excerpt_set_more() {
  return '...';
}

add_filter( 'excerpt_more', 'excerpt_set_more');
add_filter( 'excerpt_set_length', 'excerpt_set_lengt');
// end excerpt

