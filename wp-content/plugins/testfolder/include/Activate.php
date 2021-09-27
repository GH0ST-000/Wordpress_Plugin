<?php


/**
 * @package Firstplugin
 */
namespace Inc;

class activate
{
    public static function activate(){
        flush_rewrite_rules();
    }

}