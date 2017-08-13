<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Harga Laundry</title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>/css/bootstrap.min.css">
</head>
<body>

	<div id="pekerjaan">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h2 style="text-align: center;">CUCI SETRIKA</h2>				
				</div>
			</div>
		</div>
	</div>

	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Pekerjaan</th>
			<th>Reg-2 hari 4000/kg</th>
			<th>Reg-1 hari 5000/kg</th>
			<th>Kilat-6 jam 8000/kg</th>
			<th>Opsi</th>
		</tr>
		
		<?php
		//iclude file koneksi ke database
		
		
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$results = $GLOBALS['wpdb']->get_results( 'SELECT * FROM wp_cuci_setrika WHERE option_id = 1', OBJECT );
		
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($results) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($results)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['pekerjaan'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['reg_2_hari'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['reg_1_hari'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['kilat_6_jam'].'</td>';	//menampilkan data jurusan dari database
					echo '<td>'.$data['presentase'].'</td>';	//menampilkan data jurusan dari database
					echo '<td><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
	

	<?php
	?>

	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
</body>
</html>