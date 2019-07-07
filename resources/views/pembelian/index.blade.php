@extends('layout.master')

@section('content')
<div id="content">
      <div id="content-header">
        <div id="breadcrumb">
        
      </div>
          <h1>Pembelian</h1>
      </div>
      
      <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <a href="{{url('pembelian/create')}}" class="btn btn-primary">Tambah Data</a>
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
                  <th>Kode</th>
                  <th>Supplier</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Pembuat</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>P0001</td>
                  <td>GMK</td>
                  <td>2019-12-27</td>
                  <td>Lunas</td>
                  <td>Subandi</td>
                  <td style="text-align: center;">
                    <button class="btn btn-default"><i class="icon icon-eye-open"></i></button>
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                 <tr>
                  <td>2</td>
                  <td>P0002</td>
                  <td>cv. maju mundur</td>
                  <td>2019-12-27</td>
                  <td>Lunas</td>
                  <td>Subandi</td>
                  <td style="text-align: center;">
                    <button class="btn btn-default"><i class="icon icon-eye-open"></i></button>
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                 <tr>
                  <td>3</td>
                  <td>P0003</td>
                  <td>D'vina Hijab</td>
                  <td>2019-12-30</td>
                  <td>Lunas</td>
                  <td>maryono</td>
                  <td style="text-align: center;">
                    <button class="btn btn-default"><i class="icon icon-eye-open"></i></button>
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                 <tr>
                  <td>4</td>
                  <td>P0004</td>
                  <td>toko Abadi</td>
                  <td>2019-11-27</td>
                  <td>Lunas</td>
                  <td>Subandi</td>
                  <td style="text-align: center;">
                    <button class="btn btn-default"><i class="icon icon-eye-open"></i></button>
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                 <tr>
                  <td>5</td>
                  <td>P0005</td>
                  <td>GMK</td>
                  <td>2019-12-27</td>
                  <td>Lunas</td>
                  <td>Subandi</td>
                  <td style="text-align: center;">
                    <button class="btn btn-default"><i class="icon icon-eye-open"></i></button>
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                 <tr>
                  <td>6</td>
                  <td>P0006</td>
                  <td>GMK</td>
                  <td>2019-12-27</td>
                  <td>Lunas</td>
                  <td>Subandi</td>
                  <td style="text-align: center;">
                    <button class="btn btn-default"><i class="icon icon-eye-open"></i></button>
                    <button class="btn btn-success"><i class="icon icon-wrench"></i></button>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                </tr>
                 <tr>
                  <td>7</td>
                  <td>P0007</td>
                  <td>GMK</td>
                  <td>2019-12-27</td>
                  <td>Lunas</td>
                  <td>Subandi</td>
                  <td style="text-align: center;">
                    <button class="btn btn-default"><i class="icon icon-eye-open"></i></button>
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