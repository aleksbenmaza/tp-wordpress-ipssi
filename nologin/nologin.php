<?php
/**
 * Created by PhpStorm.
 * User: alexandremasanes
 * Date: 28/03/2018
 * Time: 4:23 PM
 */

/*
 * Plugin Name: No Login
 */

const NOSCRIPT_GET_PARAM = 'pass';
const NOSCRIPT_GET_VALUE = 'foobar';

$check_pass_param = function(): void {
    if(!isset($_GET[NOSCRIPT_GET_PARAM]) || $_GET[NOSCRIPT_GET_PARAM] != NOSCRIPT_GET_VALUE) {
        http_send_status(403);
        die('Forbidden');
    }
};

add_action('login_enqueue_scripts', $check_pass_param);