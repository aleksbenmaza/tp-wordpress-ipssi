<?php
/**
 * Created by PhpStorm.
 * User: alexandremasanes
 * Date: 28/03/2018
 * Time: 3:54 PM
 */

/*
 * Plugin Name:  So Social
 */

DEFINE('SOSOCIAL_CURRENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

$social_links = function() { ?>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?=SOSOCIAL_CURRENT_URL?>" target="_blank">
        Share on Facebook
    </a>
    </br>
    <a href="https://twitter.com/share?url=<?=SOSOCIAL_CURRENT_URL?>" target="_blank">
        Share on Twitter
    </a>
<?php };

add_action('the_content', $social_links);