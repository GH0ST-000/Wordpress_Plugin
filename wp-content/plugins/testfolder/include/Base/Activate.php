<?php


/**
 * @package Firstplugin
 */
namespace Inc\Base;

class activate
{
    public static function activate(){
        flush_rewrite_rules();
    }

}