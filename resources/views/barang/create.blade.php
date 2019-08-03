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
                    
                <label class="control-label">&nbsp;</label>
                <div class="controls">
                  {!! QrCode::size(200)->generate($newkode); !!}
                </div>
              </div>
                  <div class="control-group">
                <label class="control-label">Kode Produk :</label>
                <div class="controls">
                  <input type="text" class="span11" name="newkode" id="newkode" readonly value="{{$newkode}}">
                  <input type="hidden" class="span11" name="kode" id="newkode" readonly value="{{$kode}}">
                </div>
              </div>
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
               
              </div>
              <div id="dynamicInput">
              </div> 

              <div class="control-group">
                <label class="control-label">Variasi 2 :</label>
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
@endsection