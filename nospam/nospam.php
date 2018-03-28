<?php
/**
 * Created by PhpStorm.
 * User: alexandremasanes
 * Date: 28/03/2018
 * Time: 5:11 PM
 */

/*
 * Plugin Name:  No Spam
 */

class Akismet_admin {

    public function text_add_link_class() {
        /** some stuff */
    }
}

remove_filter('comment_text', ['Akismet_Admin', 'text_add_link_class']);