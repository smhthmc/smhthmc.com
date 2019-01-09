<?php

/*
    ======================================================
        Include Scripts
    ======================================================
*/

function smhthmc_script_enqueue() {
    //css
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/template/css/style.min.css', 'array()', '1.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/template/css/custom.min.css', 'array()', '1.0.0', 'all');

    //js
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/template/js/modernizr.js', 'array()', '1.0.0', false);
    wp_enqueue_script('alljs', get_template_directory_uri() . '/template/js/all.js', 'array()', '1.0.0', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/template/js/custom.js', 'array()', '1.0.0', true);
}

add_action('wp_enqueue_scripts','smhthmc_script_enqueue');

/*
    ======================================================
        Activate Menus
    ======================================================
*/

function smhthmc_theme_setup() {

    add_theme_support('menus');
    

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Secondary Header Navigation');

}

add_action('init','smhthmc_theme_setup');

/*
    ======================================================
        Theme Support
    ======================================================
*/

//add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats',array('aside','image','video'));

/*
    ======================================================
        Sidebar Function
    ======================================================
*/

function smhthmc_widget_setup() {
 
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'smhthmc' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'smhthmc' ),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>' 
    ) );
 
}
add_action( 'widgets_init', 'smhthmc_widget_setup' );

/*
    ======================================================
        Adding Logo
    ======================================================
*/
function smhthmc_custom_logo_setup() {
    $defaults = array(
        'height'      => 80,
        'width'       => 102,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'smhthmc_custom_logo_setup' );

/*
    ======================================================
       Custom Post Types
    ======================================================
*/

function smhthmc_custom_post_type() {
    //Courses
    $labels_course = array(
        'name' =>'Courses',
        'singular-name' =>'Single Course',
        'add_new' => 'Add New Course',
        'all_items' => 'All Courses',
        'add_new_items' => 'All Course',
        'edit_item' => 'Edit Course',
        'new_item' => 'New Course',
        'view_item' => 'View Course',
        'not_found' => 'No course found.',
        'not_found_in_trash' => 'No item found in trash',
        'parent_item_colon' => 'Parent Item'
    );

    $args_course = array(
        'labels' => $labels_course,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revision'
        ),
        /* 'taxonomies' => array(
            'category',
            'post_tag'
        ), */
        'menu_position' => 5,
        'exclude_from_search' => false
    );

    register_post_type('egitimler',$args_course);

    //Tutorials
    $labels_tuts = array(
        'name' =>'Tutorials',
        'singular-name' =>'Single Tutorial',
        'add_new' => 'Add New Tutorial',
        'all_items' => 'All Tutorials',
        'add_new_items' => 'All Tutorial',
        'edit_item' => 'Edit Tutorial',
        'new_item' => 'New Tutorial',
        'view_item' => 'View Tutorial',
        'not_found' => 'No course found.',
        'not_found_in_trash' => 'No item found in trash',
        'parent_item_colon' => 'Parent Item'
    );

    $args_tuts = array(
        'labels' => $labels_tuts,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revision'
        ),
        /* 'taxonomies' => array(
            'category',
            'post_tag'
        ), */
        'menu_position' => 4,
        'exclude_from_search' => false
    );

    register_post_type('uygulamalar',$args_tuts);

    $labels_tips = array(
        'name' =>'Tips',
        'singular-name' =>'Single Tips',
        'add_new' => 'Add New Tip',
        'all_items' => 'All Tips',
        'add_new_items' => 'All Tip',
        'edit_item' => 'Edit Tip',
        'new_item' => 'New Tip',
        'view_item' => 'View Tip',
        'not_found' => 'No course found.',
        'not_found_in_trash' => 'No item found in trash',
        'parent_item_colon' => 'Parent Item'
    );

    $args_tips = array(
        'labels' => $labels_tips,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revision'
        ),
         /* 'taxonomies' => array(
            'category',
            'post_tag' 
        ), */
        'menu_position' => 5,
        'exclude_from_search' => false
    );

    register_post_type('ipuclari',$args_tips);
}

add_action( 'init', 'smhthmc_custom_post_type' );

