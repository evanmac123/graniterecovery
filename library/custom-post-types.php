<?php
/**
 * Set up custom post type for news
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 // Our custom post type function
 function create_posttype() {

  register_post_type( 'news',
  // CPT Options
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'News' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'news'),
    )
  );
 }
 // Hooking up our function to theme setup
 add_action( 'init', 'create_posttype' );


 /*
 * Creating a function to create our CPT
 */

 function custom_post_type() {

  // Set UI labels for Custom Post Type
   $newlabels = array(
     'name'                => _x( 'News', 'Post Type General Name' ),
     'singular_name'       => _x( 'News', 'Post Type Singular Name' ),
     'menu_name'           => __( 'News' ),
     'parent_item_colon'   => __( 'Parent News' ),
     'all_items'           => __( 'All News' ),
     'view_item'           => __( 'View New' ),
     'add_new_item'        => __( 'Add New News Post' ),
     'add_new'             => __( 'Add News' ),
     'edit_item'           => __( 'Edit New' ),
     'update_item'         => __( 'Update News' ),
     'search_items'        => __( 'Search News' ),
     'not_found'           => __( 'Not Found' ),
     'not_found_in_trash'  => __( 'Not found in Trash' ),
   );

  // Set other options for Custom Post Type

   $newargs = array(
     'label'               => __( 'news' ),
     'description'         => __( 'New news' ),
     'labels'              => $newlabels,
     // Features this CPT supports in Post Editor
     'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
     // You can associate this CPT with a taxonomy or custom taxonomy.
     'taxonomies'          => array( 'genres' ),
     /* A hierarchical CPT is like Pages and can have
     * Parent and child items. A non-hierarchical CPT
     * is like Posts.
     */
     'hierarchical'        => false,
     'public'              => true,
     'show_ui'             => true,
     'show_in_menu'        => true,
     'show_in_nav_menus'   => true,
     'show_in_admin_bar'   => true,
     'menu_position'       => 5,
     'can_export'          => true,
     'has_archive'         => true,
     'exclude_from_search' => false,
     'publicly_queryable'  => true,
     'capability_type'     => 'page',
   );

   // Registering your Custom Post Type
   register_post_type( 'news', $newargs );

  }

 /* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */

 add_action( 'init', 'custom_post_type', 0 );
