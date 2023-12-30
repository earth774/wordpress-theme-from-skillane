<?php
get_header();

?>
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span>Services</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">What We Offer</div>
                <h1>Our Services</h1>
                <div class="h-decor"></div>
                <div class="text-center max-670 mt-3 mx-md-auto">
                    <p>Our programs customize the weight loss plan to the patient’s needs. All plans are medically supervised and under physician’s care</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row col-equalH">
                <?php 
                while (have_posts()):
                    the_post();
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-photo">
                            <a href="<?php echo the_permalink(); ?>">
                                <?php the_post_thumbnail('full');?>
                            </a>
                        </div>
                        <h5 class="service-card-name"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h5>
                        <div class="h-decor"></div>
                        <?php echo get_post_meta(get_the_ID(), 'excerpt-extra', true); ?>
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
            </div>
        </div>
    </div>
    <!--//section-->
<?php
get_footer();