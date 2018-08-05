 <!--// Footer \\-->
<br/>
<br/>
<br/>
<br/>
        <footer  class="education-footer-one">
            <span class="education-footer-pattren"></span>
            

            <!--// CopyRight \\-->
            <div class="container">
         
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="education-copyright">
                         
                            <a href="#" class="education-back-top"><i class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>
                
                       <div class="row">
                    
                    <div class="col-md-4">
                        <h5>Links</h5>
                        <style>
                            #myFooterMenu li {
                                list-style-type: none;
                                margin:8px;
                            }
                        </style>
                        <?php wp_nav_menu(array('menu' => 'footerMenu','menu_id' => 'myFooterMenu')); ?>
                    </div>
                    
                    <div class="col-md-4">
                        <h5>Featured Courses</h5>
                        <?php query_posts("post_type=courses&orderby=ID&order=DESC&posts_per_page=5"); ?>
                          <ul >
                              <?php if(have_posts()){ while(have_posts()){ the_post(); ?>
                                <li style="list-style-type:none;margin:8px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                              <?php } }  wp_reset_query(); ?>
                              
                            </ul>
                    </div>
                    
                        <div class="col-md-4">
                            <h5>Contact Us</h5>
                            <?php query_posts("post_type=contacts&orderby=ID&order=DESC&posts_per_page=4"); ?>
                             <ul >
                              <?php if(have_posts()){ while(have_posts()){ the_post(); ?>
                                 <li style="list-style-type:none;margin:8px;"><strong><?php the_title(); ?></strong> <?php the_content(); ?></li>
                              <?php } }  wp_reset_query(); ?>
                              
                            </ul>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-md-12">
                        <div class="education-copyright">
                            <p>© 2017, All Right Reserved - by MTCI</p>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Youtube</a></li>
                             
                            </ul>
                            <a href="#" class="education-back-top"><i class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// CopyRight \\-->

        </footer>
        <!--// Footer \\-->


	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- LoginModal -->
    <div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="education-login-box">
                <a href="#" data-dismiss="modal" class="education-login-close"><i class="icon-uniF106"></i></a>
                <h4>Login To Your Account</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="password" value="Password*" onblur="if(this.value == '') { this.value ='Password*'; }" onfocus="if(this.value =='Password*') { this.value = ''; }">
                    <a href="#">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign In"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="education-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="education-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="education-color">Sign - Up Now !</a></p>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>

    <!-- SignupModal -->
    <div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="education-login-box">
                <a href="#" data-dismiss="modal" class="education-login-close education-color"><i class="icon-uniF106"></i></a>
                <h4>Sign Up Now</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="text" value="Type your password*" onblur="if(this.value == '') { this.value ='Type your password*'; }" onfocus="if(this.value =='Type your password*') { this.value = ''; }">
                    <input type="text" value="Confirm your password*" onblur="if(this.value == '') { this.value ='Confirm your password*'; }" onfocus="if(this.value =='Confirm your password*') { this.value = ''; }">
                    <a href="#">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign Up"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="education-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="education-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="education-color">Login - Now !</a></p>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>


	<!-- jQuery (necessary for JavaScript plugins) -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/slick.slider.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/progressbar.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/counter.js"></script>
    <script type="text/javascript" src="/https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/functions.js"></script>

  </body>
</html>