<?php

class WordpressThemeCourse_Widget_Search extends WP_Widget {

/**
 * Sets up a new Search widget instance.
 *
 * @since 2.8.0
 */
public function __construct() {
    $widget_ops = array(
        'classname'                   => 'wordpressthemecourse__search',
        'description'                 => __( 'A search form for your site.' ),
        'customize_selective_refresh' => true,
        'show_instance_in_rest'       => true,
    );
    parent::__construct( 'wordpressthemecourse_search', _x( 'Wordpress Theme Course Search', 'Wordpress Theme Course Search widget' ), $widget_ops );
}

/**
 * Outputs the content for the current Search widget instance.
 *
 * @since 2.8.0
 *
 * @param array $args     Display arguments including 'before_title', 'after_title',
 *                        'before_widget', and 'after_widget'.
 * @param array $instance Settings for the current Search widget instance.
 */
public function widget( $args, $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : '';

    /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
    $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

    echo $args['before_widget'];
    if ( $title ) {
        echo $args['before_title'] . $title . $args['after_title'];
    }

    // Use active theme search form if it exists.
    get_search_form();

    echo $args['after_widget'];
}
}
