<?php 
/**
* Plugin Name: Strong Password Maker 
* Plugin URI:
* Description:A plugin for generating random password.
* Version:1.0
* Author:Vaibhav Gangrade
* Author URI:
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); //calling main plugin file

$plugin = 'password-generator/index.php';

if (is_plugin_active($plugin))
            { 
include_once('includes/password_generator_shortcode.php');
include_once('includes/generate_random_password.php');
   
}
?>