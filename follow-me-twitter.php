<?php
/*
Plugin Name: Follow me on Twitter
Plugin URI: https://alteredego.us
Description: Adds 'Follow me on Twitter' after every post
Author: Raz Damaschin
Author URI: https://alteredego.us
Version: 1.0
*/

/*********************************************
* global variables
*********************************************/

$mfwp_plugin_name = 'Follow Me On Twitter';

// retrieve plugin settings
$mfwp_options = get_option('mfwp_settings');

/*********************************************
* includes
*********************************************/

include('includes/scripts.php');
include('includes/data-processing.php');
include('includes/display-functions.php');
include('includes/admin-page.php');
