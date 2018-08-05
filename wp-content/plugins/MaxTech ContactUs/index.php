<?php
/*
* Plugin Name: MaxTech Contact Us
*
*/
//setup_postdata()


//includes_url()
include'activate.php';
include'init.php';

//hooks
register_activation_hook(__FILE__,'activate_contactus_plugin');
add_action('init','init_my_contact_us_post');

?>