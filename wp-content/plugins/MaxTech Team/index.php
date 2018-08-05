<?php
/*
* Plugin Name: MaxTech Team
* Description: This plugin will add the Maxteach Team members
* Version: 1.0
*/

//setup 


//includes
include'activate.php';
include'init.php';
//hooks
register_activation_hook(__FILE__,'register_maxtech_team_plugin');
add_action('init','init_maxtech_team_post');
?>