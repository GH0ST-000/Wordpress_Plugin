<?php

namespace Inc\Pages;

use \Inc\Base\BaseController;
use Inc\Api\SettingApi;

class Admin extends  BaseController{

    public $settings;

    public $pages = array();

    public function __construct()
    {
        $this->settings = new SettingApi();

        $this->pages = array(
            array(
                'page_title' => 'First Plugin',
                'menu_title' => 'PLUGIN',
                'capability' => 'manage_options',
                'menu_slug' => 'first_plugin',
                'callback' => function() { echo '<h1>Testing</h1>'; },
                'icon_url' => 'dashicons-store',
                'position' => 110
            )
        );
    }

    public function register()
    {
        $this->settings->addPages( $this->pages )->register();
    }

    }
