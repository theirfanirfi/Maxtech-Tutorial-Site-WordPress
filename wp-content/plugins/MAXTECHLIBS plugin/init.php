<?php 
function init_my_course()
{
    $labels = array(
		'name' => _x('Courses','post type general name', 'MyPluginName'),
		'singular_name' => _x('Course','post type singular_name', 'mypluginname'),
		'menu_name' => _x('Courses','Admin menu', 'MAXTECH LIBS'),
		'name_admin_bar' => _x('Courses','add new on admin bar', 'MAXTECH LIBS'),
		'add_new' => _x('Add New Course','MAXTECH LIBs','MAXTECH LIBS'),
		'add_new_item' => __('Add New Course','MAXTECH LIBS'),
		'new_item' => __('New Course', 'MAXTECH LIBS'),
		'edit_item' => __('Edit Course', 'MAXTECH LIBS'),
		'view_item' => __('View Course', 'MAXTECH LIBS'),
		'all_items' => __('All Courses', 'MAXTECH LIBS'),
		'search_items' => __('Search Courses', 'MAXTECH LIBS'),
		'parent_item_colon'  => __( 'Parent Course:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Course found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Course found in Trash.', 'your-plugin-textdomain' )
		);
		
		


	$args = array(
		'labels'             => $labels,
		'description'        => __( 'This is plugin', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'trackbacks', 'custom-fields', 'revisions','attachments'),
		'taxonomies'  		 =>	array('category','post_tage')
	);

	register_post_type( 'Courses', $args );
    add_post_type_support('courses',array('comments'));
    flush_rewrite_rules();
}

?>