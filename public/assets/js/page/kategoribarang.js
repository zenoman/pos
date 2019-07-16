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

     $('#editphoto').change(function(){
    var imageSizeArr = 0;
    var imageSize = document.getElementById('editphoto');
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
             $('#editphoto').val('');
         }
     }
    });
    
    $('.tomboledit').on('click', function(){
        $("#fotonya").attr("src","#");
        var kode = $(this).data('kode');
        var kategori = $(this).data('kategori');
        var gambar = $(this).data('gambar');

        $("#fotonya").attr("src","img/kategori/"+gambar);
        $('#nama').val(kategori);
        $('#gambar').val(gambar);
        $('#formedit').attr('action','kategori-barang/'+kode);
        $('#editdata').modal('toggle');
     }); 
 });
 