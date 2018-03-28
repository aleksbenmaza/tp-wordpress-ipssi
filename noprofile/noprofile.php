<?php
/**
 * Created by PhpStorm.
 * User: alexandremasanes
 * Date: 28/03/2018
 * Time: 5:14 PM
 */

/*
 * Plugin Name: No Profile
 */

$die_if_script_presents = function (): void {
    if(!user_can_access_admin_page()) {
        http_send_status(403);
        die('Forbidden');
    }
};

add_filter('admin_user_info_links', $die_if_script_presents);