@extends('layout.master')

@section('content')
<div id="content">
      <div id="content-header">
        <div id="breadcrumb">
        
      </div>
                <h1>Data Barang</h1>
      </div>
      
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-plus"></i> </span>
            <h5>Tambah Data Barang</h5>
          </div>
          <div class="widget-content">
             <div class="row-fluid">
                <div class="span12">
            <div class="widget-box" id="informasi-produk">
              <div class="widget-title">
                <span class="icon">
                  <i class="icon-th-list"></i>
                </span>
                <h5>Informasi Produk</h5>
              </div>
              <div class="widget-content">
                <div class="form-horizontal">
                  <div class="control-group">
                <label class="control-label">Nama Produk :</label>
                <div class="controls">
                  <input type="text" class="span11">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Deskripsi Produk :</label>
                <div class="controls">
                  <textarea name="" class="span11" rows="3"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Kategori & sub Kategori :</label>
                <div class="controls">
                  <select name="halo" id="" class="span5">
                    <option value="">halo</option>
                    <option value="">halo</option>
                    <option value="">halo</option>
                  </select>
                  <select name="halo" id="" class="span6">
                    <option value="">halo</option>
                    <option value="">halo</option>
                    <option value="">halo</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Merk :</label>
                <div class="controls">
                  <select name="halo" id="" class="span11">
                    <option value="">halo</option>
                    <option value="">halo</option>
                    <option value="">halo</option>
                  </select>
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Asal Produk :</label>
                <div class="controls">
                  <input type="text" class="span11">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Bahan :</label>
                <div class="controls">
                  <input type="text" class="span11">
                </div>
              </div>
                </div>
                
              </div>
            </div>
            <div class="widget-box" id="informasi-penjualan">
              <div class="widget-title">
                <span class="icon">
                  <i class="icon-th-list"></i>
                </span>
                <h5>Informasi Penjualan</h5>
              </div>
              <div class="widget-content">
                <div class="form-horizontal">
                  <div class="control-group">
                <label class="control-label">Variasi 1 :</label>
                <div class="controls">
                  <input type="text" class="span5" id="namavariasisatu" placeholder="Nama variasi, contoh (warna ,ukuran ,size)">
                  <input type="text" class="span5" id="variasisatu1" onchange="variasisatu(1)">
                  <button type="button" id="addinput" class="btn btn-primary add-on" onClick="addInput('dynamicInput');" style="display: none;">Tambah</button>
                </div>

               <!--  <Button id="adtb" class="btn btn-primary">Aktifkan Variasi 1</Button> -->
              <!--   <div class="controls">
                    <div class="inp"></div><br>
                    <Button class="btn btn-info" id="adtr">Tambah Row</Button>
                </div>  -->               
              </div>
              <div id="dynamicInput">
              </div> 

              <div class="control-group">
                <label class="control-label">Variasi 2 :</label>
               <!--  <div class="controls">
                   <div class="inpv"></div><br>
                   <Button class="btn btn-info" id="advar">Buat Varian</Button> <Button class="btn btn-info" id="bvar">Tambah Varian</Button><br><br> 
                </div>            --> 
                

                <div class="controls" id="aktivkanvariasidua">
                <button type="button" id="btnvairasidua" class="btn btn-success add-on">Aktivkan</button>
                </div>
                <div class="controls" style="display: none;" id="aksesvariasidua">
                  <input type="text" class="span5" id="namavariasidua" placeholder="Nama variasi, contoh (warna ,ukuran ,size)">
                  <input type="text" class="span5" id="variasidua1" onchange="variasidua(1)">
                  <button type="button" id="addinputdua" class="btn btn-primary add-on" onClick="addInputdua('dynamicInput2');">Tambah</button> <button type="button" id="hapusvariasidua" class="btn btn-warning add-on">Nonaktiv</button>
                </div>
              </div>
                <div id="dynamicInput2">
            </div>
             </div>
                <div id="tabelvariasi" style="display: none;">
                    <hr> 
                     <table class="table table-bordered table-striped" id="listvariasi">
              <thead>
                <tr>
                  
                  <th id="tnamavariasisatu">variasi 1</th>
                  <th>Harga</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="text-align: center;" id="tvariasisatu1"></td>
                  <td style="text-align: center;">Row 3</td>
                  <td style="text-align: center;">Row 4</td>
                </tr>
              </tbody>
            </table> 
           <!--  <tb></tb> -->
          </div>


              <div id="tabelvariasi2" style="display: none;">
                    <hr>
                <table class="table table-bordered table-striped" id="listvariasi2">
              <thead>
                <tr>
                  <th id="tnamavariasisatu2">variasi 1</th>
                  <th id="tnamavariasidua">variasi 2</th>
                  <th>Harga</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                <tr class="parentnya tr1">
                  
                  <td style="text-align: center;" id="tvariasisatu21" class="v1"><span style="color:grey">Kosong</span></td>
                  <td style="text-align: center;" class="tvariasidua21"><span style="color:grey">Kosong</span></td>
                  <td style="text-align: center;">Row 3</td>
                  <td style="text-align: center;">Row 4</td>
                </tr>
              </tbody>
            </table>
                </div>
              </div> 
            </div>
            <div class="widget-box" id="informasi-produk">
              <div class="widget-title">
                <span class="icon">
                  <i class="icon-th-list"></i>
                </span>
                <h5>Pengaturan Media</h5>
              </div>
              <div class="widget-content">
                <div class="form-horizontal">
                  <div class="control-group">
                <label class="control-label">Foto Produk :</label>
                <div class="controls">
                  <input type="text" class="span11">
                </div>
              </div>
             
                </div>
                
              </div>
            </div>
          </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
        @endsection

        @section('js')
     <script src="{{asset('assets/js/page/tambahbarang.js')}}"></script>
     <!-- <script>
        $('document').ready(function(){     
          var b=false;
          var dr=0;
          var dv=0; 
          $('#adtr').hide();
          $('#bvar').hide()
          $('#adtb').click(function(){       
              b=false;   
              dr=dr+1;                      
              // add input
              $('.inp').append('Nama : <input class="hname" type="text"><br><br> Pilihan : <input type="text" class="inpnm"><br>');
              // tabel
              $('tb').append('<table class="table table-bordered table-striped" id="tabel" border="1"><thead><tr class="tvar"><th id="name">Nama</th><th class="var">varian 2</th><th>Stok</th><th>Harga</th><th>Kode</th></tr></thead></table>');             
              $('#tabel').append('<tr><td>bar</td><td id="iv'+dr+'"  class="vari"><vr></vr></td><td>Stok</td><td>Harga</td><td>Kode</td></tr>');         
              $('.var').hide();   
              $('.vari').hide();                
              $('#adtb').hide();
              $('#adtr').show();
          });
          $('#adtr').click(function(){                    
              dr=dr+1;    
              if(b==true){
                  $('#tabel').append('<tr><td>bar</td><td id="iv'+dr+'" class="vari"><vr></vr></td><td>Stok</td><td>Harga</td><td>Kode</td></tr>');
                  $('.inp').append('<div class="control-group">Pilihan : <input type="text" class="inpnm"></div>');                        
                  $('.vari').show();
                  for(var i=0; i<dv;i++){
                      $('#inpnmv'+dv).clone().appendTo('#iv'+dr);
                  }
              }else{ 
                  $('#tabel').append('<tr><td>bar</td><td id="iv'+dr+'" class="vari"><vr></vr></td><td>Stok</td><td>Harga</td><td>Kode</td></tr>');
                  $('.inp').append('<div class="control-group">Pilihan : <input type="text" class="inpnm"></div>');    
                  $('.vari').hide();
              }
          });
          $('#advar').click(function(){
              b=true;
              dv=dv+1;
              $('.var').show();
              $('#bvar').show()
              $('.vari').show();
              $('.inpv').append('<div class="control-group">Nama : <input id="hnamev"  type="text"><br><br> Pilihan : <input id="inpnmv'+dv+'" type="text" class="ipnv"></div>');
              $('.vari').append('<div class="control-group"> <input class="ipnv" type="text"  id="inpnmv'+dv+'"></div>');
              $('#advar').hide();
          });     
          $("#bvar").click(function(){
                dv=dv+1;
                $('.inpv').append('<div class="control-group"> Pilihan : <input class="ipnv" type="text"  id="inpnmv'+dv+'"></div>');
                // Loop Unutk Input
                 $('.vari').append('<input class="ipnv" type="text"  id="inpnmv'+dv+'"><br>');
            }); 
        });
    </script> -->
@endsection