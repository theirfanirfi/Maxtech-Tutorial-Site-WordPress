<?php

function activate_contactus_plugin(){
    if(version_compare(get_bloginfo('version'),'4.2','<'))
    {
        wp_die(__("Upgrade Your Wordpress"));
    }
}

?>