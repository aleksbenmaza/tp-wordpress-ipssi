<?php
/**
 * Created by PhpStorm.
 * User: alexandremasanes
 * Date: 28/03/2018
 * Time: 4:10 PM
 */

/*
 * Plugin Name: Favicon
 */

$header_favicon = function(): void {
    echo '<link rel="icon" type="image/png" href="/fav/favicon-32x32.png" sizes="32x32">';
};


add_action('wp_head', $header_favicon);