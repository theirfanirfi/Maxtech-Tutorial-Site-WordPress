<?php 

if(function_exists('register_nav_menus'))
{
    register_nav_menus(
      array('main_nav' => 'topMenu')  
    );
}

//add_action( 'init', 'register_nav_menus' );


?>