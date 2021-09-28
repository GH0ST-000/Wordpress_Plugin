<?php
/**
 * @package Firstplugin
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class SettingsLink extends BaseController
{


    public function register(){
           add_filter("plugin_action_links_$this->plugin",array($this,'setting_link'));
        }
        public function setting_link($link){
            $seting_link='<a href="admin.php?page=first_plugin">Settings</a>';
            array_push($link,$seting_link);
            return $link;

        }
}