<?php 
/**
 * Custom post type.
 *
 */

function giving_portfolio_register_custom_post_type() {
    $labels = array(
        'name'                => _x( 'Portfolio', 'Post Type General Name', 'giving-theme' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'giving-theme' ),
        'menu_name'           => __( 'Portfolio', 'giving-theme' ),
        'parent_item_colon'   => __( 'Parent Portfolio', 'giving-theme' ),
        'all_items'           => __( 'All Portfolio', 'giving-theme' ),
        'view_item'           => __( 'View Portfolio', 'giving-theme' ),
        'add_new_item'        => __( 'Add New Portfolio', 'giving-theme' ),
        'add_new'             => __( 'Add New', 'giving-theme' ),
        'edit_item'           => __( 'Edit Portfolio', 'giving-theme' ),
        'update_item'         => __( 'Update Portfolio', 'giving-theme' ),
        'search_items'        => __( 'Search Portfolio', 'giving-theme' ),
        'not_found'           => __( 'Not Found', 'giving-theme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'giving-theme' ),
    );

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-portfolio',
        'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'thumbnail', 'excerpt', 'editor', 'page-attributes')
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init',  'giving_portfolio_register_custom_post_type' );