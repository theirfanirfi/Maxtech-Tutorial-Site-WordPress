<?php 

function init_my_admin()
{
    include'create-topics-metabox.php';
    include'topicoptions.php';
    add_action('add_meta_boxes_topics','create_metaboxes');
}


?>