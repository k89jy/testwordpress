<?php

/**
 * @package deletePlugin
 */
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

//clear database

// $books = get_post(array('post_type' => 'book', 'numberposts' => -1));

// foreach ($books as $book) {
//     wp_delete_post($book->ID, true);
// }

// Access the database via SQL
global $wpdb;

//uninstall plugin
$wpdb->query("DELETE FROM wp_posts where post_type = 'books'");
$wpdb->query("DELETE FROM wp_postmeta where post_id NOT IN(select id from wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships where object_id NOT IN(select id from wp_posts)");
