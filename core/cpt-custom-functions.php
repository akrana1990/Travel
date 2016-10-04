<?php
// Register custom post type for Tour Packages

add_action( 'init', 'codex_package_init' );

function codex_package_init() {
    $labels = array(
        'name'               => _x( 'Packages', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Package', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Packages', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Package', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'package', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Package', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Package', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Package', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Package', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Packages', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Packages', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Packages:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No packages found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No packages found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'package' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields' ),
        'taxonomies' 		 => array('post_tag')
    );

    register_post_type( 'package', $args );

    $tax_args = array(
        'public' => true,
        'hierarchical' => true,
        'label' => 'Package Category',
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'packages'),
    );

    register_taxonomy('package_category', array('package'), $tax_args);
}



// Register custom post type for locations

add_action( 'init', 'codex_location_init' );

function codex_location_init() {
    $labels = array(
        'name'               => _x( 'Locations', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Location', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Locations', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Location', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'location', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Location', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Location', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Location', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Location', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Locations', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Locations', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Locations:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No locations found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No locations found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'locations' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields' ),
        'taxonomies' 		 => array('post_tag')
    );

    register_post_type( 'location', $args );

    $tax_args = array(
        'public' => true,
        'hierarchical' => true,
        'label' => 'Package Category',
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'places'),
    );

    register_taxonomy('location_category', array('location'), $tax_args);
}


// Register custom post type for Testimonial

add_action( 'init', 'codex_testimonial_init' );

function codex_testimonial_init() {
    $labels = array(
        'name'               => _x( 'Testimonials', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Testimonial', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Testimonials', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'testimonial', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Testimonial By', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Testimonial', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Testimonial', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Testimonial', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Testimonials', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Testimonials', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Testimonials:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No testimonials found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No testimonials found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),

    );

    register_post_type( 'testimonial', $args );
}