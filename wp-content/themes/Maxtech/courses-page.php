<?php

/*
* Template Name: Courses Display Page
* Template Post Type: courses
*/
get_header();
?>
 	<!--// Main Section \\-->
			<div class="education-main-section">
				<div class="container">
					<div class="row">
						
        <!--// Services \\-->
						<div class="col-md-12">
                          
                            <div class="education-service education-service-grid">
                                <ul class="row">
                                    <?php query_posts("post_type=courses");
                                    while(have_posts()){ the_post();
                                   $img = get_post_meta($post->ID,'course_image',true);
                                    ?>
                                    <li class="col-md-4">
                                        <div class="education-service-grid-wrap">
                                            <i><img src="<?php echo $img; ?>" /></i>
                                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                            <p><?php echo the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="education-readmore-btn">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
                                        </div>
                                    </li>
                                    <?php } wp_reset_query();  ?>
                                    
                                    
                                 
                                  
                                 
                               
                               
                             
                                </ul>
                            </div>
                        </div>
                        <!--// Services \\-->

			
			<!--// Main Section \\-->
                    </div>
                </div>
</div>

<?php 
get_footer();
?>