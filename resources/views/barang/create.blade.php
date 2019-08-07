@extends('layout.master')
@section('css')
<link href="{{asset('assets/js/loading.css')}}" rel="stylesheet">
@endsection
@section('content')
<style>
  .img {
  height: 100px;
  display: block;
}
</style>
<div id="content">
      <div id="content-header">
        <div id="breadcrumb">
        
      </div>
       <h1>Data Barang</h1>
      </div>
      
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" id="panelnya">
          <form action="{{url('barang')}}" method="post" enctype="multipart/form-data">
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
                <label class="control-label">Kode Produk :</label>
                <div class="controls">
                  <input type="text" class="span11" name="newkode" id="newkode" readonly value="{{$newkode}}">
                  <input type="hidden" class="span11" name="kode" id="newkode" readonly value="{{$kode}}">
                </div>
              </div>
                  <div class="control-group">
                <label class="control-label">Nama Produk :</label>
                <div class="controls">
                  <input type="text" name="nama" class="span11" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Deskripsi Produk :</label>
                <div class="controls">
                  <textarea name="deskripsi" class="span11" rows="3"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Kategori & sub Kategori :</label>
                <div class="controls">
                  <select name="kategori" id="kategori" class="span5">
                    <option selected disabled hidden>pilih kategori</option>
                    @foreach($kategori as $kat)
                    <option value="{{$kat->id}}">{{$kat->kategori}}</option>
                    @endforeach
                  </select>
                  <select name="subkategori" id="subkategori" class="span6">
                    <option selected disabled hidden>pilih Sub kategori</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Merk :</label>
                <div class="controls">
                  <select name="merk" class="span11">
                    @foreach($merk as $mrk)
                    <option value="{{$mrk->id}}">{{$mrk->nama}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Asal Produk :</label>
                <div class="controls">
                  <input type="text" name="asal" class="span11">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Bahan :</label>
                <div class="controls">
                  <input type="text" name="bahan" class="span11">
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
                  <input type="text" class="span5" id="namavariasisatu" placeholder="Nama variasi, contoh (warna ,ukuran ,size)" name="namavariasi">
                  <input type="text" class="span5" id="variasisatu1" onchange="variasisatu(1)" name="variasisatu[]">
                  
                </div>
               
              </div>
              <div id="dynamicInput">
              </div>
              <div class="control-group">
                <label class="control-label">&nbsp;</label>
                <div class="controls">
                  <span class="span4"> </span>
                  <span class="span6 text-right"> 
                    <button type="button" id="addinput" class="btn btn-primary btn-block add-on" onClick="addInput();" style="display: none;">Tambah Variasi 1</button>
                  </span>
                  
                  
                </div>
               <br><br>
              </div> 
              
              <div class="control-group">
                <label class="control-label">Variasi 2 :</label>
                <div class="controls" id="aktivkanvariasidua">
                <button type="button" id="btnvairasidua" class="btn btn-success add-on">Aktivkan</button>
                </div>
                <div class="controls" style="display: none;" id="aksesvariasidua">
                  <input type="text" class="span5" id="namavariasidua" placeholder="Nama variasi, contoh (warna ,ukuran ,size)" name="namasubvariasi">
                  <input type="text" class="span5" id="variasidua1" onchange="variasidua(1)">
                  <button type="button" id="hapusvariasidua" class="btn btn-warning add-on">Nonaktiv</button>
                </div>
              </div>
                <div id="dynamicInput2">
            </div>
            <div id="rowinputdua" class="control-group" style="display: none;">
                <label class="control-label">&nbsp;</label>
                <div class="controls">
                  <span class="span4"> </span>
                  <span class="span6 text-right"> 
                    <button type="button" id="addinputdua" class="btn btn-primary btn-block add-on" onClick="addInputdua('dynamicInput2');">Tambah Variasi 2</button> 
                  </span>
                  
                  
                </div>
               <br><br>
              </div>
              <br>
              <div id="hargaall" class="control-group" style="display: none;">
                <div class="controls">
                  <span class="span3">
                    <label>Harga Beli</label>
                    <input type="number" min="0" id="hball">
                  </span>
                  <span class="span3">
                    <label>Harga Jual</label> 
                    <input type="number" min="0" id="hjall">
                  </span>
                   <span class="span3">
                    <label>Stok</label> 
                    <input type="number" min="0" id="sall">
                  </span>
                  <span class="span3">
                    <label>&nbsp;</label> 
                    <button type="button" class="btn btn-success" id="stokall">Aplikasikan Untuk Semua Varian</button>
                  </span>
                  
                  
                </div>
               <br>
              </div>  
             </div>

              <div id="tabelvariasi" style="display: none;">
                    <hr>
                <table class="table table-bordered table-striped" id="listvariasi">
              <thead>
                
                <tr>
                  <th id="tnamavariasisatu">variasi 1</th>
                  <th id="tnamavariasidua">variasi 2</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Stok</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody id="listnya">
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
                <label class="control-label">Foto Utama :</label>
                <div class="controls">
                  <input type="file" id="upload" name="fotoutama" class="span11">
                  <div id="tempatfoto">
                    
                  </div>
                </div>
              </div>
             
                </div>
                
              </div>
              <div class="widget-content">
                <div class="form-horizontal">
                  <div class="control-group">
                <label class="control-label">Foto Barang ke-1 :</label>
                <div class="controls">
                  <input type="file" id="fotobarang" name="fotobarang[]" class="span11 fto1" onchange="imgToDatabarang(this,1)">
                  <div id="tempatfotobarang1">
                  </div>
                </div>
              </div>
                
              <div id="dynamicInput3">
            </div>
                </div>
                
              </div>
              <div class="widget-content">
                <div class="form-horizontal">
                  <div class="control-group">
                <label class="control-label">&nbsp;</label>
                <div class="controls">
                  <button type="button" id="tambahfoto" class="btn btn-warning" onclick="addInputfoto()">Tambah Foto</button>
                </div>
              </div>
                </div>
                
              </div>
            </div>
          </div>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    </div>
        @endsection

        @section('js')
      <script src="{{asset('assets/js/loading.js')}}"></script>
     <script src="{{asset('assets/js/page/tambahbarang.js')}}"></script>
@endsection