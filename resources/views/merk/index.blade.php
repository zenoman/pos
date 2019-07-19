@extends('layout.master')
@section('header')
  @foreach($websetting as $web)
  <title>{{$web->webName}}</title><meta charset="UTF-8" />
  <link href="{{asset('img/setting/'.$web->ico)}}" rel="icon" type="image/png">
  @endforeach
@endsection
@section('content')
<div id="content">
      <div id="content-header">
        <div id="breadcrumb">
        
      </div>
                <h1>Merk Barang</h1>
      </div>
      
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span8">
        @if (session('status'))
        <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              {{ session('status') }}</div>
        @endif
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>List Data Merk</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
               @foreach($data as $row)
                <tr>
                  <td>{{$i++}}</td>
                  <td style="text-align: center;">
                    <img src="{{asset('img/merk/'.$row->gambar)}}" alt="" width="50px;">
                  </td>
                  <td style="text-align: center;">{{$row->nama}}</td>
                 
                  <td style="text-align: center;">
                   <form method="post" action="merk-barang/{{$row->id}}">
                      <input type="hidden" name="_method" value="DELETE">
                      {{csrf_field()}}
                      <button 
                        type="button" 
                        class="btn btn-success tomboledit"
                        data-id="{{$row->id}}"
                        data-gambar="{{$row->gambar}}"
                        data-nama="{{$row->nama}}">
                          <i class="icon icon-wrench"></i>
                      </button>
                      <button type="submit" onclick="return confirm('Hapus Data ?')" class="btn btn-danger btn-sm">
                        <i class="icon icon-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
               
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
       <div class="span4">
         <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-plus"></i> </span>
            <h5>Tambah Data Merk</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="merk-barang" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf
              <div class="control-group">
                <label class="control-label">Nama :</label>
                <div class="controls">
                  <input type="text" class="span11" name="nama" required />

                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Gambar :</label>
                <div class="controls">
                  <input type="file" accept="image/*" id="photo" class="span11" name="foto" required />
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


    <div id="editdata" class="modal hide">
              <div class="modal-header">
                <h3>Edit Data Merk</h3>
              </div>
              <div class="modal-body">
                <form action="#" id="editmerk" method="post" enctype="multipart/form-data">
              <div class="row-fluid">
              <div class="span12"></div>
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Nama :</label>
                <div class="controls">
                  <input type="text" class="span11" name="nama" id="nama" />
                 <input type="hidden" name="gambar" id="gambar" required />
                </div>
              </div>
            </div>
              <div class="span12">
                <img src="" id="fotonya" alt="" width="20%"><br><br>
              <div class="control-group">
                <label class="control-label">Ganti Gambar :</label>
                <div class="controls">
                  <input type="file" accept="image/*" id="newphoto" class="span11" name="foto"/>
                </div>
              </div>
            </div>
            @csrf
            <input type="hidden" name="_method" value="PUT">
              </div>
              <div class="form-actions text-right">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
              </div>
            </form>
              </div>
            </div>
@endsection
@section('js')
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('assets/js/maruti.tables.js')}}"></script>
<script src="{{asset('assets/js/page/merkbarang.js')}}"></script>
@endsection