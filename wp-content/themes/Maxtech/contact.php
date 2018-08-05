<?php 
/*

* Template Name: Contact Us
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
                        <div class="education-subheader-title"><h1>contact us</h1></div>
                    
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
                      
						<div class="col-md-8">
                            <div class="education-contact-us">
                              
                                <ul>
                                    <?php query_posts("post_type=contacts"); 
                                    if(have_posts()){
                                        while(have_posts())
                                        { the_post(); ?>
                                     <li>
                                        <h6><?php the_title(); ?></h6>
                                        <span><?php the_content(); ?></span>
                                        <i class="fa fa-map-marker"></i>
                                    </li>
                                    <?php } } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="education-contact-us-map"><div id="map"></div></div>
                        </div>
					</div>
				</div>
			</div>
			<!--// Main Section \\-->
  

		</div>
		<!--// Main Content \\-->

<?php get_footer(); ?>