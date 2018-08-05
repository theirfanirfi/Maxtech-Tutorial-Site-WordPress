<?php 

function create_metaboxes()
{
    add_meta_box(
        'm_options_mb',
        __('Add Topic to Course','MAXTECH LIBS'),
        'm_options_mb',
        'topics',
        'normal',
        'high'
        
    );
}

?>