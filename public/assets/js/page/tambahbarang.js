$(document).ready(function() {
//========================================
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

var counter = 2; //variabel nomor inputan
var limit = 10; // limit

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
                  '<input type="text" class="span10" id="variasisatu'+counter+'" onchange="variasisatu('+counter+')">'+
                  '<button type="button" class="btn btn-danger add-on" onclick="del('+counter+')">Hapus</button>'+
                '</div>'+
              '</div>';;
    $('#listvariasi tr:last').after('<tr>'+
                  
                  '<td style="text-align: center;" id="tvariasisatu'+counter+'"><span style="color:grey">Kosong</span></td>'+
                  '<td style="text-align: center;">Row 2</td>'+
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
  counter = counter - 1;
  for(i=no;i<=limit;i++){
    var id = document.getElementById('input'+i);
    if (id === null){

    } else {

    }
  }
}
window.del=del;

//tampil tombol variasi 1
//=====================================================================
$("#variasisatu1").keydown( function(e){
	if($('#variasisatu1').val()!=''){
		$('#addinput').show();
		$('#tabelvariasi').show();
		$('#tvariasisatu1').html($('#variasisatu1').val());
	}else{
		$('#addinput').hide();
		$('#tabelvariasi').hide();
	}

});

//====================================================
function variasisatu(nomer){
	$('#tvariasisatu'+nomer).html($('#variasisatu'+nomer).val());
}
window.variasisatu=variasisatu;
 });
