@extends('layout.master')

@section('content')
<div id="content">
      <div id="content-header">
        <div id="breadcrumb">
        
      </div>
                <h1>Supplier</h1>
      </div>
      
      <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <a href="#tambahdata" data-toggle="modal" class="btn btn-primary">Tambah Data</a>
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>List Data Suplier</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No.Telp</th>
                  <th>Keterangan</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>1</td>
                  <td>Toko Maju Mudur</td>
                  <td>mungkung loceret nganjuk</td>
                  <td>09890234890</td>
                  <td>suplier baju anak kecil</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Cv.iwak enak</td>
                  <td>mungkung loceret nganjuk</td>
                  <td>09890234890</td>
                  <td>suplier baju anak jilbab</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>GMK</td>
                  <td>mungkung loceret nganjuk</td>
                  <td>09890234890</td>
                  <td>suplier baju anak celana</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Bu.yuni</td>
                  <td>mungkung loceret nganjuk</td>
                  <td>09890234890</td>
                  <td>suplier baju anak gamis</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Toko Maju Mudur</td>
                  <td>mungkung loceret nganjuk</td>
                  <td>09890234890</td>
                  <td>suplier baju anak gamis</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Pak.Miko</td>
                  <td>mungkung loceret nganjuk</td>
                  <td>09890234890</td>
                  <td>suplier baju anak gamis</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
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
     <div id="tambahdata" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Tambah Data Supplier</h3>
              </div>
              <div class="modal-body">
                <form action="#" method="get">
              <div class="row-fluid">
              <div class="span12"></div>
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Nama :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Alamat :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
            <div class="span12">
              <div class="control-group">
                <label class="control-label">No.Telp :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
            <div class="span12">
              <div class="control-group">
                <label class="control-label">Keterangan :</label>
                <div class="controls">
                  <textarea class="span11"></textarea>
                  
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