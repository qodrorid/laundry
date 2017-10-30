<?php
	if ( !function_exists( 'add_action' ) ) {
		echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
		exit;
	}
	global $wpdb;
?>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/sweetalert.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/chosen.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/chosen.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/custom.css">
<div class="container">
	<div class="row"><h1>Laporan Laundry</h1></div>
	<div class="panel-group row" id="accordion-laundry" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="ac-header-view-transkasi-laundry">
		      	<h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion-laundry" href="#ac-view-transkasi-laundry" aria-expanded="true" aria-controls="ac-view-transkasi-laundry">
			          Transaksi Laundry
			        </a>
		      	</h4>
		    </div>
		    <div id="ac-view-transkasi-laundry" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="ac-header-view-transkasi-laundry">
		      	<div class="panel-body">
					<form method="POST">
					  	<div class="form-group">
						    <label for="search">Search</label>
						    <input type="text" name="">
						    </select>
					  	</div>
					</form>
					<div id="style-table"></div>
					<table class="table table-bordered table-striped table-hover table-condensed" id="view-transaksi-laundry">
						<thead>
							<tr>
								<th id="th_no">No</th>
								<th id="th_kustomer">Kustomer</th>
								<th id="th_pekerja">Pekerja</th>
								<th id="th_waktu_pengerjaan">Waktu Pengerjaan</th>
								<th id="th_parfum">Parfum</th>
								<th id="th_tipe_laundry">Tipe Laundry</th>
								<th id="th_lama_service">Lama Service</th>
								<th id="th_berat">Berat</th>
								<th id="th_tambahan">Tambahan</th>
								<th id="th_diskon">Diskon</th>
								<th id="th_total">Total</th>
								<th id="th_keterangan">Keterangan</th>
								<th id="th_status">Status</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
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
<script type="text/javascript">
	var options = {
		"bDestroy": true,
	    "processing": true,
	    "serverSide": true,
	    "ajax": {
	        'url': laundry_config.ajax_url,
	        'type': 'POST',
	        'data': {
	            'action': 'get_transaksi'
	        }
	    },
	    "columns": [
	        { "data": "no" },
	        { "data": "customer" },
	        { "data": "pekerja" },
	        { "data": "waktu_pengerjaan" },
	        { "data": "parfum" },
	        { "data": "tipe" },
	        { "data": "lama" },
	        { "data": "berat" },
	        { "data": "tambahan_harga" },
	        { "data": "nilai_diskon" },
	        { "data": "harga" },
	        { "data": "keterangan" },
	        { "data": "status" }
	    ],
	    "dom": 'lBrtip',
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [ 0 ] }
        ],
        "footerCallback": function ( row, data, start, end, display ) {
        	var style = '<style>';
            jQuery('#view-transaksi-laundry thead th').map(function(no, b){
                var id = jQuery(this).attr('id');
                var align = 'left';
                if(
                    id=='th_status' 
                    || id=='th_no'
                    || id=='th_pekerja'
                ){
                    align = 'center';
                }else if(
                    id=='th_berat'
                    || id=='th_tambahan'
                    || id=='th_diskon'
                    || id=='th_total'
                ){
                    align = 'right';
                }
                style += '#view-transaksi-laundry tbody td:nth-child('+(no+1)+'){ text-align: '+align+' !important; }';
            });
            style += '</style>';
            jQuery('#style-table').html(style);
        }
	}
	jQuery(document).ready(function(){
		jQuery('#view-transaksi-laundry').dataTable(options);	
	});
</script>