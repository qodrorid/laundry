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