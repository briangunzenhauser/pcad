<?php 
// Register Webinars
function register_webinars() {
	register_post_type('webinars', array(
		'label' => 'Webinars',
		'menu_icon' => 'dashicons-admin-site',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'query_var' => true,
		'has_archive' => true,
		'supports' => array('title','revisions'),
		'labels' => array (
			'name' => 'Webinars',
			'singular_name' => 'Webinar',
			'menu_name' => 'Webinars',
			'add_new' => 'Add Webinar',
			'add_new_item' => 'Add New Webinar',
			'edit' => 'Edit',
			'edit_item' => 'Edit Webinar',
			'new_item' => 'New Webinar',
			'view' => 'View',
			'view_item' => 'View Webinar',
			'search_items' => 'Search Webinars',
			'not_found' => 'No Webinars Found',
			'not_found_in_trash' => 'No Webinars Found in Trash',
			'parent' => 'Parent Webinar'
		)
	) );

	flush_rewrite_rules( false );
}
add_action('init', 'register_webinars');
?>