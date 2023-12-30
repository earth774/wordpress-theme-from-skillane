<?php

add_action('admin_init','wordpressthemecourse_register_address');
function wordpressthemecourse_register_address(){
    set_register_setting('wordpressthemecourse_address',"Address");
    set_register_setting('wordpressthemecourse_mobile',"Mobile Number");
    set_register_setting('wordpressthemecourse_email',"Email");

    set_register_setting('wordpressthemecourse_facebook',"Facebook");
    set_register_setting('wordpressthemecourse_twitter',"Twitter");
    set_register_setting('wordpressthemecourse_googleplus',"Google+");
    set_register_setting('wordpressthemecourse_instagram',"IG");
    
}

function wordpressthemecourse_address_control($args){
    set_input_control($args,'wordpressthemecourse_address');
}

function wordpressthemecourse_mobile_control($args){
    set_input_control($args,'wordpressthemecourse_mobile');
}

function wordpressthemecourse_email_control($args){
    set_input_control($args,'wordpressthemecourse_email');
}

function wordpressthemecourse_facebook_control($args){
    set_input_control($args,'wordpressthemecourse_facebook');
}
function wordpressthemecourse_twitter_control($args){
    set_input_control($args,'wordpressthemecourse_twitter');
}
function wordpressthemecourse_googleplus_control($args){
    set_input_control($args,'wordpressthemecourse_googleplus');
}
function wordpressthemecourse_instagram_control($args){
    set_input_control($args,'wordpressthemecourse_instagram');
}

function set_register_setting($field,$label){
    register_setting('general',"{$field}");
    add_settings_field(
        "{$field}",
        $label,
        "{$field}_control",
        "general",
        "default",
        array(
            'label_for'=>"{$field}",
            'value'=>get_option("{$field}")
        )
    );
}

function set_input_control($args,$name){
    ?>
    <input type="text" name="<?php echo $name; ?>" value="<?php echo $args['value'] ?>" />
    <?php
}