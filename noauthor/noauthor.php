<?php
/**
 * Created by PhpStorm.
 * User: alexandremasanes
 * Date: 28/03/2018
 * Time: 5:02 PM
 */

/*
 * Plugin Name: No Author
 */

const NOAUTHOR_GET_PARAM = 'm';
const NOAUTHOR_REDIRECT_URI = '/';

$check_archive_user = function(): void {
    if (!is_user_logged_in())
        wp_redirect(NOAUTHOR_REDIRECT_URI);
};

add_action('get_the_archive_title ', $check_archive_user);