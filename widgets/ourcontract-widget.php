<?php

class WordpressThemeCourse_OurContract_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'wordpressthemecourse_ourcontract',  // Base ID
            'Wordpress Theme Course Our Contract'   // Name
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
            <?php echo $args['before_title']; ?>Our Contacts<?php echo $args['after_title']; ?>
            <div class="h-decor"></div>
            <ul class="icn-list">
                <li><i class="icon-placeholder2"></i><?php echo $instance['address']; ?>
                    <br>
                    <a href="<?php echo get_the_permalink(get_page_by_path('contact-us')); ?>" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Get directions on the map</span><i class="icon-right-arrow"></i></a>
                </li>
                <li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">1-800-267-0000</span>, <span class="text-nowrap">1-800-267-0001</span></span></b>
                    <br>(24/7 General inquiry)
                </li>
                <li><i class="icon-black-envelope"></i><a href="mailto:<?php echo get_bloginfo('admin_email'); ?>"><?php echo get_bloginfo('admin_email'); ?></a></li>
            </ul>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $address = ! empty( $instance['address'] ) ? $instance['address'] : '1560 Holden Street San Diego, CA 92139';
        ?>
        <label for="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>"></label>
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'address' ) ); ?>" type="text" value="<?php echo $address; ?>">
    <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();

        $instance['address'] = ( !empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';

        return $instance;
    }
}