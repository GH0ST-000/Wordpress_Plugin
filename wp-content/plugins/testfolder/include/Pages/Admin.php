<?php

namespace Inc\Pages;

use \Inc\Base\BaseController;
use Inc\Api\SettingApi;

class Admin extends  BaseController{

    public $settings;

    public $pages = array();

    public $subpages = array();


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
        $this->subpages = array(
    array(
        'parent_slug' => 'first_plugin',
        'page_title' => 'Custom Post Types',
        'menu_title' => 'CPT',
        'capability' => 'manage_options',
        'menu_slug' => 'first_plugin_cpt',
        'callback' => function() { echo '<h1>CPT Manager</h1>'; }
    ),
   array(
    'parent_slug' => 'first_plugin',
    'page_title' => 'Custom Taxonomies',
    'menu_title' => 'Taxonomies',
    'capability' => 'manage_options',
    'menu_slug' => 'first_plugin_taxonomies',
    'callback' => function() { echo '<h1>Taxonomies Manager</h1>'; }
),
    array(
        'parent_slug' => 'first_plugin',
        'page_title' => 'Custom Widgets',
        'menu_title' => 'Widgets',
        'capability' => 'manage_options',
        'menu_slug' => 'first_plugin_widgets',
        'callback' => function() { echo '<h1>Widgets Manager</h1>'; }
    )

);

    }


    public function register()
    {
        $this->settings->addPages( $this->pages )->withSubPage( 'Dashboard')->addSubPages($this->subpages)->register();
    }
    }

