<?php
	if ( !function_exists( 'add_action' ) ) {
		echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
		exit;
	}
	global $wpdb;
	$tipe = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'tipe_laundry', ARRAY_A );
	$lama_service = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'lama_service_laundry', ARRAY_A );
	$jenis_pekerjaan = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'jenis_pekerjaan_laundry', ARRAY_A );
?>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('laundry'); ?>/css/sweetalert.css">
<div class="container">
	<div class="row"><h1>Harga Laundry</h1></div>
	<div class="panel-group" id="accordion-laundry" role="tablist" aria-multiselectable="true">
	  	<div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="ac-header-tipe-laundry">
		      	<h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion-laundry" href="#ac-tipe-laundry" aria-expanded="false" aria-controls="ac-tipe-laundry">
			          Manage Tipe Laundry
			        </a>
		      	</h4>
		    </div>
		    <div id="ac-tipe-laundry" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ac-header-tipe-laundry">
		      	<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<form>
							  	<div class="form-group">
								    <label for="exampleInputEmail1">Tipe Laundry yang ada</label>
								    <select class="form-control">
								    	<option value="">Select</option>
								    <?php
								    	if(!empty($tipe)){
											foreach ($tipe as $k => $v){
												echo '<option value="'.$v['id'].'">'.$v['nama'].'</option>';
											}
								    	}
									?>
								    </select>
							  	</div>
							  	<div class="form-group">
								    <label for="tambah-tipe-laundry">Tambah baru</label>
								    <input type="text" class="form-control" id="tambah-tipe-laundry" placeholder="Tipe Laundry Baru">
							  	</div>
							  	<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
		      	</div>
		    </div>
	  	</div>
	  	<div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="ac-header-lama-service">
		      	<h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion-laundry" href="#ac-lama-service" aria-expanded="" aria-controls="ac-lama-service">
			          Manage Lama Service
			        </a>
		      	</h4>
		    </div>
		    <div id="ac-lama-service" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ac-header-lama-service">
		      	<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<form>
							  	<div class="form-group">
								    <label for="exampleInputEmail1">Lama Service yang ada</label>
								    <select class="form-control">
								    	<option value="">Select</option>
								    <?php
								    	if(!empty($lama_service)){
											foreach ($lama_service as $k => $v){
												echo '<option value="'.$v['id'].'">'.$v['nama'].'</option>';
											}
								    	}
									?>
								    </select>
							  	</div>
							  	<div class="form-group">
								    <label for="tambah-lama-service">Tambah baru</label>
								    <input type="text" class="form-control" id="tambah-lama-service" placeholder="Lama Service Baru">
							  	</div>
							  	<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
		      	</div>
		    </div>
	  	</div>
	  	<div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="ac-header-jenis-pekerjaan">
		      	<h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion-laundry" href="#ac-jenis-pekerjaan" aria-expanded="" aria-controls="ac-jenis-pekerjaan">
			          Manage Jenis Pekerjaan
			        </a>
		      	</h4>
		    </div>
		    <div id="ac-jenis-pekerjaan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ac-header-jenis-pekerjaan">
		      	<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<form>
							  	<div class="form-group">
								    <label for="exampleInputEmail1">Jenis Pekerjaan yang ada</label>
								    <select class="form-control">
								    	<option value="">Select</option>
								    <?php
								    	if(!empty($jenis_pekerjaan)){
											foreach ($jenis_pekerjaan as $k => $v){
												echo '<option value="'.$v['id'].'">'.$v['nama'].'</option>';
											}
								    	}
									?>
								    </select>
							  	</div>
							  	<div class="form-group">
								    <label for="tambah-jenis-pekerjaan">Tambah baru</label>
								    <input type="text" class="form-control" id="tambah-jenis-pekerjaan" placeholder="Jenis Pekerjaan Baru">
							  	</div>
							  	<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
		      	</div>
		    </div>
	  	</div>
	  	<div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="ac-header-harga-service">
		      	<h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion-laundry" href="#ac-harga-service" aria-expanded="" aria-controls="ac-harga-service">
			          Input Harga Service Laundry
			        </a>
		      	</h4>
		    </div>
		    <div id="ac-harga-service" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ac-header-harga-service">
		      	<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<form>
							  	<div class="form-group">
								    <label for="ac-harga-service-tipe-laundry">Tipe Laundry</label>
								    <select class="form-control" id="ac-harga-service-tipe-laundry">
								    	<option value="">Select</option>
								    <?php
								    	if(!empty($tipe)){
											foreach ($tipe as $k => $v){
												echo '<option value="'.$v['id'].'">'.$v['nama'].'</option>';
											}
								    	}
									?>
								    </select>
							  	</div>
							  	<div class="form-group">
								    <label for="ac-harga-service-lama-laundry">Lama Service</label>
								    <select class="form-control" id="ac-harga-service-lama-laundry">
								    	<option value="">Select</option>
								    <?php
								    	if(!empty($lama_service)){
											foreach ($lama_service as $k => $v){
												echo '<option value="'.$v['id'].'">'.$v['nama'].'</option>';
											}
								    	}
									?>
								    </select>
							  	</div>
							  	<div class="form-group">
								    <label for="tambah-harga-service">Harga Service</label>
								    <input type="text" class="form-control" id="tambah-harga-service" placeholder="Harga Service Baru">
							  	</div>
							  	<div class="form-group">
								    <label for="ac-harga-laundry-satuan">Satuan</label>
								    <select class="form-control" id="ac-harga-laundry-satuan">
								    	<option value="kg">kg</option>
								    	<option value="pcs">pcs</option>
								    </select>
							  	</div>
							  	<button type="submit" class="btn btn-primary" id="input-harga-service">Submit</button>
							</form>
						</div>
					</div>
		      	</div>
		    </div>
	  	</div>
	</div>
	<div class="row">
	<?php
		if(!empty($tipe)):
		foreach ($tipe as $k => $v):
	?>
		<div class="col-md-12 col-sm-12">
			<h2 style="text-align: center;"><?php echo $v['nama']; ?></h2>				
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Pekerjaan</th>
						<?php
							if(!empty($lama_service)){
								foreach ($lama_service as $k1 => $v1){
									echo '<th>'.$v1['nama'].'</th>';
								};
							};
						?>
					</tr>
				</thead>
				<tbody>
				<?php
					foreach ($jenis_pekerjaan as $k2 => $v2) {
						echo '<tr><td>'.($k2+1).'</td><td>'.$v2['nama'].'</td>';
						if(!empty($lama_service)){
							foreach ($lama_service as $k1 => $v1){
								echo '<td></td>';
							};
						};
						echo '</tr>';
					}
				?>
				</tbody>
			</table>
		</div>



	<?php
		endforeach;
		else:
	?>
		<h1>Empty Data</h1>
	<?php
		endif;
	?>
	</div>
</div>

<script src="<?php echo plugins_url('laundry'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo plugins_url('laundry'); ?>/js/sweetalert.js"></script>
<script src="<?php echo plugins_url('laundry'); ?>/js/harga-laundry.js"></script>