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
        <a href="{{url('barang/create')}}" class="btn btn-primary">Tambah Data</a>
        <a href="{{url('import-barang')}}" class="btn btn-success">Import Excel</a>
        <a href="#caridata" data-toggle="modal" class="btn btn-warning">Cari Data</a>
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>List Data Barang</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama Barang</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Diskon</th>
                  <th>Stok</th>
                  <th class="text-center">Aksi</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>BRG0001</td>
                  <td>jilbab serut turki</td>
                  <td>jilbab</td>
                  <td>Rp.25000</td>
                  <td>10%</td>
                  <td>160 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                  <td style="text-align: center;">
                    <input name="kodebarang[]" type="checkbox" id="checkbox[]">
                  </td>
                </tr>
              <tr>
                  <td>2</td>
                  <td>BRG0002</td>
                  <td>Kemeja flanel</td>
                  <td>kemeja</td>
                  <td>Rp.50000</td>
                  <td>0%</td>
                  <td>100 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                  <td style="text-align: center;">
                    <input name="kodebarang[]" type="checkbox" id="checkbox[]">
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>BRG0003</td>
                  <td>Kaos Polos</td>
                  <td>kaos cowok</td>
                  <td>Rp.35000</td>
                  <td>50%</td>
                  <td>100 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                  <td style="text-align: center;">
                    <input name="kodebarang[]" type="checkbox" id="checkbox[]">
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>BRG0004</td>
                  <td>jilbab instan rafa</td>
                  <td>jilbab</td>
                  <td>Rp.45000</td>
                  <td>0%</td>
                  <td>60 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                  <td style="text-align: center;">
                    <input name="kodebarang[]" type="checkbox" id="checkbox[]">
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>BRG0005</td>
                  <td>jilbab serut turki</td>
                  <td>jilbab</td>
                  <td>Rp.25000</td>
                  <td>10%</td>
                  <td>160 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                  <td style="text-align: center;">
                    <input name="kodebarang[]" type="checkbox" id="checkbox[]">
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>BRG0006</td>
                  <td>jilbab serut turki</td>
                  <td>jilbab</td>
                  <td>Rp.25000</td>
                  <td>10%</td>
                  <td>160 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                  <td style="text-align: center;">
                    <input name="kodebarang[]" type="checkbox" id="checkbox[]">
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>BRG0007</td>
                  <td>jilbab serut turki</td>
                  <td>jilbab</td>
                  <td>Rp.25000</td>
                  <td>10%</td>
                  <td>160 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                  <td style="text-align: center;">
                    <input name="kodebarang[]" type="checkbox" id="checkbox[]">
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>BRG0008</td>
                  <td>jilbab serut turki</td>
                  <td>jilbab</td>
                  <td>Rp.25000</td>
                  <td>10%</td>
                  <td>160 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                  <td style="text-align: center;">
                    <input name="kodebarang[]" type="checkbox" id="checkbox[]">
                  </td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>BRG0009</td>
                  <td>jilbab serut turki</td>
                  <td>jilbab</td>
                  <td>Rp.25000</td>
                  <td>10%</td>
                  <td>160 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                  <td style="text-align: center;">
                    <input name="kodebarang[]" type="checkbox" id="checkbox[]">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  </div>
    </div>
    <div id="caridata" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Cari Dari Semua Data Barang</h3>
              </div>
              <div class="modal-body">
                <form action="#" method="get">
              <div class="row-fluid">
              <div class="span12"></div>
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Cari :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="cari berdasarkan kode barang/ nama barang/ kategori" />
                </div>
              </div>
            </div>
              
              </div>
              <div class="form-actions text-right">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </div>
            </form>
              </div>
            </div>
@endsection
@section('js')
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('assets/js/maruti.tables.js')}}"></script>
@endsection