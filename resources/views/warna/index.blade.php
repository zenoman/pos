@extends('layout.master')

@section('content')
<div id="content">
      <div id="content-header">
        <div id="breadcrumb">
        
      </div>
                <h1>Warna</h1>
      </div>
      
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span8">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>List Data Warna</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Warna</th>
                  <th>Hexa</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
               
                <tr>
                  <td>1</td>
                  <td>001</td>
                  <td>Biru</td>
                  <td style="text-align: center;">
                    <span class="label label-default" style="background-color:#4b68b4;">
                      #4b68b4
                    </span>
                  </td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                  
                <tr>
                  <td>2</td>
                  <td>002</td>
                  <td>Hijau</td>
                  <td style="text-align: center;">
                    <span class="label label-default" style="background-color:#426a15;">
                      #426a15
                    </span>
                  </td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>003</td>
                  <td>Biru Muda</td>
                  <td style="text-align: center;">
                    <span class="label label-default" style="background-color:#00ffff;">
                      #00ffff
                    </span>
                  </td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>004</td>
                  <td>Hijau Daun</td>
                  <td style="text-align: center;">
                    <span class="label label-default" style="background-color:#40bf56;">
                      #40bf56
                    </span>
                  </td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>005</td>
                  <td>Merah Muda</td>
                  <td style="text-align: center;">
                    <span class="label label-default" style="background-color:#c82bd5;">
                      #c82bd5
                    </span>
                  </td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>

                <tr>
                  <td>6</td>
                  <td>006</td>
                  <td>Hitam</td>
                  <td style="text-align: center;">
                    <span class="label label-default" style="background-color:#000040;">
                      #000040
                    </span>
                  </td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>007</td>
                  <td>Ungu</td>
                  <td style="text-align: center;">
                    <span class="label label-default" style="background-color:#8080c0;">
                      #8080c0
                    </span>
                  </td>
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
            <h5>Tambah Data Warna</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">
           
              <div class="control-group">
                <label class="control-label">Kode :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Warna :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Hexa :</label>
                <div class="controls">
                  <input type="color" class="span11" placeholder="" />
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