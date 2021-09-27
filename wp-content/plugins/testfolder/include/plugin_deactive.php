<?php


/**
 * @package Firstplugin
 */

class plugin_deactive
{
    public static function deactivate(){
        flush_rewrite_rules();
    }

}