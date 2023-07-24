<?php

// Custom Post types & Taxonomies here

function cptui_register_my_cpts() {

	/**
	 * Post Type: Blog.
	 */

	$labels = [
		"name" => __( "Blog", "custom-post-type-ui" ),
		"singular_name" => __( "Blog", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Blog", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "blog", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-aside",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "category", "post_tag" ],
	];

	register_post_type( "blog", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
