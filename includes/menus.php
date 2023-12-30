<?php

//#1 Register menu
add_action('init', 'wordpressthemecourse_register_nav_menu');
function wordpressthemecourse_register_nav_menu()
{
    register_nav_menu('main-menu', 'Main menu');
    register_nav_menu('footer-menu', 'Footer menu');
}

//#3 แต่งคลาสแท็ก a
add_filter('nav_menu_link_attributes', 'wordpressthemecourse_nav_menu_link_attributes', 10, 4);
function wordpressthemecourse_nav_menu_link_attributes($atts, $item, $args, $depth)
{
    $atts['class'] = 'nav-link';

    if (in_array('menu-item-has-children', $item->classes)) {
        $atts['class'] = 'nav-link dropdown-toggle';
    }

    return $atts;
}

//#3 แต่งคลาสแท็ก ul submenu
add_filter('nav_menu_submenu_css_class', 'wordpressthemecourse_add_submenu_css_class', 10, 1);
function wordpressthemecourse_add_submenu_css_class($classes)
{
    $classes[] = 'dropdown-menu';
    return $classes;
}

//#4 แต่งคลาสแท็ก li 
add_filter('nav_menu_css_class', 'wordpressthemecourse_nav_menu_css_class', 1, 3);
function wordpressthemecourse_nav_menu_css_class($classes, $item, $args)
{
    $classes[] = 'nav-item';
    return $classes;
}