/*
    ======================================================
       Custom Taxonomies
    ======================================================
*/
function smhthmc_custom_taxonomies() {
    $labels_course = array(
        'name' => 'Course Cats',
        'singular_name' => 'Course Cat' ,
        'search_items' => 'Search Course Cats',
        'all_items' => 'All Course Cats',
        'parent_item' => 'Parent Course Cat' ,
        'parent_item_colon' => 'Parent Course Cat: ',
        'edit_item' => 'Edit Course Cat' ,
        'update_item' => 'Update Course Cat' ,
        'add_new_item' => 'Add New Course Cat' ,
        'new_itemn_name' => 'New Course Cat  Name',
        'menu_name' => 'Course Cat' ,
    );

    $args_course = array(
        'hierarchical' => true,
        'labels' => $labels_course,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'course-cat'
        )
    );

    register_taxonomy('course-cat', array('egitimler'), $args_course);

    //Tutorials

    $labels_tuts = array(
        'name' => 'Tutorial Cats',
        'singular_name' => 'Tutorial Cat' ,
        'search_items' => 'Search Tutorial Cats',
        'all_items' => 'All Tutorial Cats',
        'parent_item' => 'Parent Tutorial Cat' ,
        'parent_item_colon' => 'Parent Tutorial Cat: ',
        'edit_item' => 'Edit Tutorial Cat' ,
        'update_item' => 'Update Tutorial Cat' ,
        'add_new_item' => 'Add New Tutorial Cat' ,
        'new_itemn_name' => 'New Tutorial Cat  Name',
        'menu_name' => 'Tutorial Cat' ,
    );

    $args_tuts = array(
        'hierarchical' => true,
        'labels' => $labels_tuts,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'tutorial-cat'
        )
    );

    register_taxonomy('tutorial-cat', array('uygulamalar'), $args_tuts);

    //Tutorials

    $labels_tips = array(
        'name' => 'Tip Cats',
        'singular_name' => 'Tip Cat' ,
        'search_items' => 'Search Tip Cats',
        'all_items' => 'All Tip Cats',
        'parent_item' => 'Parent Tip Cat' ,
        'parent_item_colon' => 'Parent Tip Cat: ',
        'edit_item' => 'Edit Tip Cat' ,
        'update_item' => 'Update Tip Cat' ,
        'add_new_item' => 'Add New Tip Cat' ,
        'new_itemn_name' => 'New Tip Cat  Name',
        'menu_name' => 'Tip Cat' ,
    );

    $args_tips = array(
        'hierarchical' => true,
        'labels' => $labels_tips,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'tips-cat'
        )
    );

    register_taxonomy('tips-cat', array('ipuclari'), $args_tips);
}

add_action( 'init', 'smhthmc_custom_taxonomies' );


/*
    ======================================================
       Including SShortcodes
    ======================================================
*/

require get_template_directory() . "/template/include/shortcodes.php";
/*
    ======================================================
       Including Meta Box To Courses for table of contents
    ======================================================
*/

require_once( get_stylesheet_directory() . '/template/include/meta_toc.php' );

/*
    ======================================================
       Second Featured Image
    ======================================================
*/

add_filter( 'kdmfi_featured_images', function( $featured_images ) {
    $args = array(
      'id' => 'featured-image-2',
      'desc' => 'Your description here.',
      'label_name' => 'Featured Image 2',
      'label_set' => 'Set featured image 2',
      'label_remove' => 'Remove featured image 2',
      'label_use' => 'Set featured image 2',
      'post_type' => array( 'page' ),
    );
  
    $featured_images[] = $args;
  
    return $featured_images;
  });


/*
    ======================================================
       TOC shortcodes button TINYMCE
    ======================================================
*/

/* function register_button( $buttons ) {
    array_push( $buttons, "|", "recentposts" );
    return $buttons;
 }

 function add_plugin( $plugin_array ) {
    $plugin_array['recentposts'] = get_template_directory_uri() . '/template/js/dev/libs/plugins/toc.js';
    return $plugin_array;
 }

 function my_recent_posts_button() {

    if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
       return;
    }
 
    if ( get_user_option('rich_editing') == 'true' ) {
       add_filter( 'mce_external_plugins', 'add_plugin' );
       add_filter( 'mce_buttons', 'register_button' );
    }
 
 }

 add_action('init', 'my_recent_posts_button'); */


/*
    ======================================================
       Removing width and height value of images on post.
    ======================================================
*/

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}