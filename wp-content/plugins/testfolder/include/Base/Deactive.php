<?php

namespace Inc\Base;

class deactive
{
    public static function deactivate(){
        flush_rewrite_rules();
    }

}