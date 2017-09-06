<?php

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

function add_laundry_menu() {
	add_menu_page( 'Managemen Laundry', 'Laundry', 'create_users', 'managemen_laundry', 'dasboard_laundry', '
	dashicons-book-alt', 20 );
	add_submenu_page( 'managemen_laundry', 'Laporan Laundry', 'Laporan', 'create_users', 'managemen_laundry', 'dasboard_laundry' );
	add_submenu_page( 'managemen_laundry', 'Harga Laundry', 'Harga Laundry', 'manage_options', 'harga_laundry', 'harga_laundry' );
	add_submenu_page( 'managemen_laundry', 'Transaksi Laundry', 'Transaksi', 'create_users', 'transaksi_laundry', 'transaksi_laundry' );
}

function dasboard_laundry() {
	echo 'dasboard_laundry';
}

function harga_laundry() {
	include 'template/harga-laundry.php';
}

function transaksi_laundry() {
	echo 'transaksi_laundry';
}

function laundry_install() {
	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    $sql = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."tipe_laundry (
        id int(11) NOT NULL AUTO_INCREMENT,
        nama varchar(100) DEFAULT '' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta( $sql );

    $sql1 = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."jenis_pekerjaan_laundry (
        id int(11) NOT NULL AUTO_INCREMENT,
        nama varchar(100) DEFAULT '' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta( $sql1 );

    $sql2 = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."lama_service_laundry (
        id int(11) NOT NULL AUTO_INCREMENT,
        nama varchar(100) DEFAULT '' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta( $sql2 );

    $sql3 = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."harga_service_laundry (
        id int(11) NOT NULL AUTO_INCREMENT,
        tipe_laundry int(11) NOT NULL,
        lama_service int(11) NOT NULL,
        harga int(11) NOT NULL,
        satuan varchar(20) DEFAULT '' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta( $sql3 );

    $sql4 = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."persentase_laundry (
        id int(11) NOT NULL AUTO_INCREMENT,
        tipe_laundry int(11) NOT NULL,
        jenis_pekerjaan int(11) NOT NULL,
        persentase int(11) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta( $sql4 );

    $sql5 = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."parfum_laundry (
        id int(11) NOT NULL AUTO_INCREMENT,
        nama varchar(100) DEFAULT '' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta( $sql5 );

    $sql6 = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."transaksi_laundry (
        id int(11) NOT NULL AUTO_INCREMENT,
        customer_id int(11) NOT NULL,
        pekerja_id int(11) NOT NULL,
        waktu_masuk datetime,
        waktu_keluar datetime,
        parfum_id int(11) NOT NULL,
        keterangan text,
        tipe_laundry int(11) NOT NULL,
        lama_service int(11) NOT NULL,
        berat int(11) NOT NULL,
        harga int(11) NOT NULL,
        diskon int(11) NOT NULL,
        status varchar(100) DEFAULT '' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta( $sql6 );

    $sql7 = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."transaksi_pekerja_laundry (
        id int(11) NOT NULL AUTO_INCREMENT,
        customer_id int(11) NOT NULL,
        pekerja_id int(11) NOT NULL,
        jenis_pekerjaan int(11) NOT NULL,
        transaksi_id int(11) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta( $sql7 );

    $sql8 = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."diskon_laundry (
        id int(11) NOT NULL AUTO_INCREMENT,
        nilai_diskon int(11) NOT NULL,
        keterangan varchar(100) DEFAULT '' NOT NULL,
        tipe varchar(30) DEFAULT '' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta( $sql8 );
}

function add_role_laundry(){
	$role = get_role('pekerja');
	if ( ! empty($role) ) {
	    $role->add_cap( 'list_users' );
	    $role->add_cap( 'remove_users' );
	    $role->add_cap( 'create_users' );
	    $role->add_cap( 'edit_users' );

	    // Never used, will be removed. create_users or
	    // promote_users is the capability you're looking for.
	    $role->add_cap( 'add_users' );
	}else{
	    $result = add_role( 
			'pekerja', 
			__('Pekerja' ),
			array(
				'read' => true, // true allows this capability
			)
		);
	}

	$role = get_role('customer');
	if ( empty($role) ) {
		$result = add_role( 
			'customer', 
			__('Customer' ),
			array(
				'read' => true, // true allows this capability
			)
		);
	}
}

function insert_default_value_laundry(){
	global $wpdb;
    $check_tipe_laundry = $wpdb->get_var( "SELECT COUNT(*) FROM ".$wpdb->prefix."tipe_laundry" );
    if(!empty($check_tipe_laundry)){
    	return ;
    }
	$wpdb->insert( $wpdb->prefix."tipe_laundry", array( 'nama' => 'Cuci Setrika' ) );
	$wpdb->insert( $wpdb->prefix."tipe_laundry", array( 'nama' => 'Cuci Kering' ) );
	$wpdb->insert( $wpdb->prefix."tipe_laundry", array( 'nama' => 'Setrika' ) );
	$wpdb->insert( $wpdb->prefix."tipe_laundry", array( 'nama' => 'Bed Cover' ) );
	$wpdb->insert( $wpdb->prefix."tipe_laundry", array( 'nama' => 'Selimut' ) );
	$wpdb->insert( $wpdb->prefix."tipe_laundry", array( 'nama' => 'Gordeng' ) );

	$wpdb->insert( $wpdb->prefix."jenis_pekerjaan_laundry", array( 'nama' => 'Terima Laundry' ) );
	$wpdb->insert( $wpdb->prefix."jenis_pekerjaan_laundry", array( 'nama' => 'Cuci Baju' ) );
	$wpdb->insert( $wpdb->prefix."jenis_pekerjaan_laundry", array( 'nama' => 'Jemur Baju' ) );
	$wpdb->insert( $wpdb->prefix."jenis_pekerjaan_laundry", array( 'nama' => 'Angkat Jemuran' ) );
	$wpdb->insert( $wpdb->prefix."jenis_pekerjaan_laundry", array( 'nama' => 'Balik Baju' ) );
	$wpdb->insert( $wpdb->prefix."jenis_pekerjaan_laundry", array( 'nama' => 'Setrika' ) );
	$wpdb->insert( $wpdb->prefix."jenis_pekerjaan_laundry", array( 'nama' => 'Packing' ) );
	$wpdb->insert( $wpdb->prefix."jenis_pekerjaan_laundry", array( 'nama' => 'Terima Pengambilan Laundry' ) );
	
	$wpdb->insert( $wpdb->prefix."lama_service_laundry", array( 'nama' => 'Reguler 2 hari' ) );
	$wpdb->insert( $wpdb->prefix."lama_service_laundry", array( 'nama' => 'Reguler 1 hari' ) );
	$wpdb->insert( $wpdb->prefix."lama_service_laundry", array( 'nama' => 'Kilat 6 jam' ) );
}

function save_custom_user_profile_fields($user_id){
    # again do this only if you can
    if(!current_user_can('create_users'))
        return false;

    # save my custom field
    update_usermeta($user_id, 'alamat', $_POST['alamat']);
    update_usermeta($user_id, 'no_hp', $_POST['no_hp']);
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

function input_harga_service() {
    global $wpdb;
    $ret = array( 'error' => true );
    if(!empty($_POST)){
    	if(empty($_POST['tipe_laundry'])){
    		$ret['msg'] = 'Tipe Laundry kosong!';
    	}else if(empty($_POST['lama_laundry'])){
    		$ret['msg'] = 'Lama Laundry kosong!';
    	}else if(empty($_POST['harga_laundry'])){
    		$ret['msg'] = 'Harga Laundry kosong!';
    	}else if(empty($_POST['satuan'])){
    		$ret['msg'] = 'Satuan kosong!';
    	}
    	if(empty($ret['msg'])){
    		$sql = $wpdb->prepare('SELECT id FROM '.$wpdb->prefix.'harga_service_laundry where tipe_laundry=%s and lama_service=%s', $_POST['tipe_laundry'], $_POST['lama_laundry']);
    		$checkId = $wpdb->get_col($sql);
    		$data = array( 
				'tipe_laundry'	=> $_POST['tipe_laundry'],
				'lama_service'	=> $_POST['lama_laundry'],
				'harga'			=> $_POST['harga_laundry'],
				'satuan'		=> $_POST['satuan']
			);
    		$ret['error'] = false;
    		if(!empty($checkId)){
    			foreach ($checkId as $id) {
    				$wpdb->update($wpdb->prefix.'harga_service_laundry', $data, array( 'id' =>  $id));
    				$ret['msg'] = 'Success update harga service laundry!';
    			}
    		}else{
    			$wpdb->insert($wpdb->prefix.'harga_service_laundry', $data);
				$ret['msg'] = 'Success insert harga service laundry!';
    		}
    	}
    }
    echo json_encode($ret);
    wp_die();
}