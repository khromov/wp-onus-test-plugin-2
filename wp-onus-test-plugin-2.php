<?php
/*
Plugin Name: Test plugin 2 for Project Onus
Plugin URI:
Description: A plugin with some cool dependencies
Version: 1.0
Author: khromov
Author URI: http://profiles.wordpress.org/khromov/
GitHub Plugin URI: khromov/wp-one-test
License: GPL2
*/


add_action('plugins_loaded', function() {
  if(!apply_filters('wp_dependency_management_enabled', false)) {
    require 'vendor/autoload.php';
  }
  else {
    WP_Onus::register(__DIR__);
  }
});