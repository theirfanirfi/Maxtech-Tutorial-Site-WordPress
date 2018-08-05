<?php
$title = "MAXTECH LIBS";
get_header(); ?>
		<!--// Main Banner \\-->
		<div class="education-banner">

            <!--// Slider \\-->
            <div class="education-banner-one">
                <div class="education-banner-one-layer">
                    <img src="<?php bloginfo('template_url'); ?>/images/banner-1.jpg" alt="">
                    <div class="education-banner-caption">
                        <span class="education-bgcolor">The Best Learning Site</span>
                        <br>
                        <span class="education-bgcolor banner-title">Welcome To MaxTech Libs</span>
                    </div>
                    <div class="education-banner-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/banner-thumb-1.png" alt=""> </div>
                </div>
                <div class="education-banner-one-layer">
                    <img src="<?php bloginfo('template_url'); ?>/images/banner-1.jpg" alt="">
                    <div class="education-banner-caption">
                        <span class="education-bgcolor">The Best Learning Site</span>
                        <br>
                        <span class="education-bgcolor banner-title">Welcome To MaxTech Libs</span>
                    </div>
                    <div class="education-banner-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/banner-thumb-2.png" alt=""> </div>
                </div>
            </div>
            <!--// Slider \\-->
            
        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="education-main-content">

			<!--// Main Section \\-->
			<div class="education-main-section">
				<div class="container">
					<div class="row">
						
                        <!--// Services \\-->
						<div class="col-md-12">
                            <div class="education-fancy-title">
                                <i class="fa fa-graduation-cap"></i>
                                <span>what we provide</span>
                                <h2>Our Courses</h2>
                            </div>
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
                                    <?php } wp_reset_query(); ?>
                                    
                                    
                                 
                                  
                                 
                               
                               
                             
                                </ul>
                            </div>
                        </div>
                        <!--// Services \\-->

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

         

            <!--// Main Section \\-->
            <div class="education-main-section education-testimonial-full">
                <span class="education-shape-one"></span>
                <span class="education-shape-two"></span>
                <span class="testimonial-transparent"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="education-testimonial">
                                <i class="fa fa-quote-right"></i>
                                <div class="clearfix"></div>
                                
                                <?php query_posts("post_type=ceomsg&orderby=ID&order=DESC&posts_per_page=1");
                                if(have_posts()){
                                    while(have_posts()){ the_post(); 
                                    $ceoImage = get_post_meta($post->ID,'ceo_image',true);                    
                                ?>
                                <p><?php the_content(); ?></p>
                                <div class="education-testimonial-figure">
                                    <figure><img src="<?php echo $ceoImage; ?>" alt=""></figure>
                                    <section>
                                        <h6><a href="#"><?php the_title(); ?></a></h6>
                                        <span>Founder & SEO</span>
                                    </section>
                                </div>
                                <?php } } wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            
          

            <!--// Main Section \\-->
            <div class="education-main-section education-partner-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="education-fancy-title">
                                <i class="fa fa-graduation-cap"></i>
                                <span></span>
                                <h2>Maxtech Libs Team</h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="education-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="education-subscribe-newsletter">
                                <img src="<?php bloginfo('template_url'); ?>/images/news-latter-img.jpg" alt="">
                                <div class="education-newslatter-text">
                                    <h2>Subscribe To Our Newsletter</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat ipsum maximus malesuada. Donec non ex faucibus, fringilla tellus eget, maximus arcu. Duis et eros nisl.</p>
                                    <form>
                                        <input type="text" value="Type Here" onblur="if(this.value == '') { this.value ='Type Here'; }" onfocus="if(this.value =='Type Here') { this.value = ''; }">
                                        <label><input type="submit" value="Subscribe Now"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

       <?php get_footer(); ?>