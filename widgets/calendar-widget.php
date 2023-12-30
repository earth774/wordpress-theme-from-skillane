<?php

class WordpressThemeCourse_Widget_Calendar extends WP_Widget_Calendar {
    /**
     * Ensure that the ID attribute only appears in the markup once
     *
     * @since 4.4.0
     * @var int
     */
    private static $instance = 0;
    
    /**
     * Sets up a new Calendar widget instance.
     *
     * @since 2.8.0
     */
    public function __construct() {
        $widget_ops = array(
            'classname'                   => 'wordpressthemecourse_widget_calendar',
            'description'                 => __( 'A calendar of your site’s posts.' ),
            'customize_selective_refresh' => true,
        );
        WP_Widget::__construct( 'wordpressthemecourse_calendar', __( 'Wordpress Theme Course Calendar' ), $widget_ops );
    }


    /**
     * Outputs the content for the current Calendar widget instance.
     *
     * @since 2.8.0
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance The settings for the particular instance of the widget.
     */
    public function widget( $args, $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';

        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        echo $args['before_widget'];
        if ( $title ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        if ( 0 === self::$instance ) {
            echo '<div id="calendar_wrap" class="calendar">';
        } else {
            echo '<div class="calendar">';
        }
        get_calendar();
        echo '</div>';
        echo $args['after_widget'];

        self::$instance++;
    }
    
}