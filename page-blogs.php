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
                    <div class="blog-posts">

                        <?php
                        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                        
                        $args = [
                            'post_type' => 'post',
                            'numberposts' => 10,
                            'paged' => $paged,
                        ];
                        $the_query = new WP_Query($args);

                        // The Loop
                        if ($the_query->have_posts()) {

                            while ($the_query->have_posts()) {
                                $the_query->the_post();
                        ?>
                                <div class="blog-post">
                                    <div class="blog-post-info">
                                        <div class="post-date"><?php echo date('d', strtotime($post->post_date)); ?><span><?php echo date('M', strtotime($post->post_date)); ?></span></div>
                                        <div>
                                            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
                                    <div class="post-image">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail([855, 1656]); ?></a>
                                    </div>
                                    <div class="post-teaser"><?php the_excerpt(); ?></div>
                                    <div class="mt-3 mt-lg-4"><a href="<?php the_permalink(); ?>" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                        <?php
                            }
                            
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        }
                        ?>
                        
                    </div>
                    <div class="clearfix"></div>
                    <ul class="pagination justify-content-center">
                        <?php foreach( wpdocs_get_paginated_links( $the_query ) as $link ) : ?>
                            <li class="page-item <?php if ( $link->isCurrent ) { echo " active "; } ?> ">
                                <?php if ( $link->isCurrent ): ?>
                                    <a class="page-link" href="<?php esc_attr_e( $link->url ) ?>">
                                        <strong><?php _e( $link->page ) ?></strong>
                                    </a>
                                <?php else : ?>
                                    <a class="page-link" href="<?php esc_attr_e( $link->url ) ?>">
                                        <?php _e( $link->page ) ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
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