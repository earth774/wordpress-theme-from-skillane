<?php

class WordpressThemeCourse_BlogPosts_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'wordpressthemecourse_blogposts_widget',  // Base ID
            'Wordpress Theme Course Blog Posts'   // Name
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        $blogposts = get_posts([
            'post_type' => 'post',
            'numberposts' => 3,
        ]);
        ?>
            <?php echo $args['before_title'];?>Blog Posts<?php echo $args['after_title'];?>
            <div class="h-decor"></div>
            
            <?php foreach ($blogposts as $blogpost){ ?>
            <div class="footer-post d-flex">
                <div class="footer-post-photo"><img src="<?php echo get_the_post_thumbnail_url($blogpost, 'thumbnail'); ?>" alt="" class="img-fluid"></div>
                <div class="footer-post-text">
                    <div class="footer-post-title"><a href="<?php echo get_the_permalink($blogpost); ?>"><?php echo $blogpost->post_title; ?></a></div>
                    <p><?php echo  date('F d, Y', strtotime($blogpost->post_date)); ?></p>
                </div>
            </div>
            <?php } ?>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        // outputs the options form in the admin
    }

    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
}