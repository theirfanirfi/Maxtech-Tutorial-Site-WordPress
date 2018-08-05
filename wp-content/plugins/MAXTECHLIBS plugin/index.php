<?php 
/*
* Plugin Name: MAXTECHLIBS
*/

//setup

//includes 
include'init.php';
include'admin_init.php';
include'CourseTopicsInit.php';
include'activate.php';
include'proceedCourse.php';
include'proceedMyTopic.php';
//hooks
register_activation_hook(__FILE__,'activate_my_plugin');
add_action('init','init_my_course');
add_action('init','init_course_topics');
add_action('admin_init','init_my_admin');

add_action('save_post_courses','proceedMyCourse',10,3);
add_action('save_post_topics','proceedMyTopic',10,3);
?>