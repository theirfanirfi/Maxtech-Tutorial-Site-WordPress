<?php
/*
* Template Name: Our Team
* Template Post Type: post
*/

get_header(); 

?>
   <!--// SubHeader \\-->
        <div class="education-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="education-subheader-title"><h1>Our Team</h1></div>
                     
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->
        

        		<!--// Main Content \\-->
		<div class="education-main-content">

			<!--// Main Section \\-->
			<div class="education-main-section">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12">
                            <div class="education-team education-team-grid">
                                <ul class="row">
                          
                             
                      
                          
               <?php query_posts("post_type=team&orderby=ID&order=DESC"); 
                                    
                                    if(have_posts()){
                                        while(have_posts()){ the_post(); 
                                    $position = get_post_meta($post->ID,'position',true);
                                    $image = get_post_meta($post->ID,'member_image',true);
                                    $fb = get_post_meta($post->ID,'facebook',true);
                                    $tw = get_post_meta($post->ID,'twitter',true);
                                    ?>
                                
                                    <li class="col-md-3">
                                        <figure><a href="team-detail.html"><img src="<?php echo $image; ?>" alt=""></a>
                                            <figcaption>
                                                <div class="education-team-grid-text">
                                                    <h5><a href="#"><?php the_title(); ?></a></h5>
                                                    
                                                    <span><?php echo $position; ?></span>
                                                    <p><?php the_excerpt(); ?></p>
                                                    <ul class="education-team-social">
                                                        <?php if(!empty($fb)){ ?>
                                                        <li><a target="_blank" href="<?php echo $fb; ?>" class="fa fa-facebook-square"></a></li>
                                                        <?php } ?>
                                                         <?php if(!empty($tw)){ ?>
                                                        <li><a target="_blank" href="<?php echo $tw; ?>" class="fa fa-twitter-square"></a></li>
                                                        <?php } ?>
                                                       <!-- <li><a href="https://pk.linkedin.com/" class="fa fa-linkedin-square"></a></li>
                                                        <li><a href="https://plus.google.com/" class="fa fa-google-plus-square"></a></li> -->
                                                    </ul>
                                                </div>
                                                <div class="education-team-grid-info">
                                                    <h5><a href="team-detail.html"><?php the_title(); ?></a></h5>
                                                    <span><?php echo $position; ?></span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </li>
                                        
                                <?php } } ?>
                                </ul>
                            </div>
                           
                        </div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

<?php get_footer(); ?>