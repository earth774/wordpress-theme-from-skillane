<?php

add_action('wp_enqueue_scripts', 'wordpressthemecourse_enqueue_scripts');
function wordpressthemecourse_enqueue_scripts(){
    wp_register_script('jquery', get_bloginfo('template_url').'/vendor/jquery/jquery-3.2.1.min.js', null, '3.2.1', true);
    wp_register_script('jquery-migrate', get_bloginfo('template_url').'/vendor/jquery-migrate/jquery-migrate-3.0.1.min.js', null, '3.0.1', true);
    wp_register_script('cookie', get_bloginfo('template_url').'/vendor/cookie/jquery.cookie.js', null, null, true);
    wp_deregister_script('moment');
    wp_register_script('moment', get_bloginfo('template_url').'/vendor/bootstrap-datetimepicker/moment.js', null, null, true);
    wp_register_script('bootstrap-datetimepicker', get_bloginfo('template_url').'/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js', null, null, true);
    wp_register_script('popper', get_bloginfo('template_url').'/vendor/popper/popper.min.js', null, null, true);
    wp_register_script('bootstrap', get_bloginfo('template_url').'/vendor/bootstrap/bootstrap.min.js', null, null, true);
    wp_register_script('waypoints', get_bloginfo('template_url').'/vendor/waypoints/jquery.waypoints.min.js', null, null, true);
    wp_register_script('sticky', get_bloginfo('template_url').'/vendor/waypoints/sticky.min.js', null, null, true);
    wp_register_script('imagesloaded', get_bloginfo('template_url').'/vendor/imagesloaded/imagesloaded.pkgd.min.js', null, null, true);
    wp_register_script('slick', get_bloginfo('template_url').'/vendor/slick/slick.min.js', null, null, true);
    wp_register_script('scroll-with-ease', get_bloginfo('template_url').'/vendor/scroll-with-ease/jquery.scroll-with-ease.min.js', null, null, true);
    wp_register_script('countTo', get_bloginfo('template_url').'/vendor/countTo/jquery.countTo.js', null, null, true);
    wp_register_script('jquery.form', get_bloginfo('template_url').'/vendor/form-validation/jquery.form.js', null, null, true);
    wp_register_script('jquery.validate', get_bloginfo('template_url').'/vendor/form-validation/jquery.validate.min.js', null, null, true);
    wp_register_script('isotope', get_bloginfo('template_url').'/vendor/isotope/isotope.pkgd.min.js', null, null, true);

    // Custom Scripts
    wp_register_script('app', get_bloginfo('template_url').'/js/app.js', null, null, true);
    wp_register_script('bmi-calculator', get_bloginfo('template_url').'/js/bmi-calculator.js', null, null, true);
    wp_register_script('app-shop', get_bloginfo('template_url').'/js/app-shop.js', null, null, true);
    wp_register_script('forms', get_bloginfo('template_url').'/form/forms.js', null, null, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');
    wp_enqueue_script('cookie');
    wp_enqueue_script('moment');
    wp_enqueue_script('bootstrap-datetimepicker');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('sticky');
    wp_enqueue_script('imagesloaded');
    wp_enqueue_script('slick');
    wp_enqueue_script('scroll-with-ease');
    wp_enqueue_script('countTo');
    wp_enqueue_script('jquery.form');
    wp_enqueue_script('jquery.validate');
    wp_enqueue_script('isotope');
    // Custom Scripts
    wp_enqueue_script('app');
    wp_enqueue_script('bmi-calculator');
    wp_enqueue_script('app-shop');
    wp_enqueue_script('forms');
    wp_localize_script('forms','requestforms', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        '_wpnonce' => wp_create_nonce('saverequest'),
    ]);

}


add_action('wp_enqueue_scripts', 'wordpressthemecourse_enqueue_styles');
function wordpressthemecourse_enqueue_styles()
{
    wp_enqueue_style('slick', get_template_directory_uri().'/vendor/slick/slick.css', null, null, 'all');
    wp_enqueue_style('animate', get_template_directory_uri().'/vendor/animate/animate.min.css', null, null, 'all');
    wp_enqueue_style('icons-style', get_template_directory_uri().'/icons/style.css', null, null, 'all');
    wp_enqueue_style('bootstrap-datetimepicker', get_template_directory_uri().'/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css', null, null, 'all');
    wp_enqueue_style('css-style', get_template_directory_uri().'/css/style.css', null, null, 'all');

    // Google Fonts
    wp_enqueue_style('fonts.googleapis-poppins', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800', null, null, 'all');
    wp_enqueue_style('fonts.googleapis-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900', null, null, 'all');
}
