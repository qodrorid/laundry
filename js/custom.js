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

jQuery('#input-transaksi-customer').on('click', function(e){
	e.preventDefault();
	var customer_laundry = jQuery('#customer-laundry').val();
	if(!customer_laundry)
		return swal({ title: 'Customer Laundry belum diisi!', type: 'error'});
	jQuery.ajax({
		url: ajaxurl,
		type: 'POST',
		data: {
			action: 'input-transaksi-customer',
			customer_laundry: customer_laundry,
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

jQuery('#input-general-setting-laundry').on('click', function(e){
	e.preventDefault();
	var lama_laundry = jQuery('#default-lama-laundry').val();
	if(!lama_laundry)
		return swal({ title: 'Lama Laundry belum dipilih!', type: 'error'});
	var default_tipe_laundry = jQuery('#default-tipe-laundry').val();
	if(!default_tipe_laundry)
		return swal({ title: 'Tipe Laundry belum dipilih!', type: 'error'});
	var default_parfum_laundry = jQuery('#default-parfum-laundry').val();
	if(!default_parfum_laundry)
		return swal({ title: 'Parfum Laundry belum dipilih!', type: 'error'});
	jQuery.ajax({
		url: ajaxurl,
		type: 'POST',
		data: {
			action: 'set-general-setting',
			lama_laundry: lama_laundry,
			default_tipe_laundry: default_tipe_laundry,
			default_parfum_laundry: default_parfum_laundry,
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

jQuery('#customer-laundry').chosen({
	width: '100%',
	no_results_text: 'Tidak ditemukan. Klik di sini untuk membuat data customer '
});
jQuery('body').on('click', '#customer_laundry_chosen .no-results', function(){
	var text = jQuery(this).closest('.chosen-drop').find('.chosen-search input').val();
	window.location = add_new_user+'?username='+encodeURIComponent(text);
});

jQuery('#pekerja-laundry').chosen({ width: '100%' });

jQuery('#datetimepicker1').datetimepicker({
    format: 'DD-MM-YYYY HH:mm:ss',
    date: new Date()
});
var result = new Date();
result.setDate(result.getDate() + 2);
jQuery('#datetimepicker2').datetimepicker({
    format: 'DD-MM-YYYY HH:mm:ss',
    date: result
});

jQuery('#lama-service-laundry').on('change', function(){
	generateHarga()
});
jQuery('#tipe-laundry').on('change', function(){
	generateHarga()
});
jQuery('#berat-laundry').on('change', function(){
	generateHarga()
});
jQuery('#diskon-laundry').on('change', function(){
	generateHarga()
});
function generateHarga(){
	var _lama_service = jQuery('#lama-service-laundry').val();
	var _tipe_laundry = jQuery('#tipe-laundry').val();
	var _berat_laundry = jQuery('#berat-laundry').val();
	var _diskon_laundry = jQuery('#diskon-laundry').val();
	var _harga_service = 0;
	harga_service_laundry.map(function(b, i){
		if(
			b.lama_service == _lama_service
			&& b.tipe_laundry == _tipe_laundry
		){
			_harga_service = b.harga;
		}
	});
	var total = _berat_laundry * _harga_service;
	var _diskon = 0;
	diskon_laundry.map(function(b, i){
		if(b.id == _diskon_laundry){
			if(b.tipe == 'persen'){
				_diskon = (total * b.nilai_diskon) / 100;
			}else if(b.tipe == 'potongan'){
				_diskon = b.nilai_diskon;
			}
		}
	});
	total = total - _diskon;
	jQuery('#total-harga-laundry').val(total);
	jQuery('#total-laundry').html('Rp '+total.formatMoney(0, ',', '.'));
	console.log('total='+total+', diskon='+_diskon+', _harga_service='+_harga_service+', berat='+_berat_laundry+', tipe_laundry='+_tipe_laundry+', lama_service='+_lama_service);
}

Number.prototype.formatMoney = function(c, d, t){
    var n = this,
        c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

var elementPosition = jQuery('#layout-transaksi-laundry').offset();
var parent = jQuery('#layout-transaksi-laundry').parent().width();
jQuery('#layout-transaksi-laundry').css('width', parent+'px');
jQuery(window).scroll(function(){
	var margin_top = 40;
    if(jQuery(window).scrollTop() > (elementPosition.top-margin_top)){
        jQuery('#layout-transaksi-laundry')
        	.css('position','fixed')
        	.css('top',margin_top);
    } else {
        jQuery('#layout-transaksi-laundry').css('position','static');
    }    
});