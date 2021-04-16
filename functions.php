<?php 
/** including css, js files */
function load_stylesheets(){
    wp_register_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery(){
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/jquery.min.js', '', 1, true );
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs(){
    wp_register_script( 'customjs', get_template_directory_uri().'/assets/js/scripts.js', '', 1, true );
    wp_enqueue_script( 'customjs' );
}
add_action('wp_enqueue_scripts', 'loadjs' );

//============================== Widget - sidebar ==================================//
//Make sure to change the name of the function (in this case it is “Name of Widgetized Area”) so that it matches the name you gave it in page.php.
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Name of Widgetized Area',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

/**********************/

// add menu 
add_theme_support('menus');
register_nav_menus( 
    array(
        'top-menu'=>__('Top Menu', 'theme'),
        'footer-menu'=>__('Footer Menu', 'theme'),
    )  
);

// post thumbnails -- admin sidebar
add_theme_support('post-thumbnails');

// thumbnail image
add_image_size( 'smallest', 300, 300, true);  // crop = true
add_image_size( 'largest', 800, 800, true);  // crop = true

