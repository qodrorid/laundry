<?php
	if ( !function_exists( 'add_action' ) ) {
		echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
		exit;
	}
	global $wpdb;
?>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/sweetalert.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/custom.css">
<div class="container">
	<div class="row"><h1>Laporan Laundry</h1></div>
</div>
<script src="<?php echo plugins_url('laundry'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo plugins_url('laundry'); ?>/js/sweetalert.js"></script>
<script src="<?php echo plugins_url('laundry'); ?>/js/custom.js"></script>