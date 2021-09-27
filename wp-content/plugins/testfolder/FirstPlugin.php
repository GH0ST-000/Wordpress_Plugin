<?php

/**
 * @package Firstplugin
 */
/*
 Plugin Name:FirstPlugin
 Description: This Is My First Attempt To Write Custom Plugin.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
 Version:1.0.0

 */
if (!defined('ABSPATH')) {
    die();
}

if (file_exists(dirname(__FILE__).'/vendor/autoload.php')){
        require_once dirname(__FILE__).'./vendor/autoload.php';
}
use Inc\activate;
use  Inc\deactive;
use Inc\Admin\AdminPages;

class FirstPlugin{
    public $plugin;

    public function __construct()
    {
        $this->plugin=plugin_basename(__FILE__);
    }

    function register(){
        add_action('init',array($this,'custom_post'));
        add_action('admin_menu',array($this,'add_admin_pages'));
        add_action('admin_enqueue_scripts',array($this,'enqueue'));
        add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
    }
    public function settings_link( $links ) {
        $settings_link = '<a href="admin.php?page=first_plugin">Settings</a>';
        array_push( $links, $settings_link );
        return $links;
    }


    public function add_admin_pages() {
        add_menu_page( 'First Plugin', 'First Plugin', 'manage_options', 'first_plugin', array( $this, 'admin_index' ), 'dashicons-store', 90 );
    }

    public function admin_index(){
        require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
    }



    public function custom_post(){
        register_post_type('book',['public'=>true,'label'=>'Books']);
    }
    function  enqueue(){
        wp_enqueue_style('mypluginstyle',plugins_url('/assets/style.css',__FILE__));
        wp_enqueue_script('mypluginscript',plugins_url('/assets/script.js',__FILE__));
    }
    public function active(){
        activate::activate();
    }
    public function deactive(){
        deactive::deactivate();
    }

}

$firstplugin = new FirstPlugin();
$firstplugin->register();





