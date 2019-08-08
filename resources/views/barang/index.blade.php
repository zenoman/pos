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
        @if (session('status'))
        <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              {{ session('status') }}</div>
        @endif
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
                  <th>Sub Kategori</th>
                  <th class="text-center">Aksi</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1;?>
                @foreach($data as $row)
                <tr>
                  <td style="text-align: center;">{{$i++}}</td>
                  <td style="text-align: center;">{{$row->kode}}</td>
                  <td style="text-align: center;">{{$row->nama}}</td>
                  <td style="text-align: center;">{{$row->namakategori}}</td>
                  <td style="text-align: center;">@if($row->namasub=='')
                    -
                  @else
                  {{$row->namasub}}
                  @endif</td>
                  <td style="text-align: center;">
                    <a href="{{url('barang/'.$row->kode)}}" class="btn btn-success"><i class="icon icon-wrench"></i></a>
                    <button class="btn btn-danger"><i class="icon icon-trash"></i></button>
                  </td>
                  <td style="text-align: center;">
                    <input name="kodebarang[]" type="checkbox" id="checkbox[]">
                  </td>
                </tr>
              @endforeach
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