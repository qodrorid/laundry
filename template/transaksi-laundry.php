<?php
	if ( !function_exists( 'add_action' ) ) {
		echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
		exit;
	}
	global $wpdb;
	$customers = get_user_laundry(array( 'role' => 'customer' ));
	$pekerja = get_user_laundry(array( 'role' => 'pekerja' ));
	$parfum_laundry = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'parfum_laundry', ARRAY_A );
	$diskon_laundry = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'diskon_laundry', ARRAY_A );
	$tipe = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'tipe_laundry', ARRAY_A );
	$lama_service = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'lama_service_laundry', ARRAY_A );
    // echo "<pre>".print_r($customers, 1)."</pre>";
?>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/sweetalert.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/chosen.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/chosen.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/bootstrap-datetimepicker.min.css">
<div class="container">
	<div class="row"><h1>Transaksi Customer Laundry</h1></div>
	<div class="panel-group" id="accordion-laundry" role="tablist" aria-multiselectable="true">
	  	<div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="ac-header-transkasi-laundry">
		      	<h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion-laundry" href="#ac-transkasi-laundry" aria-expanded="false" aria-controls="ac-transkasi-laundry">
			          Manage Transaksi Laundry
			        </a>
		      	</h4>
		    </div>
		    <div id="ac-transkasi-laundry" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ac-header-transkasi-laundry">
		      	<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<form>
							  	<div class="form-group">
								    <label for="customer-laundry">Nama Customer</label>
								    <select id="customer-laundry" class="form-control chosen-select">
								    	<option>Pilih Customer</option>
								    <?php
								    	foreach ($customers as $customer) {
								    		echo '<option value="'.$customer['id'].'">'.$customer['display_name'].' | '.$customer['alamat'].' | '.$customer['no_hp'].'</option>';
								    	}
								    ?>
								    </select>
							  	</div>
							  	<div class="form-group">
								    <label for="pekerja-laundry">Pekerja Laundry</label>
								    <select id="pekerja-laundry" class="form-control chosen-select">
								    	<option>Pilih Pekerja</option>
								    <?php
								    	foreach ($pekerja as $karyawan) {
								    		echo '<option value="'.$karyawan['id'].'">'.$karyawan['display_name'].' | '.$karyawan['alamat'].' | '.$karyawan['no_hp'].'</option>';
								    	}
								    ?>
								    </select>
							  	</div>
							  	<div class="form-group">
								    <label for="waktu-masuk-laundry">Waktu Masuk</label>
					                <div class='input-group date' id='datetimepicker1'>
					                    <input type='text' class="form-control" id="waktu-masuk-laundry" placeholder="Waktu Masuk Laundry"/>
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
								</div>
							  	<div class="form-group">
								    <label for="waktu-keluar-laundry">Waktu Keluar</label>
					                <div class='input-group date' id='datetimepicker1'>
					                    <input type='text' class="form-control" id="waktu-keluar-laundry" placeholder="Waktu Keluar Laundry"/>
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
							  	</div>
							  	<div class="form-group">
								    <label for="parfum-laundry">Parfum Laundry</label>
								    <select class="form-control" id="parfum-laundry">
								    	<option value="">Select Parfum Laundry</option>
								    <?php
								    	if(!empty($parfum_laundry)){
											foreach ($parfum_laundry as $k => $v){
												echo '<option value="'.$v['id'].'">'.$v['nama'].'</option>';
											}
								    	}
									?>
								    </select>
							  	</div>
							  	<div class="form-group">
								    <label for="keterangan-laundry">Keterangan Laundry</label>
								    <input type="text" class="form-control" id="keterangan-laundry" placeholder="Keterangan Laundry">
							  	</div>
							  	<div class="form-group">
								    <label for="tipe-laundry">Tipe Laundry</label>
								    <input type="text" class="form-control" id="tipe-laundry" placeholder="Tipe Laundry">
							  	</div>
							  	<div class="form-group">
								    <label for="lama-service-laundry">Lama Service Laundry</label>
								    <input type="text" class="form-control" id="lama-service-laundry" placeholder="Lama Service Laundry">
							  	</div>
							  	<div class="form-group">
								    <label for="berat-laundry">Berat Laundry</label>
								    <input type="text" class="form-control" id="berat-laundry" placeholder="Berat Laundry">
							  	</div>
							  	<div class="form-group">
								    <label for="total-harga-laundry">Total Harga Laundry</label>
								    <input type="text" class="form-control" id="total-harga-laundry" placeholder="Total Harga Laundry">
							  	</div>
							  	<div class="form-group">
								    <label for="diskon-laundry">Diskon Laundry</label>
								    <input type="text" class="form-control" id="diskon-laundry" placeholder="Diskon Laundry">
							  	</div>
							  	<div class="form-group">
								    <label for="status-laundry">Status Laundry</label>
								    <input type="text" class="form-control" id="status-laundry" placeholder="Status Laundry">
							  	</div>
							  	<button type="submit" class="btn btn-primary" id="input-tipe-laundry">Submit</button>
							</form>
						</div>
					</div>
		      	</div>
		    </div>
	  	</div>
	</div>
</div>
<script src="<?php echo plugins_url('laundry'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo plugins_url('laundry'); ?>/js/sweetalert.js"></script>
<script src="<?php echo plugins_url('laundry'); ?>/js/chosen.jquery.min.js"></script>
<script src="<?php echo plugins_url('laundry'); ?>/js/jquery.dataTables.min.js"></script>
<script src="<?php echo plugins_url('laundry'); ?>/js/moment.min.js"></script>
<script src="<?php echo plugins_url('laundry'); ?>/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo plugins_url('laundry'); ?>/js/custom.js"></script>