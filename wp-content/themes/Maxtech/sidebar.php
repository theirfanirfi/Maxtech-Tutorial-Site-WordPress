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
                                  
                                
                                    <li style="width:100%;">
                                        <i class="fa fa-check-square-o"></i>
                                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
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