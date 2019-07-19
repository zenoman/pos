 $(document).ready(function() {

    $('.tomboledit').on('click', function(){
        var nama = $(this).data('nama');
        var jumlah = $(this).data('jumlah');
        var kode = $(this).data('kode');

        $('#nama').val(nama);
        $('#isi').val(jumlah);
        $('#formedit').attr('action','uom-barang/'+kode);
        $('#editdata').modal('toggle');
     }); 
 });
 