<?php 
function init_course_topics()
{
    $labels = array(
		'name' => _x('Topics','post type general name', 'MyPluginName'),
		'singular_name' => _x('Topic','post type singular_name', 'mypluginname'),
		'menu_name' => _x('Topics','Admin menu', 'MAXTECH LIBS'),
		'name_admin_bar' => _x('Topics','add new on admin bar', 'MAXTECH LIBS'),
		'add_new' => _x('Add New Topic','MAXTECH LIBs','MAXTECH LIBS'),
		'add_new_item' => __('Add New Topic','MAXTECH LIBS'),
		'new_item' => __('New Topic', 'MAXTECH LIBS'),
		'edit_item' => __('Edit Topic', 'MAXTECH LIBS'),
		'view_item' => __('View Topic', 'MAXTECH LIBS'),
		'all_items' => __('All Topics', 'MAXTECH LIBS'),
		'search_items' => __('Search Topics', 'MAXTECH LIBS'),
		'parent_item_colon'  => __( 'Parent Topic:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Topic found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Topic found in Trash.', 'your-plugin-textdomain' )
		);
		
		


	$args = array(
		'labels'             => $labels,
		'description'        => __( 'This is plugin', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Course' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies'  		 =>	array('category','post_tage')
	);

	register_post_type( 'Topics', $args );
    flush_rewrite_rules();
}

?>