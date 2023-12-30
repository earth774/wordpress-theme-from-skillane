<?php

add_action('init', 'wordpressthemecourse_slide');
function wordpressthemecourse_slide()
{
    $args = array(
        'public' => true,
        'label' => 'Slide',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            // 'custom-fields',
        ),
        'show_in_rest' => true,
    );
    register_post_type('slide', $args);
}


add_action('init', 'wordpressthemecourse_request');
function wordpressthemecourse_request()
{
    $args = array(
        'public' => true,
        'label' => 'Request',
        'supports' => array(
            'title',
            'custom-fields',
        ),
        'show_in_rest' => true,
    );
    register_post_type('request', $args);
}


add_action('init', 'wordpressthemecourse_service');
function wordpressthemecourse_service()
{
    $args = array(
        'public' => true,
        'label' => 'Service',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'custom-fields',
        ),
        'show_in_rest' => true,
        'has_archive' => true,
    );
    register_post_type('service', $args);
}

add_action('init', 'wordpressthemecourse_asktheexpert');
function wordpressthemecourse_asktheexpert()
{
    $args = array(
        'public' => true,
        'label' => 'Ask the Expert',
        'supports' => array(
            'title',
            'custom-fields',
        ),
        'show_in_rest' => true,
    );
    register_post_type('asktheexpert', $args);
}


add_action('init', 'wordpressthemecourse_successstory');
function wordpressthemecourse_successstory()
{
    $args = array(
        'public' => true,
        'label' => 'Success Stories',
        'supports' => array(
            'title',
            'excerpt',
            'editor',
            'custom-fields',
        ),
        'show_in_rest' => true,
    );
    register_post_type('successstory', $args);
}


add_action('init', 'wordpressthemecourse_appointment');
function wordpressthemecourse_appointment()
{
    $args = array(
        'public' => true,
        'label' => 'Appointment',
        'supports' => array(
            'title',
            'custom-fields',
        ),
        'show_in_rest' => true,
    );
    register_post_type('appointment', $args);
}


