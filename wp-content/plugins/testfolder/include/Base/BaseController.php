<?php

/**
 * @package Firstplugin
 */

namespace Inc\Base;


class BaseController
{
  public  $plugin_path;
  public  $plugin_url;
  public $plugin;


    /**
     * BaseController constructor.
     * @param $public_path
     */
    public function __construct()
    {

        $this->plugin_path =plugin_dir_path(dirname(__FILE__,2));
        $this->plugin_url=plugin_dir_url(dirname(__FILE__,2));
        $this->plugin=plugin_basename(dirname(__FILE__,3)).'/first_plugin.php';

    }

}

/**
 * @package Firstplugin
 */

namespace Inc\Api;

