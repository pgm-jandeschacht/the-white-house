<?php 

/*
Plugin Name: Custom Post Types
*/

function register_president_post_type() {
    register_post_type( 'president', [
        'label'  => esc_html__( 'Presidents', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Presidents', 'presidential' ),
			'name_admin_bar'     => esc_html__( 'President', 'presidential' ),
			'add_new'            => esc_html__( 'Add President', 'presidential' ),
			'add_new_item'       => esc_html__( 'Add new President', 'presidential' ),
			'new_item'           => esc_html__( 'New President', 'presidential' ),
			'edit_item'          => esc_html__( 'Edit President', 'presidential' ),
			'view_item'          => esc_html__( 'View President', 'presidential' ),
			'update_item'        => esc_html__( 'View President', 'presidential' ),
			'all_items'          => esc_html__( 'All Presidents', 'presidential' ),
			'search_items'       => esc_html__( 'Search Presidents', 'presidential' ),
			'parent_item_colon'  => esc_html__( 'Parent President', 'presidential' ),
			'not_found'          => esc_html__( 'No Presidents found', 'presidential' ),
			'not_found_in_trash' => esc_html__( 'No Presidents found in Trash', 'presidential' ),
			'name'               => esc_html__( 'Presidents', 'presidential' ),
			'singular_name'      => esc_html__( 'President', 'presidential' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => 'about-the-white-house/presidents',
        'rewrite'             => array( 'slug' => 'about-the-white-house/presidents'),
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-businessman',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
	]);
}

add_action( 'init', 'register_president_post_type' );