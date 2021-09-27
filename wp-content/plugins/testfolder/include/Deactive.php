<?php


/**
 * @package Firstplugin
 */
namespace Inc;

class deactive
{
    public static function deactivate(){
        flush_rewrite_rules();
    }

}