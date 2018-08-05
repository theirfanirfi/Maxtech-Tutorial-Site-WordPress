<?php 
/*
* Template Name: course
* Template Post Type: courses
*/
?>

<?php get_header();
the_post();
$COURSE_POST_ID  =  $post->ID;
$AUTHOR = $post->post_author;
?>
 <!--// SubHeader 
        <div class="education-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="height: 0px;">
                        <div style="padding:0px;margin:0px;" class="education-subheader-title"><h1  style="padding:0px;margin:0px;" ><?php the_title(); ?></h1></div>
                       
                    </div>
                </div>
            </div>
        </div>
       SubHeader \\-->

		<!--// Main Content \\-->
		<div class="education-main-content">

			<!--// Main Section \\-->
			<div class="education-main-section">
				<div class="container">
					<div class="row">
						
						<div class="col-md-9">
                            <figure class="education-course-thumb"><img src="<?php bloginfo('template_url'); ?>/images/course-thumb-img.jpg" alt="">
                                <figcaption >
                                    <h2 style="margin-left:20px;"><?php the_title(); ?></h2>
                                 
                                </figcaption>
                            </figure>
                        
                            <div class="education-rich-editor">
                                <p><?php the_content(); ?></p>
                             
                            </div>
                          
                          
                        
                
                            <div class="education-section-heading"><h2>Course Instructor</h2></div>
                            <div class="education-course-instructor">
                                <ul>
                                    <li>
                                        <?php $NAME = get_user_by('ID', $AUTHOR); ?>
                                       <!-- <figure><a href="course-detail.html"><img src="extra-images/course-instructor-img1.jpg" alt=""></a></figure>-->
                                        <div class="education-course-instructor-text">
                                            <h5><?php echo $NAME->display_name; ?></h5>
                                  
                                            <span></span>
                                            <?php $A_META = get_user_meta($AUTHOR,'description',false); ?>
                                            <p><?php echo $A_META[0]; ?></p>
                                        </div>
                                    </li>
                                
                                </ul>
                            </div>

                   
                              
                         
                                <ul class="education-social-network">
                                    <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                    <li><a href="https://plus.google.com/" class="fa fa-google-plus"></a></li>
                                    <li><a href="https://twitter.com/login" class="fa fa-twitter"></a></li>
                                    <li><a href="https://pk.linkedin.com/" class="fa fa-linkedin"></a></li>
                                </ul>
                          
                            <?php //comments_template(); ?>
                         
                       
                
                        </div>
                       <?php //get_sidebar(); ?>
                        
                                  <!--// SideBaar \\-->
                        <aside class="col-md-3 education-sidebar">
                            
                            <!--// Widget Search \\-->
                          
                            
                               <?php get_search_form(); ?>
                                <!-- <form>
 <div class="widget widget_search">
                                    <input type="text" value="Search" onblur="if(this.value == '') { this.value ='Search'; }" onfocus="if(this.value =='Search') { this.value = ''; }">
                                    <label>
                                        <input type="submit" value="">
                                    </label>
</div>
                                </form> -->
                             
                            <!--// Widget Search \\-->

                      
                            
                           
                              

                            <!--// Widget Featured Courses \\-->
                            
                              <div class="education-section-heading"><h2>Course Topics</h2></div>
                            <div class="education-course-features">
                                <ul class="education-course-detail-option">
                              <?php query_posts("post_type=topics&orderby=ID&order=ASC");
                                    $x = 1;
                                while(have_posts()){ the_post(); 
                                    $belongtocourse  = get_post_meta($post->ID,'course',true);
                                if($COURSE_POST_ID == $belongtocourse['course_id']) { ?>
                                  
                                
                                    <li class="topicshover" style="width:100%;margin:1px;">
                                        <i class="fa fa-check-square-o"></i>
                                        <h6><a class="topiclink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                        <!-- <span>Self</span> -->
                                    </li>
                                    
                                    <?php } $x++; } ?>
                                </ul>
                            </div>
                            
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
                                                <a href="<?php the_permalink(); ?>"><i class="fa fa-user"></i><?php the_author(); ?></a>
                                               <!-- <div class="star-rating"><span class="star-rating-box" style="width:54%"></span></div>
                                                <small>( 12 Reviews )</small> -->
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <?php } } ?>
                                 <?php wp_reset_query(); ?>
                                
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
<?php wp_reset_query(); ?>