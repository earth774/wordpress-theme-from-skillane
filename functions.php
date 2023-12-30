<?php

require_once 'includes/option.php';
require_once 'includes/menus.php';
require_once 'includes/enqueues.php';
require_once 'includes/customposttype.php';
require_once 'includes/ajax.php';
require_once 'includes/utilities.php';
require_once 'includes/comment_walker.php';
require_once 'includes/metaboxes.php';
require_once 'widgets/category-widget.php';
require_once 'widgets/calendar-widget.php';
require_once 'widgets/search-widget.php';
require_once 'widgets/ourcontract-widget.php';
require_once 'widgets/blogposts_widget.php';
require_once 'widgets/subscribe_widget.php';

add_action( 'after_setup_theme', 'wordpressthemecourse_load_theme_textdomain' );
function wordpressthemecourse_load_theme_textdomain() {
    load_theme_textdomain( 'themecourse', get_template_directory() . '/language' );
}

add_action('after_setup_theme', 'wordpressthemecourse_setup_theme');
function wordpressthemecourse_setup_theme()
{
    add_theme_support('post-thumbnails');
    
    register_sidebar([
        'name' => 'Blog Side Bar',
        'id' => 'blog-side-bar',
        'description' => 'Blog sidebar area',
        'before_widget' => '<div id="%1$s" class="side-block widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="side-block-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name' => 'Footer 1',
        'id' => 'footer-1',
        'description' => 'Footer 1 Area',
        'before_widget' => '<div id="%1$s" class="col-lg-4 footer-col1 pt-lg-3 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ]);
    
    register_sidebar([
        'name' => 'Footer 2',
        'id' => 'footer-2',
        'description' => 'Footer 2 Area',
        'before_widget' => '<div id="%1$s" class="col-sm-6 col-lg-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ]);  
    
    register_sidebar([
        'name' => 'Footer 3',
        'id' => 'footer-3',
        'description' => 'Footer 3 Area',
        'before_widget' => '<div id="%1$s" class="col-sm-6 col-lg-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ]);
    
}

add_action('widgets_init', 'wordpressthemecourse_widgets_init');
function wordpressthemecourse_widgets_init()
{
    register_widget("WordpressThemeCourse_Widget_Categories");
    register_widget("WordpressThemeCourse_Widget_Calendar");
    register_widget("WordpressThemeCourse_Widget_Search");
    register_widget("WordpressThemeCourse_OurContract_Widget");
    register_widget("WordpressThemeCourse_BlogPosts_Widget");
}

add_action('init', 'wordpressthemecourse_init');
function wordpressthemecourse_init(){
    if(!empty($_GET['accept'])){
        echo "xxxxxxxxxxxxxxxxxxxxxxxxxxxx";
        die();
    }
}