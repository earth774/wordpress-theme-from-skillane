<?php
get_header();
?>
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="index.html">Home</a>
                    <span>Serch Result: <?php echo $_GET['s']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <h1>Serch Result: <?php echo $_GET['s']; ?></h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container">
            <div class="blog-isotope">
                
                
                <?php
                $i = 0;
                while (have_posts()):
                    the_post();
                    $i++;
                ?>
                
                <div class="blog-post <?php if($i % 2 == 0){ echo ' bg-grey '; } ?>">
                    <div class="post-image">
                        <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""></a>
                    </div>
                    <div class="blog-post-info">
                        <div class="post-date"><?php echo date('d', strtotime($post->post_date)); ?><span><?php echo date('M', strtotime($post->post_date)); ?></span></div>
                        <div>
                            <h2 class="post-title"><a href="<?php the_permalink();?>"><?php echo the_title(); ?></a></h2>
                            <div class="post-meta">
                                <div class="post-meta-author">by <a href="#"><i><?php the_author(); ?></i></a></div>
                                <div class="post-meta-social">
                                    <a href="#"><i class="icon-facebook-logo"></i></a>
                                    <a href="#"><i class="icon-twitter-logo"></i></a>
                                    <a href="#"><i class="icon-google-logo"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-teaser"><?php echo the_excerpt(); ?></div>
                    <div class="mt-2"><a href="<?php the_permalink();?>" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
                </div>
                
                
                  
                
                <?php
                endwhile;

                
                ?>
                
                
            </div>
            <div class="clearfix"></div>
            
            <?php
            echo paginate_links([
                'prev_next' => false,
                'type' => 'list'
            ]);
            ?>
            
            <ul class="pagination justify-content-center">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">15</a></li>
            </ul>
        </div>
    </div>
<?php

get_footer();