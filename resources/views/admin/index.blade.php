@extends('layout.master')

@section('content')
<div id="content">
      <div id="content-header">
        <div id="breadcrumb">
        
      </div>
                <h1>Admin</h1>
      </div>
      
      <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <a href="{{url('admin/create')}}" class="btn btn-primary">Tambah Data</a>
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>List Data Admin</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>No.Telp</th>
                  <th>Level</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Hariono</td>
                  <td>Hariono@gmail.com</td>
                  <td>09890234890</td>
                  <td>Admin</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Hariono</td>
                  <td>Hariono@gmail.com</td>
                  <td>09890234890</td>
                  <td>Admin</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Hariono</td>
                  <td>Hariono@gmail.com</td>
                  <td>09890234890</td>
                  <td>Admin</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Hariono</td>
                  <td>Hariono@gmail.com</td>
                  <td>09890234890</td>
                  <td>Admin</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Hariono</td>
                  <td>Hariono@gmail.com</td>
                  <td>09890234890</td>
                  <td>Admin</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Hariono</td>
                  <td>Hariono@gmail.com</td>
                  <td>09890234890</td>
                  <td>Admin</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Hariono</td>
                  <td>Hariono@gmail.com</td>
                  <td>09890234890</td>
                  <td>Admin</td>
                  <td style="text-align: center;">
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Hariono</td>
                  <td>Hariono@gmail.com</td>
                  <td>09890234890</td>
                  <td>Admin</td>
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
@endsection
@section('js')
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('assets/js/maruti.tables.js')}}"></script>
@endsection