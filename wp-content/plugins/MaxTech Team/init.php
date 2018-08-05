<?php 
function init_maxtech_team_post()
{
        $labels = array(
		'name' => _x('Our Team','post type general name', 'MyPluginName'),
		'singular_name' => _x('Our Team','post type singular_name', 'mypluginname'),
		'menu_name' => _x('Our Team','Admin menu', 'MAXTECH LIBS'),
		'name_admin_bar' => _x('Our Team','add new on admin bar', 'MAXTECH LIBS'),
		'add_new' => _x('Add New Team member','MAXTECH LIBs','MAXTECH LIBS'),
		'add_new_item' => __('Add New Team member','MAXTECH LIBS'),
		'new_item' => __('New Team member', 'MAXTECH LIBS'),
		'edit_item' => __('Edit Team member', 'MAXTECH LIBS'),
		'view_item' => __('View Team member', 'MAXTECH LIBS'),
		'all_items' => __('All Team members', 'MAXTECH LIBS'),
		'search_items' => __('Search Team members', 'MAXTECH LIBS'),
		'parent_item_colon'  => __( 'Parent Members:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Team member found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Team member found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'team', $args );
    add_post_type_support('team',array('comments'));
    flush_rewrite_rules();
}


?>