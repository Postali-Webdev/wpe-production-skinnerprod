<?php
/**
 * Custom Case Results Custom Post Type
 *
 * @package Postali Parent
 * @author Postali LLC
 */

function create_custom_post_type_results() {

// set up labels
    $labels = array(
        'name' => 'Results',
        'singular_name' => 'Result',
        'add_new' => 'Add New Case Result',
        'add_new_item' => 'Add New Case Result',
        'edit_item' => 'Edit Results',
        'new_item' => 'New Results',
        'all_items' => 'All Results',
        'view_item' => 'View Results',
        'search_items' => 'Search Case Results',
        'not_found' =>  'No Results Found',
        'not_found_in_trash' => 'No Results found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Case Results',

    );
    //register post type
    register_post_type( 'Results', array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-analytics',
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt' ),  
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'results', 'with_front' => false ), // Allows for /legal-blog/ to be the preface to non pages, but custom posts to have own root
        )
    );

}

// Register Custom Taxonomy
function result_topic() {

	$labels = array(
		'name'                       => _x( 'Results Topic', 'Results Topics' ),
		'singular_name'              => _x( 'Results Topic', 'Results Topic' ),
		'menu_name'                  => __( 'Results Topic' ),
		'all_items'                  => __( 'All Results Topics' ),
		'new_item_name'              => __( 'New Results Topic' ),
		'add_new_item'               => __( 'Add Results Topic' ),
		'edit_item'                  => __( 'Edit Results Topic' ),
		'update_item'                => __( 'Update Results Topic' ),
		'view_item'                  => __( 'View Results Topic' ),
		'separate_items_with_commas' => __( 'Separate Results Topics with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Results Topics' ),
		'popular_items'              => __( 'Popular Results Topics' ),
		'search_items'               => __( 'Search Results Topics' ),
		'not_found'                  => __( 'Not Found'),
		'no_terms'                   => __( 'No Results Topics' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'result_topic', array( 'results' ), $args );

}
add_action( 'init', 'result_topic', 0 );


add_action( 'init', 'create_custom_post_type_results' );