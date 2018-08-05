<?php 
function proceedMyTopic($post_id,$post,$update)
{
    if(!$update)
    {
        return;
    }
    
    $course = array();
    $course['course_id'] = sanitize_text_field($_POST['course_id']);
    update_post_meta($post_id,'course',$course);
//    echo $course['course_id'];
//    exit();
}

?>