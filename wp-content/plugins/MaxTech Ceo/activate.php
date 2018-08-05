<?php 
function register_ceo_msg_plugin()
{
    if(version_compare(get_bloginfo('version'),'4.2','<'))
    {
        wp_die("Upgrade your wordpress");
    }
}


?>