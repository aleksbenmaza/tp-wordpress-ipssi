<?php
/**
 * Created by PhpStorm.
 * User: alexandremasanes
 * Date: 28/03/2018
 * Time: 4:17 PM
 */

/*
 * Plugin Name: No Script
 */

const NOSCRIPT_SCRIPT_CONTENT = 'script';

const NOSCRIPT_SCRIPT_FOBIDDEN_MESSAGE = 'Typing script is forbidden, free-speech does not exist !';

$die_if_script_presents = function (? string $content): ? string {
    if(strpos(strtolower($content), NOSCRIPT_SCRIPT_CONTENT) !== FALSE) {
        http_send_status(403);
        wp_die(NOSCRIPT_SCRIPT_FOBIDDEN_MESSAGE);
    }
    return $content;
};

add_filter('publish_future_post', $die_if_script_presents);