<?php
// Register Custom Post Type Speaker
function create_speaker_cpt() {

	$labels = array(
		'name' => _x( 'Speaker', 'Post Type General Name', 'meetup' ),
		'singular_name' => _x( 'Speaker', 'Post Type Singular Name', 'meetup' ),
		'menu_name' => _x( 'Speaker', 'Admin Menu text', 'meetup' ),
		'name_admin_bar' => _x( 'Speaker', 'Add New on Toolbar', 'meetup' ),
		'archives' => __( 'Speaker Archives', 'meetup' ),
		'attributes' => __( 'Speaker Attributes', 'meetup' ),
		'parent_item_colon' => __( 'Parent Speaker:', 'meetup' ),
		'all_items' => __( 'All Speaker', 'meetup' ),
		'add_new_item' => __( 'Add New Speaker', 'meetup' ),
		'add_new' => __( 'Add New', 'meetup' ),
		'new_item' => __( 'New Speaker', 'meetup' ),
		'edit_item' => __( 'Edit Speaker', 'meetup' ),
		'update_item' => __( 'Update Speaker', 'meetup' ),
		'view_item' => __( 'View Speaker', 'meetup' ),
		'view_items' => __( 'View Speaker', 'meetup' ),
		'search_items' => __( 'Search Speaker', 'meetup' ),
		'not_found' => __( 'Not found', 'meetup' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'meetup' ),
		'featured_image' => __( 'Speaker Image', 'meetup' ),
		'set_featured_image' => __( 'Set speaker image', 'meetup' ),
		'remove_featured_image' => __( 'Remove speaker image', 'meetup' ),
		'use_featured_image' => __( 'Use as speaker image', 'meetup' ),
		'insert_into_item' => __( 'Insert into Speaker', 'meetup' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Speaker', 'meetup' ),
		'items_list' => __( 'Speaker list', 'meetup' ),
		'items_list_navigation' => __( 'Speaker list navigation', 'meetup' ),
		'filter_items_list' => __( 'Filter Speaker list', 'meetup' ),
	);
	$args = array(
		'label' => __( 'Speaker', 'meetup' ),
		'description' => __( '', 'meetup' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-controls-volumeon',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'speaker', $args );

}
add_action( 'init', 'create_speaker_cpt', 0 );