<?php
/**
 * Created by PhpStorm.
 * User: alexandremasanes
 * Date: 28/03/2018
 * Time: 4:02 PM
 */

/*
 * Plugin Name:  No Texture
 */

$return_false = function(): bool {
    return false;
};

add_filter('run_wptexturize', $return_false);