<?php
get_header();
?>
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 aside">
                    <div class="blog-post blog-post-single">
                        <div class="blog-post-info">
                            <div class="post-date"><?php echo date('d', strtotime( $post->post_date ));?><span><?php echo date('M', strtotime( $post->post_date ));?></span></div>
                            <div>
                                <h2 class="post-title"><?php the_title(); ?></h2>
                                <div class="post-meta">
                                    <div class="post-meta-author">by <a href="#"><i><?php echo get_the_author_meta('display_name', $post->post_author)?></i></a></div>
                                    <div class="post-meta-social">
                                        <a href="#"><i class="icon-facebook-logo"></i></a>
                                        <a href="#"><i class="icon-twitter-logo"></i></a>
                                        <a href="#"><i class="icon-google-logo"></i></a>
                                        <a href="#"><i class="icon-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-image">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%" />
                        </div>
                        <div class="post-text">
                            <?php the_content();?>
                        </div>
                        <?php the_tags();?>
                    </div>
                    
                    <?php
                    comments_template();
                    ?>   
                    
                    
                    
                 
                </div>
                <div class="col-lg-3 aside-left mt-5 mt-lg-0">
                    <?php 
                    dynamic_sidebar('blog-side-bar');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
<?php

get_footer();