@extends('layout.master')

@section('content')
<div id="content">
      <div id="content-header">
        <div id="breadcrumb">
        
      </div>
                <h1>UOM Barang</h1>
      </div>
      
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span8">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>List Data</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Isi</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <tr>
                  <td>1</td>
                  <td>Lusin</td>
                  <td>12 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Kodi</td>
                  <td>50 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Kodi Hijab</td>
                  <td>60 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Lusin</td>
                  <td>12 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Lusin</td>
                  <td>12 Pcs</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Lusin</td>
                  <td>12 Pcs</td>
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
       <div class="span4">
         <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-plus"></i> </span>
            <h5>Tambah Data</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">
           
              <div class="control-group">
                <label class="control-label">Nama :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Isi :</label>
                <div class="controls">
                  <input type="number" class="span11" placeholder="" />
                </div>
              </div>
             
            
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </div>
            </form>
          </div>
        </div>
       </div>
    </div>
  </div>
    </div>
@endsection
@section('js')
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('assets/js/maruti.tables.js')}}"></script>
@endsection