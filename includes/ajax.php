<?php

// Save Request
add_action('wp_ajax_save_request', 'wordpressthemecourse_save_request');
add_action('wp_ajax_nopriv_save_request', 'wordpressthemecourse_save_request');
function wordpressthemecourse_save_request()
{
    if($_POST && wp_verify_nonce($_POST['_wpnonce'], 'saverequest')){
        $id = wp_insert_post([
            'post_title' => $_POST['requestemail'],
            'post_type' => 'request',
            'post_status' => 'publish',
        ]);
        update_post_meta($id, 'requestname', $_POST['requestname']);
        update_post_meta($id, 'requestemail', $_POST['requestemail']);
        update_post_meta($id, 'requestphone', $_POST['requestphone']);
        update_post_meta($id, 'requestservice', $_POST['requestservice']);
        update_post_meta($id, 'requestdate', $_POST['requestdate']);
        update_post_meta($id, 'requesttime', $_POST['requesttime']);

        wp_mail(
            get_bloginfo('admin_email'),
            "Request form",
            "
            name: {$_POST['requestname']} \r\n
            email: {$_POST['requestemail']} \r\n
            phone: {$_POST['requestphone']} \r\n
            service: {$_POST['requestservice']} \r\n
            date: {$_POST['requestdate']} \r\n
            time: {$_POST['requesttime']} \r\n
            "
        );

        wp_send_json([
            'id' => $id,
            'success' => 'yes'
        ]);

    }

    // Always die in functions echoing ajax content
    die();
}


// Save Aak the Expert
add_action('wp_ajax_save_asktheexpert', 'wordpressthemecourse_save_asktheexpert');
add_action('wp_ajax_nopriv_save_asktheexpert', 'wordpressthemecourse_save_asktheexpert');
function wordpressthemecourse_save_asktheexpert()
{
    if($_POST && wp_verify_nonce($_POST['_wpnonce'], 'saverequest')){
        $id = wp_insert_post([
            'post_title' => $_POST['email'],
            'post_type' => 'asktheexpert',
            'post_status' => 'publish',
        ]);
        update_post_meta($id, 'name', $_POST['name']);
        update_post_meta($id, 'email', $_POST['email']);
        update_post_meta($id, 'phone', $_POST['phone']);
        update_post_meta($id, 'message', $_POST['message']);
        
        wp_mail(
            get_bloginfo('admin_email'),
            "Aak the Expert",
            "
            name: {$_POST['name']} \r\n
            email: {$_POST['email']} \r\n
            phone: {$_POST['phone']} \r\n
            message: {$_POST['message']} \r\n
            "
        );

        wp_send_json([
            'id' => $id,
            'success' => 'yes'
        ]);

    }

    // Always die in functions echoing ajax content
    die();
}


// Save Appointment
add_action('wp_ajax_saveappoinment', 'wordpressthemecourse_saveappoinment');
add_action('wp_ajax_nopriv_saveappoinment', 'wordpressthemecourse_saveappoinment');
function wordpressthemecourse_saveappoinment()
{
    if($_POST && wp_verify_nonce($_POST['_wpnonce'], 'saverequest')){
        $id = wp_insert_post([
            'post_title' => $_POST['bookingname'],
            'post_type' => 'appointment',
            'post_status' => 'publish',
        ]);
        update_post_meta($id, 'bookingname', $_POST['bookingname']);
        update_post_meta($id, 'bookingemail', $_POST['bookingemail']);
        update_post_meta($id, 'bookingphone', $_POST['bookingphone']);
        update_post_meta($id, 'bookingage', $_POST['bookingage']);
        update_post_meta($id, 'bookingservice', $_POST['bookingservice']);
        update_post_meta($id, 'bookingdate', $_POST['bookingdate']);
        update_post_meta($id, 'bookingtime', $_POST['bookingtime']);
        update_post_meta($id, 'bookingmessage', $_POST['bookingmessage']);
 
        wp_mail(
            get_bloginfo('admin_email'),
            "Book an Appointment",
            "
            bookingname: {$_POST['bookingname']} \r\n
            bookingemail: {$_POST['bookingemail']} \r\n
            bookingphone: {$_POST['bookingphone']} \r\n
            bookingage: {$_POST['bookingage']} \r\n
            bookingservice: {$_POST['bookingservice']} \r\n
            bookingdate: {$_POST['bookingdate']} \r\n
            bookingtime: {$_POST['bookingtime']} \r\n
            bookingmessage: {$_POST['bookingmessage']} \r\n
            "
        );

        wp_send_json([
            'id' => $id,
            'success' => 'yes'
        ]);

    }

    // Always die in functions echoing ajax content
    die();
}



