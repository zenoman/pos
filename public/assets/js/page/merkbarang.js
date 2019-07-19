 $(document).ready(function() {
 	 $('#photo').change(function(){
    var imageSizeArr = 0;
    var imageSize = document.getElementById('photo');
    var imageCount = imageSize.files.length;
    for (var i = 0; i < imageSize.files.length; i++)
    {
         var imageSiz = imageSize.files[i].size;
         var imagename = imageSize.files[i].name;
         if (imageSiz > 3000000) {
             var imageSizeArr = 1;
         }
         if (imageSizeArr == 1)
         {
             alert('Maaf, gambar "'+imagename+'" terlalu besar / memiliki ukuran lebih dari 3MB');
             $('#photo').val('');
         }
     }
    });

 	  $('.tomboledit').on('click', function(){
        $("#fotonya").attr("src","#");
        var kode = $(this).data('id');
        var nama = $(this).data('nama');
        var gambar = $(this).data('gambar');

        $("#fotonya").attr("src","img/merk/"+gambar);
        $('#nama').val(nama);
        $('#gambar').val(gambar);
        $('#editmerk').attr('action','merk-barang/'+kode);
        $('#editdata').modal('toggle');
     }); 
 });