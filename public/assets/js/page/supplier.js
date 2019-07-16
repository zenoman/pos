$(document).ready(function() {
	 $('.tomboledit').on('click', function(){
	 	var nama = $(this).data('nama');
	 	var alamat = $(this).data('alamat');
	 	var telp = $(this).data('telp');
	 	var keterangan = $(this).data('keterangan');
	 	var kode = $(this).data('kode');

	 	$('#nama').val(nama);
	 	$('#alamat').val(alamat);
	 	$('#telp').val(telp);
	 	$('#keterangan').val(keterangan);

	 	$('#formedit').attr('action','supplier/'+kode);
	 	$('#editdata').modal('toggle');
	 });
});