$(document).ready(function() {
	 $('.tomboledit').on('click', function(){
	 	var id = $(this).data('id');
	 	var kode = $(this).data('kode');
	 	var warna = $(this).data('warna');
	 	var hex = $(this).data('hex');

	 	$('#kode').val(kode);
	 	$('#warna').val(warna);
	 	$('#hex').val(hex);
	 	
	 	$('#editwarna').attr('action','warna/'+id);
	 	$('#editdata').modal('toggle');
	 });
});