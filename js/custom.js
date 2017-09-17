jQuery('#input-harga-service').on('click', function(e){
	e.preventDefault();
	var tipe_laundry = jQuery('#ac-harga-service-tipe-laundry').val();
	if(!tipe_laundry)
		return swal({ title: 'Tipe Laundry kosong!', type: 'error'});
	var lama_laundry = jQuery('#ac-harga-service-lama-laundry').val();
	if(!lama_laundry)
		return swal({ title: 'Lama Laundry kosong!', type: 'error'});
	var harga_laundry = jQuery('#tambah-harga-service').val();
	if(!harga_laundry)
		return swal({ title: 'Harga Laundry kosong!', type: 'error'});
	var satuan = jQuery('#ac-harga-laundry-satuan').val();
	if(!satuan)
		return swal({ title: 'Satuan kosong!', type: 'error'});
	jQuery.ajax({
		url: ajaxurl,
		type: 'POST',
		data: {
			action: 'input-harga-lama-service',
			tipe_laundry: tipe_laundry,
			lama_laundry: lama_laundry,
			harga_laundry: harga_laundry,
			satuan: satuan
		},
		success: function(respone){
			var data = JSON.parse(respone);
			if(data.error){
				swal({ title: data.msg, type: 'error' });
			}else{
				swal({ title: data.msg, type: 'success' });
			}
		}
	})
});

jQuery('#ac-input-persentase').on('click', function(e){
	e.preventDefault();
	var tipe_laundry = jQuery('#ac-persentase-tipe-laundry').val();
	if(!tipe_laundry)
		return swal({ title: 'Tipe Laundry kosong!', type: 'error'});
	var pekerjaan_laundry = jQuery('#ac-persentase-jenis-pekerjaan').val();
	if(!pekerjaan_laundry)
		return swal({ title: 'Jenis Pekerjaan Laundry kosong!', type: 'error'});
	var persentase = jQuery('#ac-persentase-laundry').val();
	if(!persentase)
		return swal({ title: 'Persentase kosong!', type: 'error'});
	jQuery.ajax({
		url: ajaxurl,
		type: 'POST',
		data: {
			action: 'ac-input-persentase',
			tipe_laundry: tipe_laundry,
			pekerjaan_laundry: pekerjaan_laundry,
			persentase: persentase
		},
		success: function(respone){
			var data = JSON.parse(respone);
			if(data.error){
				swal({ title: data.msg, type: 'error' });
			}else{
				swal({ title: data.msg, type: 'success' });
			}
		}
	})
});

jQuery('#ac-input-bagi-hasil').on('click', function(e){
	e.preventDefault();
	var bagi_hasil = jQuery('#ac-rumus-dasar-bagi-hasil').val();
	if(!bagi_hasil)
		return swal({ title: 'Bagi Hasil kosong!', type: 'error'});
	jQuery.ajax({
		url: ajaxurl,
		type: 'POST',
		data: {
			action: 'update-bagi-hasil',
			bagi_hasil: bagi_hasil
		},
		success: function(respone){
			var data = JSON.parse(respone);
			if(data.error){
				swal({ title: data.msg, type: 'error' });
			}else{
				swal({ title: data.msg, type: 'success' });
			}
		}
	})
});

jQuery('#input-parfum-laundry').on('click', function(e){
	e.preventDefault();
	var parfum_laundry = jQuery('#tambah-parfum-laundry').val();
	if(!parfum_laundry)
		return swal({ title: 'Bagi Hasil kosong!', type: 'error'});
	jQuery.ajax({
		url: ajaxurl,
		type: 'POST',
		data: {
			action: 'update-parfum-laundry',
			parfum_laundry: parfum_laundry
		},
		success: function(respone){
			var data = JSON.parse(respone);
			if(data.error){
				swal({ title: data.msg, type: 'error' });
			}else{
				swal({ title: data.msg, type: 'success' });
			}
		}
	})
});

jQuery('#input-tipe-laundry').on('click', function(e){
	e.preventDefault();
	var tipe_laundry = jQuery('#tambah-tipe-laundry').val();
	if(!tipe_laundry)
		return swal({ title: 'Tipe Laundry kosong!', type: 'error'});
	jQuery.ajax({
		url: ajaxurl,
		type: 'POST',
		data: {
			action: 'update-tipe-laundry',
			tipe_laundry: tipe_laundry
		},
		success: function(respone){
			var data = JSON.parse(respone);
			if(data.error){
				swal({ title: data.msg, type: 'error' });
			}else{
				swal({ title: data.msg, type: 'success' });
			}
		}
	})
});

jQuery('#input-lama-service').on('click', function(e){
	e.preventDefault();
	var lama_service = jQuery('#tambah-lama-service').val();
	if(!lama_service)
		return swal({ title: 'Tipe Laundry kosong!', type: 'error'});
	jQuery.ajax({
		url: ajaxurl,
		type: 'POST',
		data: {
			action: 'update-lama-service',
			lama_service: lama_service
		},
		success: function(respone){
			var data = JSON.parse(respone);
			if(data.error){
				swal({ title: data.msg, type: 'error' });
			}else{
				swal({ title: data.msg, type: 'success' });
			}
		}
	})
});

jQuery('#input-jenis-pekerjaan').on('click', function(e){
	e.preventDefault();
	var jenis_pekerjaan = jQuery('#tambah-jenis-pekerjaan').val();
	if(!jenis_pekerjaan)
		return swal({ title: 'Tipe Laundry kosong!', type: 'error'});
	jQuery.ajax({
		url: ajaxurl,
		type: 'POST',
		data: {
			action: 'update-jenis-pekerjaan',
			jenis_pekerjaan: jenis_pekerjaan
		},
		success: function(respone){
			var data = JSON.parse(respone);
			if(data.error){
				swal({ title: data.msg, type: 'error' });
			}else{
				swal({ title: data.msg, type: 'success' });
			}
		}
	})
});

jQuery('#input-diskon-laundry').on('click', function(e){
	e.preventDefault();
	var diskon_laundry = jQuery('#nilai-diskon-laundry').val();
	if(!diskon_laundry)
		return swal({ title: 'Nilai Diskon Laundry kosong!', type: 'error'});
	var tipe_diskon = jQuery('#tipe-diskon').val();
	if(!tipe_diskon)
		return swal({ title: 'Tipe Diskon Laundry kosong!', type: 'error'});
	var keterangan = jQuery('#keterangan-diskon-laundry').val();
	if(!keterangan)
		return swal({ title: 'Keterangan Diskon Laundry kosong!', type: 'error'});
	jQuery.ajax({
		url: ajaxurl,
		type: 'POST',
		data: {
			action: 'update-diskon-laundry',
			diskon_laundry: diskon_laundry,
			tipe_diskon: tipe_diskon,
			keterangan: keterangan,
		},
		success: function(respone){
			var data = JSON.parse(respone);
			if(data.error){
				swal({ title: data.msg, type: 'error' });
			}else{
				swal({ title: data.msg, type: 'success' });
			}
		}
	})
});