<?php 

/* 
 * 
 * Custom Post Types
 *
 */

// Note that you only need the arguments and register_post_type function here. They are hooked into WordPress in functions.php.

$labels = array(
		'name'                => _x( 'advertisment', 'Post Type General Name', 'ctl' ),
		'singular_name'       => _x( 'advertisment', 'Post Type Singular Name', 'ctl' ),
		'menu_name'           => __( 'advertisment', 'ctl' ),
		'name_admin_bar'      => __( 'advertisment', 'ctl' ),
		'parent_item_colon'   => __( 'Parent advertisment:', 'ctl' ),
		'all_items'           => __( 'All advertisment', 'ctl' ),
		'add_new_item'        => __( 'Add New advertisment', 'ctl' ),
		'add_new'             => __( 'Add New', 'ctl' ),
		'new_item'            => __( 'New advertisment', 'ctl' ),
		'edit_item'           => __( 'Edit advertisment', 'ctl' ),
		'update_item'         => __( 'Update advertisment', 'ctl' ),
		'view_item'           => __( 'View advertisment', 'ctl' ),
		'search_items'        => __( 'Search advertisment', 'ctl' ),
		'not_found'           => __( 'Not found', 'ctl' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'ctl' ),
	);
	$args = array(
		'label'               => __( 'advertisment', 'ctl' ),
		'description'         => __( 'new ad', 'ctl' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-megaphone',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'advertisment', $args );





	