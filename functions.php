<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . './build/css/main.min.css', false,'1.1','all');
   wp_enqueue_style('first');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_js() 
{
  wp_register_script('Bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', 'jquery', false, true );
  wp_register_script('jquery-1', 'https://code.jquery.com/jquery-3.6.0.js', 'jquery', false, true );
  wp_register_script('jquery-2', 'https://code.jquery.com/ui/1.13.1/jquery-ui.js', 'jquery', false, true );
  wp_register_script('jquery-3', 'Scripts/jquery-2.1.1.min.js', 'jquery', false, true );
  wp_register_script('jquery-4', 'Scripts/bootstrap.min.js', 'jquery', false, true );
wp_register_script('my_script', get_template_directory_uri() . '/build/js/script.min.js', 'jquery', false, true);


  wp_enqueue_script('Bootstrap-js');
  wp_enqueue_script('jquery-1');
  wp_enqueue_script('jquery-2');
  wp_enqueue_script('jquery-3');
  wp_enqueue_script('jquery-4');
wp_enqueue_script('my_script');
}
add_action('wp_enqueue_scripts', 'add_js');


function add_class_support($classes,$item,$args){
  if (isset($args->li_class)){
        $classes[] = $args->li_class;
  }
  if (isset($args->active_class) && in_array('current_menu_item', $classes)) {
      $classes[] = $args->active_class;
  }
  return $classes;
}
add_filter( 'nav_menu_css_class', 'add_class_support', 10, 3 );
function add_anchor_class($attr,$item,$args){
  if (isset($args->a_class)) {
        $attr['class'] = $args->a_class;
  }
    return $attr;
}
add_filter( 'nav_menu_link_attributes', 'add_anchor_class', 10, 3 );

add_theme_support('menus');

register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
  )
  );

function resturent_footer_widget(){
register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'address' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'address' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'Link_list' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'Page-Links', 'Link_list' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
  register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'Service_Link_list' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'Service-Link', 'Service_Link_list' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
  register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'Subscribe_Link' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'Subscribe', 'Subscribe_Link' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
  register_sidebar( array(
      'name' => __( 'Fifth Footer Widget Area', 'Subscribe_Link' ),
      'id' => 'fifth-footer-widget-area',
      'description' => __( 'Subscribe', 'Subscribe_Link' ),
      'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'resturent_footer_widget' );



add_theme_support('post-thumbnails');

add_action( 'init', 'custom_post_type_func' );

function custom_post_type_func() {

    //posttypename = places
$supports = array( 
'title', // post title
'editor', // post content
'excerpt', // post excerpt
'author', // post author
'thumbnail', // featured images
'trackbacks', 
'custom-fields', // custom fields
'comments',  // post comments
'revisions', // post revisions
'page-attributes', 
'post-formats', // post formats 
);

$labels = array(
'name' => _x( 'Places', 'places' ),
'singular_name' => _x( 'Places', 'places' ),
'menu_name' => _x( 'Places', 'places' ),
'name_admin_bar' => _x('places', 'admin bar'),
'add_new' => _x( 'Add New', 'place' ),
'add_new_item' => _x( 'Add New places', 'places' ),
'edit_item' => _x( 'Edit places', 'places' ),
'new_item' => _x( 'New places', 'places' ),
'view_item' => _x( 'View places', 'places' ),
'all_items' => __('All places', 'places'),
'search_items' => _x( 'Search places', 'places' ),
'not_found' => _x( 'No places found', 'places' ),
'not_found_in_trash' => _x( 'No places found in Trash', 'places' ),
'parent_item_colon' => _x( 'Parent places:', 'places' ),

);

$args = array(
'labels' => $labels,
'supports' => $supports,
'hierarchical' => true,
'description' => 'Hi, this is my custom post type.',
'taxonomies' => array( 'category', 'post_tag' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'can_export' => true,
'capability_type' => 'post',
'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'places'),
'has_archive' => true,
'hierarchical' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'rewrite' => true,
'menu_position' => 6,
'menu_icon' => 'dashicons-megaphone',
);
register_post_type( 'places', $args );
}