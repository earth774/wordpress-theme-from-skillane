<?php
get_header();

while (have_posts()):
    the_post();
    
    
   
    
    ?>
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span><?php the_title(); ?></span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                      
                <?php  the_content(); ?>

                <?php
                if(comments_open()){
                    comments_template('/comments-page.php');
                }
                ?>
                    
                </div>
                 
            </div>
        </div>
    </div>
    <!--//section-->
    <?php
endwhile;

get_footer();