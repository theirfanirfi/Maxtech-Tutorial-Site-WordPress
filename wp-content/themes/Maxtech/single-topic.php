<?php 
/*
* Template Name: topic
* Template Post Type: topics
*/

?>

<?php get_header();
the_post();
//$COURSE_POST_ID  =  $post->ID;
$COURSE     =   get_post_meta($post->ID,'course',true);
$COURSE_POST_ID = $COURSE['course_id'];
$CURRENT_POST_ID = $post->ID;
?>


		<!--// Main Content \\-->
		<div class="education-main-content">

			<!--// Main Section \\-->
			<div class="education-main-section">
				<div class="container">
					<div class="row">
						
						<div class="col-md-9">
                              <!--<figure class="education-course-thumb"><img src="<?php bloginfo('template_url'); ?>/images/course-thumb-img.jpg" alt="">
                              <figcaption style="box-shadow:none;" > -->
                                    <h1 style="margin-left:20px;"><?php the_title(); ?></h1>
                                 
                                <!-- </figcaption>
                            </figure>-->
                         
                            <div class="education-rich-editor">
                                <p><?php the_content();  wp_reset_query(); ?></p>
                         
                            </div>
                         
                                          <?php //comments_template(); ?>

                         <div class="education-section-heading"><h2>Next Topics</h2></div>
                            <div class="education-course-features">
                                <ul class="education-course-detail-option">
                                <?php
                                global $wpdb;
                                $prefix = $wpdb->prefix; 
                                $table = $prefix."posts";
                                $sqlG = "SELECT * FROM ".$table. " WHERE post_type = 'topics' AND ID > ".$CURRENT_POST_ID." ORDER BY ID ASC LIMIT 1";
                                $Gtopics = $wpdb->get_results($sqlG);
                                global $post;
                                foreach($Gtopics as $post)
                                {
                                    
                                    setup_postdata($post);
                                    
                                $belongtocourse  = get_post_meta($post->ID,'course',true);
                                if($COURSE_POST_ID == $belongtocourse['course_id'] && $post->ID != $CURRENT_POST_ID) { ?>
                                  
                                     <li style="float:right;">
                                       
                                        <h6><a href="<?php the_permalink(); ?>">Next Topic</a></h6>
                                        <!-- <span>Self</span> -->
                                    </li>
                              <?php  }
                                   
                                    //echo $topic->post_title;
                                }
                                
                               
                                
                                  $sqlL = "SELECT * FROM ".$table. " WHERE post_type = 'topics' AND ID < ".$CURRENT_POST_ID." ORDER BY ID DESC LIMIT 1";
                                $Ltopics = $wpdb->get_results($sqlL);
                                global $post;
                                if(!empty($Ltopics)){
                                foreach($Ltopics as $post)
                                {
                                    
                                    setup_postdata($post);
                                    
                                $belongtocourse  = get_post_meta($post->ID,'course',true);
                                    if(!empty($belongtocourse)){
                                if($COURSE_POST_ID == $belongtocourse['course_id'] && $post->ID != $CURRENT_POST_ID) { ?>
                                    
                                     <li style="float:left;">
                                       
                                        <h6><a href="<?php the_permalink(); ?>">Previous Topic</a></h6>
                                        <!-- <span>Self</span> -->
                                    </li>
                                
                               <?php }
                                    }
                                   
                                    //echo $topic->post_title;
                                }
                                }
                                
                                
                                ?>
                                    </ul>
                           
                                
                            </div>
                 
                      
                
                        </div>
                    <?php //get_sidebar(); ?>
                        
                        
                        <!--// SideBaar \\-->
                        <aside class="col-md-3 education-sidebar">

                            <!--// Widget Search \\-->
                            <?php get_search_form(); ?>
                           <!-- <div class="widget widget_search">
                                <form>
                                    <input type="text" value="Search" onblur="if(this.value == '') { this.value ='Search'; }" onfocus="if(this.value =='Search') { this.value = ''; }">
                                    <label>
                                        <input type="submit" value="">
                                    </label>
                                </form>
                            </div> -->
                            <!--// Widget Search \\-->

                      
                             <div class="education-section-heading"><h2>Course Topics</h2></div>
                            <div class="education-course-features">
                                <ul class="education-course-detail-option">
                              <?php query_posts("post_type=topics&orderby=ID&order=ASC");
                                    $x = 1;
                                while(have_posts()){ the_post(); 
                                    $belongtocourse  = get_post_meta($post->ID,'course',true);
                                if($COURSE_POST_ID == $belongtocourse['course_id']) { ?>
                                  
                                
                                    <li class="topicshover" <?php if($CURRENT_POST_ID == $post->ID){ echo "id='markedTopic'"; } ?> style="width:100%;margin:1px;">
                                        <i class="fa fa-check-square-o"></i>
                                        <h6><a class="topiclink" <?php if($CURRENT_POST_ID == $post->ID){ echo "id='markedTopic'"; } ?> href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                        <!-- <span>Self</span> -->
                                    </li>
                                    
                                    <?php } $x++; } ?>
                                </ul>
                            </div>
                           
                              

                            <!--// Widget Featured Courses \\-->
                            <div class="education-widget-heading"><h2>Featured Courses</h2></div>
                            <div class="widget widget_featured_courses">
                                <ul>
                                    <?php query_posts("post_type=courses&posts_per_page=4"); 
                                    
                                    if(have_posts()){
                                        while(have_posts()){ the_post();
                                    ?>
                                    
                                    <li>
                                        <figure>
                                            <figcaption>
                                                <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                                <a href="course-detail.html"><i class="fa fa-user"></i><?php the_author(); ?></a>
                                               <!-- <div class="star-rating"><span class="star-rating-box" style="width:54%"></span></div>
                                                <small>( 12 Reviews )</small> -->
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <?php } } ?>
                                 
                                
                                </ul>
                            </div>
                            <!--// Widget Featured Courses \\-->

                           
                                 

                          

                      

                        </aside>
                        <!--// SideBaar \\-->

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->



<?php get_footer(); ?>