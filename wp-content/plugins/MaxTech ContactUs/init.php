<?php 
function init_my_contact_us_post()
{
            $labels = array(
		'name' => _x('Contact Us','post type general name', 'MyPluginName'),
		'singular_name' => _x('Contact Us','post type singular_name', 'mypluginname'),
		'menu_name' => _x('Contact Us','Admin menu', 'MAXTECH LIBS'),
		'name_admin_bar' => _x('Contact Us','add new on admin bar', 'MAXTECH LIBS'),
		'add_new' => _x('Add New Contact','MAXTECH LIBs','MAXTECH LIBS'),
		'add_new_item' => __('Add New Contact','MAXTECH LIBS'),
		'new_item' => __('New Contact', 'MAXTECH LIBS'),
		'edit_item' => __('Edit Contact', 'MAXTECH LIBS'),
		'view_item' => __('View Contact', 'MAXTECH LIBS'),
		'all_items' => __('All Contacts', 'MAXTECH LIBS'),
		'search_items' => __('Search Contacts', 'MAXTECH LIBS'),
		'parent_item_colon'  => __( 'Parent Contact:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Contact found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Contact found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'contacts', $args );
    add_post_type_support('contacts',array('comments'));
    flush_rewrite_rules();
}


?>