<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Add Patterns to Admin Menu
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Adds to the submenu Apperence a link to WordPress built-in listing of patterns.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

add_action( 'admin_menu', function() {
    add_submenu_page( 'themes.php', '', 'Patterns', 'edit_theme_options', 'edit.php?post_type=wp_block', '', 2);
} );
