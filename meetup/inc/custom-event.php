<?php
// Register Custom Post Type Event
function create_event_cpt() {

	$labels = array(
		'name' => _x( 'Event', 'Post Type General Name', 'meetup' ),
		'singular_name' => _x( 'Event', 'Post Type Singular Name', 'meetup' ),
		'menu_name' => _x( 'Event', 'Admin Menu text', 'meetup' ),
		'name_admin_bar' => _x( 'Event', 'Add New on Toolbar', 'meetup' ),
		'archives' => __( 'Event Archives', 'meetup' ),
		'attributes' => __( 'Event Attributes', 'meetup' ),
		'parent_item_colon' => __( 'Parent Event:', 'meetup' ),
		'all_items' => __( 'All Event', 'meetup' ),
		'add_new_item' => __( 'Add New Event', 'meetup' ),
		'add_new' => __( 'Add New', 'meetup' ),
		'new_item' => __( 'New Event', 'meetup' ),
		'edit_item' => __( 'Edit Event', 'meetup' ),
		'update_item' => __( 'Update Event', 'meetup' ),
		'view_item' => __( 'View Event', 'meetup' ),
		'view_items' => __( 'View Event', 'meetup' ),
		'search_items' => __( 'Search Event', 'meetup' ),
		'not_found' => __( 'Not found', 'meetup' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'meetup' ),
		'featured_image' => __( 'Featured Image', 'meetup' ),
		'set_featured_image' => __( 'Set featured image', 'meetup' ),
		'remove_featured_image' => __( 'Remove featured image', 'meetup' ),
		'use_featured_image' => __( 'Use as featured image', 'meetup' ),
		'insert_into_item' => __( 'Insert into Event', 'meetup' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'meetup' ),
		'items_list' => __( 'Event list', 'meetup' ),
		'items_list_navigation' => __( 'Event list navigation', 'meetup' ),
		'filter_items_list' => __( 'Filter Event list', 'meetup' ),
	);
	$args = array(
		'label' => __( 'Event', 'meetup' ),
		'description' => __( '', 'meetup' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-insertmore',
		'supports' => array('title', 'editor', 'revisions'),
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
	register_post_type( 'event', $args );

}
add_action( 'init', 'create_event_cpt', 0 );
