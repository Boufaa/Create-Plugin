<?php
/*
Plugin Name: m&m
Description: extension de wordpress avec 2 sous menus 
Version: 1.0
Author: Hassan Boufaa
Author URI: https://automattic.com/wordpressBrief3/
License: GPLv2 or later
Text Domain: m&m
*/
?>



<?php

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
    
	 //parameters details
	 //add_management_page($page_title, $menu_title, $capability,$menu_slug, $function);
    
	 //add a new setting page udner setting menu
    // add_management_page('Description', 'Description', 'manage_options',__FILE__,'Description_admin_page');
     //add new menu and its sub menu 
    add_menu_page('Description title', 'm&m', 'manage_options','Description_page', 'Description_admin_page');
    add_submenu_page( 'Description_page', 'Page title', 'Settings','manage_options', 'Settings', 'mt_settings_page');
   
    
}


function Description_admin_page () {
  echo '<div class="wrap">
  <h1>Hello!</h1>
  <p>it is a plugin with two submenus. A page for the general description of my plugin.Configuration page an input text field, textarea for the description,
     an option list and a save button
  </p>
</div>';
}

// mt_settings_page() displays the page content for the Test Settings submenu
function mt_settings_page() {
    echo "<h2>" . __( 'Settings Configurations', 'menu-test' ) . "</h2>";
	include_once('setting_page.php');
}

?>