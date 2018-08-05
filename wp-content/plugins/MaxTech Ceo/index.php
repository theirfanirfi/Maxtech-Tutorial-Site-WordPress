<?php 
/*
* Plugin Name: CEO MESSAGE
* version: 1.0
*/
//setup_postdata()

//includes_url()
include'activate.php';
include'init.php';
//hooks
register_activation_hook(__FILE__,'register_ceo_msg_plugin');
add_action('init','init_ceo_msg_post');
?>