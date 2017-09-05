<?php 
/*
Plugin Name: Laundry
Plugin URI: https://maremjaya.com
Description: This is plugin wordpress input data laundry and workshop laundry
Version: 1.0.0
Author: Qodr Magetan
Author URI: https://qodr.or.id
License: GPL2
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

include 'functions.php';

add_action( 'admin_menu', 'add_laundry_menu' );
add_action( 'show_user_profile', 'custom_user_profile_fields' );
add_action( 'edit_user_profile', 'custom_user_profile_fields' );
add_action( "user_new_form", "custom_user_profile_fields" );

add_action('user_register', 'save_custom_user_profile_fields');
add_action('edit_user_profile_update', 'save_custom_user_profile_fields');

register_activation_hook( __FILE__, 'laundry_install' );
register_activation_hook( __FILE__, 'insert_default_value_laundry' );
register_activation_hook( __FILE__, 'add_role_laundry' );

add_action( 'wp_ajax_input-harga-lama-service', 'input_harga_service' );