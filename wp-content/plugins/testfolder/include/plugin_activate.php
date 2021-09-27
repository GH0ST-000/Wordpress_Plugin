<?php


/**
 * @package Firstplugin
 */

class plugin_activate
{
    public static function activate(){
        flush_rewrite_rules();
    }

}