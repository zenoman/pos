$(document).ready(function() {
    //========================================
    var gunakanvariasi = 'N';
    var counterdua = 2; //variabel nomor inputan
    var limitdua = 10; // limit
    var counter = 2; //variabel nomor inputan
    var limit = 10; // limit

    $('#addinput').hide()
    $('#tabelvariasi').hide();
    //fungsi remove html
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
        alert("Limit hanya " + counterdua + " inputan");
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
       $('.parentnya').after(
                      '<tr class="trdua'+counterdua+' tr'+counter+'">'+
                      '<td> </td>'+
                      '<td style="text-align: center;" class="tvariasidua2'+counterdua+'"><span style="color:grey">Kosong</span></td>'+
                      '<td style="text-align: center;">-</td>'+
                      '<td style="text-align: center;">-</td>'+
                      '</tr>');
      document.getElementById(divName).appendChild(newdiv);
        counterdua++;
     }
    }
    window.addInputdua=addInputdua;

    //fungsi tambah input
    function addInput(divName){

     if (counter == limit)  {
        alert("Limit hanya " + counter + " inputan");
     }
     else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML ='<div class="control-group" id="input'+counter+'">'+
                    '<label class="control-label">&nbsp;&nbsp;</label>'+
                    '<div class="controls">'+
                    '<span class="span5"></span>'+
                      '<input type="text" class="span5" id="variasisatu'+counter+'" onchange="variasisatu('+counter+')">'+
                      '<button type="button" class="btn btn-danger add-on" onclick="del('+counter+')">Hapus</button>'+
                    '</div>'+
                  '</div>';
        $('#listvariasi tr:last').after('<tr>'+
                      
                      '<td style="text-align: center;" id="tvariasisatu'+counter+'"><span style="color:grey">Kosong</span></td>'+
                      
                      '<td style="text-align: center;">Row 3</td>'+
                      '<td style="text-align: center;">Row 4</td>'+
                    '</tr>');
         $('#listvariasi2 tr:last').after('<tr class="parentnya tr'+counter+'">'+
                      
                      '<td style="text-align: center;" colspan="0" id="tvariasisatu2'+counter+'"><span style="color:grey">Kosong</span></td>'+
                       '<td style="text-align: center;" class="tvariasidua21"><span style="color:grey">Kosong</span></td>'+
                      '<td style="text-align: center;">Row 3</td>'+
                      '<td style="text-align: center;">Row 4</td>'+
                    '</tr>');
        document.getElementById(divName).appendChild(newdiv);
        counter++;
     }
    }
    window.addInput=addInput;

    //fungsi hapus input
    //=====================================================================
    function del(no) {
      document.getElementById('input'+no).remove();
      $('#listvariasi tr:last').remove();
       $('.tr'+no).remove();
      counter = counter - 1;
      for(i=no;i<=limit;i++){
        var id = document.getElementById('input'+i);
        if (id === null){

        } else {

        }
      }
    }
    window.del=del;
    //=====================================================================
    function deldua(no) {
      document.getElementById('inputdua'+no).remove();
      $('.trdua'+no).remove();
      counter = counter - 1;
      for(i=no;i<=limit;i++){
        var id = document.getElementById('input'+i);
        if (id === null){

        } else {

        }
      }
    }
    window.deldua=deldua;
    //tampil tombol variasi 1
    //=====================================================================
    $("#variasisatu1").keydown( function(e){
    	if($('#variasisatu1').val()!=''){
    		if(gunakanvariasi=='N'){
    			$('#tabelvariasi').show();
    			$('#tabelvariasi2').hide();
    		}else{
    			$('#tabelvariasi').hide();
    			$('#tabelvariasi2').show();
    		}
    		$('#addinput').show();
    		
    		//tabel 1 variasi
    		$('#tvariasisatu1').html($('#variasisatu1').val());
    		$('#tnamavariasisatu').html($('#namavariasisatu').val());

    		//tabel 2 variasi
    		$('#tvariasisatu21').html($('#variasisatu21').val());
    		$('#tnamavariasisatu2').html($('#namavariasisatu').val());
    	}else{
    		$('#addinput').hide();
    		$('#tabelvariasi').hide();
    		$('#tabelvariasi2').hide();
    	}

    });

    //tampil tombol variasi 1
    //=====================================================================
    $("#namavariasidua").keydown( function(e){
    	if($('#namavariasidua').val()!=''){
    		$('#tnamavariasidua').html($('#namavariasidua').val());
    	}else{
    		$('#tnamavariasidua').html('variasi 2');
    	}

    });
    //====================================================
    function variasidua(nomer){
      if(nomer==1){
        if($('#variasidua'+nomer).val()==''){
          //$('#addinputdua').hide();
          $('#tabelvariasi').show();
          $('#tabelvariasi2').hide();
        }else{
          $('#tabelvariasi').hide();
          $('#tabelvariasi2').show();
          $('#tvariasisatu'+nomer).html($('#variasisatu'+nomer).val());
          $('#tvariasisatu2'+nomer).html($('#variasisatu'+nomer).val());
          $('.tvariasidua2'+nomer).html($('#variasidua'+nomer).val());
        }
          
      }else{
        $('#tvariasisatu'+nomer).html($('#variasisatu'+nomer).val());
        $('.tvariasidua2'+nomer).html($('#variasidua'+nomer).val());
      }
      
    }
    window.variasidua=variasidua;
    //====================================================
    function variasisatu(nomer){
    	if(nomer==1){
    		if($('#variasisatu'+nomer).val()==''){
    			$('#addinput').hide();
    			$('#tabelvariasi').hide();
    			$('#tabelvariasi2').hide();
    		}else{
    			$('#tvariasisatu'+nomer).html($('#variasisatu'+nomer).val());
    			$('#tvariasisatu2'+nomer).html($('#variasisatu'+nomer).val());
    		}
    			
    	}else{
    		$('#tvariasisatu'+nomer).html($('#variasisatu'+nomer).val());
    		$('#tvariasisatu2'+nomer).html($('#variasisatu'+nomer).val());
    	}
    	
    }
    window.variasisatu=variasisatu;
    //===============================================
    $('#btnvairasidua').click(function(){
    	gunakanvariasi = 'Y';
    	$('#aksesvariasidua').show();
    	$('#aktivkanvariasidua').hide();
    	$('#tabelvariasi').hide();
    	$('#tabelvariasi2').show();
     });
    //=====================================
    $('#hapusvariasidua').click(function(){
    gunakanvariasi = 'N';
      $('#aksesvariasidua').hide();
      $('#aktivkanvariasidua').show();
      $('#tabelvariasi').show();
      $('#tabelvariasi2').hide();
      $('.inputdua').remove();
    });
    //=========================================
    $('#kategori').change(function(){
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
        }
      });
    });
});


