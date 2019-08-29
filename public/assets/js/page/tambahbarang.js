$(document).ready(function() {
    //========================================
    var gunakanvariasi = 'N';
    var counterfoto = 2;
    var counterdua = 2; //variabel nomor inputan
    var limitdua = 10; // limit
    var counter = 2; //variabel nomor inputan
    var limit = 10;
    var limitfoto = 9; // limit
    var novariasisatu = [1,];
    var novariasidua = [1,];
    var realnomer = 0;
    $('#addinput').hide()

    //fungsi remove html

    function hapustr(no){
      $('.realtd'+no).remove();
    }
    window.hapustr=hapustr;
    //====================================================
    Element.prototype.remove = function() {
        this.parentElement.removeChild(this);
    }
    NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
        for(var i = this.length - 1; i >= 0; i--) {
            if(this[i] && this[i].parentElement) {
                this[i].parentElement.removeChild(this[i]);
            }
        }
    }
    //====================================================


    //fungsi tambah input
    function addInputdua(divName){

     if (counterdua == limitdua)  {
        alert("Limit hanya " + counterdua-1 + " inputan");
     }
     else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML ='<div class="control-group inputdua" id="inputdua'+counterdua+'">'+
                    '<label class="control-label">&nbsp;&nbsp;</label>'+
                    '<div class="controls">'+
                    '<span class="span5"></span>'+
                      '<input type="text" class="span5" id="variasidua'+counterdua+'" onchange="variasidua('+counterdua+')">'+
                      '<button type="button" class="btn btn-danger add-on" onclick="deldua('+counterdua+')">Hapus</button>'+
                    '</div>'+
                  '</div>';
      document.getElementById(divName).appendChild(newdiv);
        novariasidua.push(counterdua);
        counterdua++;
        managerow();
     }
    }
    window.addInputdua=addInputdua;

    //fungsi tambah input
    function addInput(){
      var divName = 'dynamicInput';
     if (counter == limit)  {
        alert("Limit hanya " + counter-1 + " inputan");
     }
     else{
      var newdiv = document.createElement('div');
      novariasisatu.push(counter);
        newdiv.innerHTML ='<div class="control-group" id="input'+counter+'">'+
                    '<label class="control-label">&nbsp;&nbsp;</label>'+
                    '<div class="controls">'+
                    '<span class="span5"></span>'+
                      '<input type="text" class="span5" id="variasisatu'+counter+'" onchange="variasisatu('+counter+')">'+
                      '<button type="button" class="btn btn-danger add-on" onclick="del('+counter+')">Hapus</button>'+
                    '</div>'+
                  '</div>';
        document.getElementById(divName).appendChild(newdiv);
        counter++;
        managerow();
     }
    }
    window.addInput=addInput;

    //fungsi hapus input
    //=====================================================================
    function del(no) {
      document.getElementById('input'+no).remove();
      $('.tr'+no).remove();
      counter = counter - 1;
      novariasisatu = jQuery.grep(novariasisatu,function(value){
        return value != no;
      });
      for(i=no;i<=limit;i++){
        var id = document.getElementById('input'+i);
      }
      // alert(novariasisatu);
    }
    window.del=del;
    //=====================================================================
    function deldua(no) {
      document.getElementById('inputdua'+no).remove();
    $('.td'+no).remove();
      counterdua = counterdua - 1;
    novariasidua = jQuery.grep(novariasidua,function(value){
        return value != no;
      });
    }
    window.deldua=deldua;
    //tampil tombol variasi 1
    //=====================================================================
    $("#variasisatu1").keydown( function(e){
    	if($('#variasisatu1').val()==''){
         $('#addinput').hide();
        $('#tabelvariasi').hide();
        $('#hargaall').hide();
        $('#hball').val('');
        $('#hjall').val('');
        $('#sall').val('');
        $('.variandefault').show();
        managerow();
      }else{
        $('#addinput').show();
        $('#tabelvariasi').show();
        $('#hargaall').show();
        $('.variandefault').hide();
        managerow();
      }

    });
    //================================================================
    function managerow(){
      realnomer = 0;
      $('#listnya').html('');
      var variasisatu = '';
      if(gunakanvariasi=='Y'){
         $.each(novariasisatu,function(index,value){
          if ($('#variasisatu'+value).val()==''){
            var isi = 'Kosong';
          }else{
            var isi = $('#variasisatu'+value).val();
          }
            $.each(novariasidua,function(index,valuedua){
              realnomer++;

               if($('#variasidua'+valuedua).val()==''){
                  var isidua = 'Kosong';
                }else{
                  var isidua = $('#variasidua'+valuedua).val();
                }
             variasisatu = variasisatu + '<tr class="tr'+value+' td'+valuedua+' realtd'+realnomer+'">'+
                  '<td style="text-align: center;" class="row'+value+'"><input type="text" name="variasisatu[]" class="row'+value+'" style="width:90%;" value="'+isi+'" readonly></td>'+
                  '<td style="text-align: center;" class="isivariasidua"><input type="text" name="variasidua[]" class="roww'+valuedua+'" style="width:90%;" value="'+isidua+'" readonly></td>'+
                  '<td style="text-align: center;"><input type="number" min="0" name="harga[]" class="hargabeli" style="width:90%;"></td>'+
                  '<td style="text-align: center;"><input type="number" min="0" name="hargajual[]" class="hargajual" style="width:90%;"></td>'+
                  '<td style="text-align: center;"><input type="number" min="0" name="stok[]" class="stoknya" style="width:90%;"></td>'+
                  '<td style="text-align: center;"><button type="button" class="btn btn-danger" onclick="hapustr('+realnomer+')"><i class="icon icon-remove"></i></button></td>'+
                  '</tr>';
            });
        });
      }else{
        $.each(novariasisatu,function(index,value){
          if ($('#variasisatu'+value).val()==''){
            var isi = 'Kosong';
          }else{
            var isi = $('#variasisatu'+value).val();
          }
       variasisatu = variasisatu + '<tr class="tr'+value+'">'+
                  '<td style="text-align: center;"><input type="text" name="variasisatu[]" class="row'+value+'" style="width:90%;" value="'+isi+'" readonly></td>'+
                  '<td style="text-align: center;" class="isivariasidua roww1"><span style="color:grey">Kosong</span></td>'+
                  '<td style="text-align: center;"><input type="number" min="0" name="harga[]" class="hargabeli" style="width:90%;"></td>'+
                  '<td style="text-align: center;"><input type="number" min="0" name="hargajual[]" class="hargajual" style="width:90%;"></td>'+
                  '<td style="text-align: center;"><input type="number" min="0" name="stok[]" class="stoknya" style="width:90%;"></td>'+
                  '<td style="text-align: center;">-</td>'+
                '</tr>';
        });
      }
      

      $('#listnya').html(variasisatu);
    
    }
    //tampil tombol variasi 1
    //=====================================================================
    $("#namavariasidua").keydown( function(e){
    	if($('#namavariasidua').val()!=''){
    		$('#tnamavariasidua').html($('#namavariasidua').val());
    	}else{
    		$('#tnamavariasidua').html('variasi 2');
    	}

    });
    //=====================================================================
    $("#namavariasisatu").keydown( function(e){
      if($('#namavariasisatu').val()!=''){
        $('#tnamavariasisatu').html($('#namavariasisatu').val());
      }else{
        $('#tnamavariasisatu').html('variasi 1');
      }

    });
    //====================================================
    function variasidua(nomer){
     $('.roww'+nomer).val($('#variasidua'+nomer).val());
      
    }
    window.variasidua=variasidua;
    //====================================================
    function variasisatu(nomer){
    $('.row'+nomer).val($('#variasisatu'+nomer).val());
    	
    }
    window.variasisatu=variasisatu;
    //===============================================
    $('#btnvairasidua').click(function(){
    	gunakanvariasi = 'Y';
    	$('#aksesvariasidua').show();
      $('#rowinputdua').show();
    	$('#aktivkanvariasidua').hide();
      managerow();
     });
    //=====================================
    $('#hapusvariasidua').click(function(){
    gunakanvariasi = 'N';
      $('#aksesvariasidua').hide();
      $('#aktivkanvariasidua').show();
      $('#rowinputdua').hide();
      $('.isivariasidua').html('kosong');
      $('#tnamavariasidua').html('variasi 2');
      $('#variasidua1').val('');
      $('#namavariasidua').val('');
      $('.inputdua').remove();
      managerow();
    });
    //=========================================
    $('#kategori').change(function(){
      $('#panelnya').loading('toggle');
      var kategori = $(this).val();
      $.ajax({
        type:'GET',
        dataType:'json',
        url: '/carisubkategori/'+kategori,
        success:function(data){
          var rows ='';
          $.each(data,function(key, value){
                rows = rows + '<option value="'+value.id+'">'+value.nama+'</option>';
            });
           $("#subkategori option").remove();
         $("#subkategori").append(rows);
        },error:function(){
                        alert('error');
        },complete:function(){
                
                $('#panelnya').loading('stop');
             }
      });
    });
    //==============================================
    function imgToData(input) {
    $('#tempatfoto').html('');
    if (input.files) {
      
        var length = input.files[0].length;
        $.each(input.files, function(i, v) {
            var n = i + 1;
            var File = new FileReader();
            var datafoto ='';
            File.onload = function(event) {
              datafoto = datafoto + '<span class="span3">'+
              '<img src="'+event.target.result+'" width="100%"></span>';
              $('#tempatfoto').append(datafoto);
            };

            File.readAsDataURL(input.files[i]);
          });
      
      }
    }

  //=============================================================
  $('#upload').change(function(event) {
    var imageSize = document.getElementById('upload');
     var imageSiz = imageSize.files[0].size;
     if (imageSiz > 3000000){
      alert('Maaf, Ukuran foto lebih dari 3 MB');
       $('#upload').val('');
     }else{
      imgToData(this);
     }
    
  });

  //==============================================================
  function imgToDatabarang(input,no) {
    $('#tempatfotobarang'+no).html('');
    //var imageSize = document.getElementById('fto'+no);
     var imageSiz = input.files[0].size;
     if (imageSiz > 3000000){
       $('#fto'+no).val('');
      alert('Maaf, Ukuran foto lebih dari 3 MB');
      
     }else{
        if (input.files) {

      var length = input.files.length;
        $.each(input.files, function(i, v) {
            var n = i + 1;
            var File = new FileReader();
            var datafoto ='';
            File.onload = function(event) {
              datafoto = datafoto + '<img src="'+event.target.result+'" width="30%">';
              $('#tempatfotobarang'+no).append(datafoto);
            };

            File.readAsDataURL(input.files[i]);
          });}
     }
    
  }
  window.imgToDatabarang = imgToDatabarang;
   //====================================================


    //fungsi tambah input
    function addInputfoto(){
      var divName ='dynamicInput3';
     if (counterfoto == limitfoto)  {
        alert("Limit hanya " + counterfoto-1 + " inputan");
     }
     else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML ='<div class="control-group foto'+counterfoto+'">'+
                '<label class="control-label">Foto Barang ke-'+counterfoto+' :</label>'+
                '<div class="controls">'+
                  '<input type="file" class="span11" name="fotobarang[]" onchange="imgToDatabarang(this,'+counterfoto+')" id="fto'+counterfoto+'">'+
                    '<div id="tempatfotobarang'+counterfoto+'">'+
                  '</div><br>'+
                  '<div><button type="button" class="btn btn-danger" onclick="delfoto('+counterfoto+')">Hapus</button></div>'+
                  '</div>'+
                '</div>';
      document.getElementById(divName).appendChild(newdiv);
        counterfoto++;
     }
    }
    window.addInputfoto=addInputfoto;
  //fungsi hapus input
    //=====================================================================
    function delfoto(no) {
      $('.foto'+no).remove();
      counterfoto = counterfoto - 1;
    }
    window.delfoto=delfoto;
    //==============================================================
    $('#stokall').click(function(){
      if ($('#hball').val()!=''){
        $('.hargabeli').val($('#hball').val());
      }
      if($('#hjall').val()!=''){
        $('.hargajual').val($('#hjall').val());
      }
      if($('#sall').val()!=''){
        $('.stoknya').val($('#sall').val()); 
      }
    });

    //============================================================
    function checkform(){
      if($('#status').val()=='N'){
        if($('#namaproduk').val()==''||$('#deskripsi').val()==''||$('#asal').val()==''||$('#bahan').val()==''){
          alert('Maaf, Isi data dengan label berbintang');  
        return false;
        }else{
          return true;  
        }
      }else{
        return true;
      }
      
    }
    window.checkform = checkform;
    //===========================================================
    $('#simpandata').click(function(){
      if(confirm('Simpan Data Barang ?')){
        $('#status').val('Y');
        if($('#namaproduk').val()==''||
          $('#deskripsi').val()==''||
          $('#asal').val()==''||
          $('#bahan').val()==''||
          $('#upload').val()==''||
          $('#kategori').val()=='kosong'){
          alert('Maaf, Isi data dengan label berbintang');  
        }else{
          $('#forminput').submit();  
        }
      }
    });
    //===========================================================
    $('#arsipkandata').click(function(){
      if(confirm('Arsipkan Data Barang ?')){
        $('#status').val('N');
        if($('#namaproduk').val()==''||
          $('#deskripsi').val()==''||
          $('#asal').val()==''||
          $('#bahan').val()==''||
          $('#upload').val()==''||
          $('#kategori').val()=='kosong'){
          alert('Maaf, Isi data dengan label berbintang');  
        }else{
          if($('#variasisatu1').val()==''){
            if ($('#stokdefault')=='' || $('#hargabelidefault')=='' || $('#hargajualdefault')==''){
              alert('Maaf, Isi data dengan label berbintang'); 
            }else{
             $('#forminput').submit();  
            }
          }else{
             $('#forminput').submit();  
            }
        }
      }
    });
});


