<?php 
/*
Plugin Name: Laundry
Plugin URI: https://laundry.com
Description: This is plugin wordpress input data laundry and workshop laundry
Version: 1.0.0
Author: Arieful Khakim
Author URI: https://ariefulkhakim.github.io
License: GPL2
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

include 'role.php';

// Add Menu Admin
function premium_add_admin_page() {

	//Generate Premium Admin Page
	add_menu_page( 'Premuim Theme Options', 'Laundry', 'create_users', 'arieful_premium', 'premium_theme_create_page', '
	dashicons-admin-home', 50 );

	//Generate Premium Admin Sub Page
	add_submenu_page( 'arieful_premium', 'Premium Theme Options', 'Harga Laundry', 'manage_options', 'arieful_premium', 'premium_theme_create_page' );

	add_submenu_page( 'arieful_premium', 'Premium CSS Options', 'Transaksi', 'create_users', 'arieful_premium_css', 'premium_theme_settings_page' );
}

add_action( 'admin_menu', 'premium_add_admin_page' );

function premium_theme_create_page() {
	
}

function custom_user_profile_fields($user){
    ?>
    <h3>Keterangan Tambahan</h3>
    <table class="form-table">
        <tr>
            <th><label for="company">Alamat</label></th>
            <td>
                <input type="text" class="regular-text" name="alamat" value="<?php echo esc_attr( get_the_author_meta( 'alamat', $user->ID ) ); ?>" id="alamat" /><br />
                <span class="description">Dimana Alamatmu</span>
            </td>
        </tr>
        <tr>
            <th><label for="company">Nomer Handphone</label></th>
            <td>
                <input type="text" class="regular-text" name="no_hp" value="<?php echo esc_attr( get_the_author_meta( 'no_hp', $user->ID ) ); ?>" id="no_hp" /><br />
                <span class="description">Masukan Nomermu</span>
            </td>
        </tr>
    </table>
<?php
}
add_action( 'show_user_profile', 'custom_user_profile_fields' );
add_action( 'edit_user_profile', 'custom_user_profile_fields' );
add_action( "user_new_form", "custom_user_profile_fields" );

function save_custom_user_profile_fields($user_id){
    # again do this only if you can
    if(!current_user_can('create_users'))
        return false;

    # save my custom field
    update_usermeta($user_id, 'alamat', $_POST['alamat']);
    update_usermeta($user_id, 'no_hp', $_POST['no_hp']);
}
add_action('user_register', 'save_custom_user_profile_fields');
add_action('edit_user_profile_update', 'save_custom_user_profile_fields');



global $tipe_laundry_db_version;
$tipe_laundry_db_version = '1.0';

function tipe_laundry_install() {
	global $wpdb;
	global $tipe_laundry_db_version;

	$table_name = $wpdb->prefix . 'tipe_laundry';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id int(11) NOT NULL AUTO_INCREMENT,
		nama varchar(100) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	update_option( 'tipe_laundry_db_version', $tipe_laundry_db_version );
}

register_activation_hook( __FILE__, 'tipe_laundry_install' );
