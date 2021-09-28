<?php

/**
 * @package Firstplugin
 */
/*
 Plugin Name:FirstPlugin
 Description: This Is My First Attempt To Write Custom Plugin.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
 Version:1.0.0

 */

if (!defined('ABSPATH')) {
    die();
}

if (file_exists(dirname(__FILE__).'/vendor/autoload.php')){
        require_once dirname(__FILE__).'./vendor/autoload.php';
}
function activate(){
\Inc\Base\activate::activate();
}
register_activation_hook(__FILE__,'activate');
function deactivate(){
    \Inc\Base\deactive::deactivate();
}
register_deactivation_hook(__FILE__,'deactivate');

if (class_exists('Inc\\init')){
    Inc\init::register_services();
}






