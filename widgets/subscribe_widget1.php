<?php

class WordpressThemeCourse_Subscribe_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'wordpressthemecourse_subscribe',  // Base ID
            'Wordpress Theme Course Subscribe'   // Name
        );

        add_action( 'widgets_init', function() {
            register_widget( 'WordpressThemeCourse_Subscribe_Widget' );
        });
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
            <div class="row flex-column flex-md-row flex-lg-column">
                <div class="col-md col-lg-auto">
                    <div class="footer-logo">
                        <img src="<?php echo get_template_directory_uri();?>/images/footer-logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="mt-2 mt-lg-0"></div>
                    <div class="footer-social d-none d-md-block d-lg-none">
                        <a href="<?php echo get_option('wordpressthemecourse_socialfacebook'); ?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                        <a href="<?php echo get_option('wordpressthemecourse_socialtwitter'); ?>" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
                        <a href="<?php echo get_option('wordpressthemecourse_socialgplus'); ?>" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
                        <a href="<?php echo get_option('wordpressthemecourse_socialig'); ?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="footer-text mt-1 mt-lg-1">
                        <p>To receive email releases, simply provide
                            <br>us with your email below</p>
                        <form action="#" class="footer-subscribe">
                            <div class="input-group">
                                <input name="subscribe_mail" type="text" class="form-control" placeholder="Your Email"/>
                                <span><i class="icon-black-envelope"></i></span>
                            </div>
                        </form>
                    </div>
                    <div class="footer-social d-md-none d-lg-block">
                        <a href="<?php echo get_option('wordpressthemecourse_socialfacebook'); ?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                        <a href="<?php echo get_option('wordpressthemecourse_socialtwitter'); ?>" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
                        <a href="<?php echo get_option('wordpressthemecourse_socialgplus'); ?>" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
                        <a href="<?php echo get_option('wordpressthemecourse_socialig'); ?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                    </div>
                </div>
            </div>
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

$subscribe = new WordpressThemeCourse_Subscribe_Widget();
