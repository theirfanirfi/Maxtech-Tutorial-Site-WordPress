<?php 
function register_maxtech_team_plugin()
{
    if(version_compare(get_bloginfo('version'),'4.2','<'))
    {
        wp_die(__("Upgrade your wordpress"));
    }
}
?>