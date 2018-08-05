<?php function init_ceo_msg_post()
{

            $labels = array(
		'name' => _x('CEO Message','post type general name', 'MyPluginName'),
		'singular_name' => _x('CEO Message','post type singular_name', 'mypluginname'),
		'menu_name' => _x('CEO Message','Admin menu', 'MAXTECH LIBS'),
		'name_admin_bar' => _x('CEO Message','add new on admin bar', 'MAXTECH LIBS'),
		'add_new' => _x('Add New CEO Message','MAXTECH LIBs','MAXTECH LIBS'),
		'add_new_item' => __('Add New CEO Message','MAXTECH LIBS'),
		'new_item' => __('New CEO Message', 'MAXTECH LIBS'),
		'edit_item' => __('Edit CEO Message', 'MAXTECH LIBS'),
		'view_item' => __('View CEO Message', 'MAXTECH LIBS'),
		'all_items' => __('All CEO Messages', 'MAXTECH LIBS'),
		'search_items' => __('Search CEO Messages', 'MAXTECH LIBS'),
		'parent_item_colon'  => __( 'Parent Members:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No CEO Message found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No CEO Message found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'ceomsg', $args );
    add_post_type_support('ceomsg',array('comments'));
    flush_rewrite_rules();

}
?>