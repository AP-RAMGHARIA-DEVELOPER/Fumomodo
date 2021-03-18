<?php

/**
 * Custom Post types
 */

function ecomercetheme_init() {
    $labels = array(
        'name'                  => _x( 'materials', 'Post type general name', 'ecomercetheme' ),
        'singular_name'         => _x( 'material', 'Post type singular name', 'ecomercetheme' ),
        'menu_name'             => _x( 'materials', 'Admin Menu text', 'ecomercetheme' ),
        'name_admin_bar'        => _x( 'material', 'Add New on Toolbar', 'ecomercetheme' ),
        'add_new'               => __( 'Add New', 'recipe' ),
        'add_new_item'          => __( 'Add New material', 'ecomercetheme' ),
        'new_item'              => __( 'New material', 'ecomercetheme' ),
        'edit_item'             => __( 'Edit material', 'ecomercetheme' ),
        'view_item'             => __( 'View material', 'ecomercetheme' ),
        'all_items'             => __( 'All materials', 'ecomercetheme' ),
        'search_items'          => __( 'Search materials', 'ecomercetheme' ),
        'parent_item_colon'     => __( 'Parent materials:', 'ecomercetheme' ),
        'not_found'             => __( 'No materials found.', 'ecomercetheme' ),
        'not_found_in_trash'    => __( 'No materials found in Trash.', 'ecomercetheme' ),
        'featured_image'        => _x( 'material Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ecomercetheme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ecomercetheme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ecomercetheme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ecomercetheme' ),
        'archives'              => _x( 'material archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ecomercetheme' ),
        'insert_into_item'      => _x( 'Insert into material', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ecomercetheme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this material', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ecomercetheme' ),
        'filter_items_list'     => _x( 'Filter materials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ecomercetheme' ),
        'items_list_navigation' => _x( 'materials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ecomercetheme' ),
        'items_list'            => _x( 'materials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ecomercetheme' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'material' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true,
    );
      
    register_post_type( 'ecomercetheme_material', $args );
}
add_action( 'init', 'ecomercetheme_init' );