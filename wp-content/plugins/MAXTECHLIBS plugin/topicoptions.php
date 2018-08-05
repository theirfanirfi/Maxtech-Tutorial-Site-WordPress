<?php 
function m_options_mb($post)
{ 
$course = get_post_meta($post->ID,'course',true);
 if(empty($course))
 {
     $course = array(
         'course_id' => ''
     );
 }
?>

<?php 
 if(!empty($course)){
     echo "<h4 style='color:red;'>Added to Course</h4>";
 global $wpdb;
 	$sql = "SELECT * FROM wp_posts WHERE ID = {$course['course_id']}";
$query = $wpdb->get_results($sql,OBJECT);	

foreach($query as $q)
{
	echo $q->post_title;
}
 }
while(have_posts())
{
    the_post();
    the_title();
}
?>
<h4> <?php if(!empty($course)){ echo "Change Course:"; } else { echo "Select Course: "; } ?> </h4>
<select name="course_id" style="height:30px;width:400px;opacity:0.8;">
    <?php query_posts("post_type=courses");
    while(have_posts())
    {  the_post(); ?>
        <option value="<?php the_ID(); ?>" <?php echo $course['course_id'] == the_ID() ? 'selected' : "";  ?>><?php the_title(); ?></option>
    <?php }
    ?>
    
</select>
<br/>
<br/>


<?php }
?>