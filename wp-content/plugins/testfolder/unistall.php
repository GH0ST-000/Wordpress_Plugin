<?php
/**
 * Trigger this file on plugin unistall
 * @package FirstPlugin
 */

if (! defined ('WP_UNISTALL_PLUGIN')){
    die();
}

//$books=get_post(array('post_type'=>'book','numberposts'=>'-1'));
//foreach ($books as $book){
//    wp_delete_post($book->ID,true);
//}
global $wpdb;
$wpdb->query("DELETE *FROM wp_post WHERE post_type='book'");
$wpdb->query("DELETE *FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_post)");
$wpdb->query("DELETE *FROM wp_term_relations WHERE object_id NOT IN (SELECT id FROM wp_post)");
