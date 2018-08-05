<?php 
/*
* Template Name: About Us
* Template Post Type: post
*/


?>
<?php get_header();
the_post();
?>
 <!--// SubHeader \\-->
        <div class="education-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="education-subheader-title"><h1>About Us</h1></div>
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
						
						<div class="col-md-10">
                            <div class="education-about-services">
                                <span>About Us</span>
                                <h2>WelCome To Maxtech Libs </h2>
                                <p><?php the_content(); ?></p>
                                <div class="education-service education-service-grid">
                                   
                                </div>
                            </div>
                        </div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

<?php get_footer(); ?>