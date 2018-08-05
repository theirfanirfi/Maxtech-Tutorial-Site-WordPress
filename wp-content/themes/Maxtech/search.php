



<?php get_header(); ?>

 <!--// SubHeader \\-->


		<!--// Main Content \\-->
		<div class="education-main-content">

			<!--// Main Section \\-->
			<div class="education-main-section">
				<div class="container">
					<div class="row">
						
						<div class="col-md-9">
                           
                           
                            <div class="education-rich-editor">
                               <?php 
                         
                                $s=get_search_query();
$args = array(
                's' =>$s,
    'post_type' => ['courses','topics']
            );
    // The Query
$the_query = new WP_Query($args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a class="btn-link " href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>
                                
                            </div>
                         
                   
                    
                 
                      
                       
                
                        </div>
                    <?php get_sidebar(); ?>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

<?php //comments_template(); ?>

<?php get_footer(); ?>