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
                <h1>Supplier</h1>
      </div>
      
      <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <a href="#tambahdata" data-toggle="modal" class="btn btn-primary">Tambah Data</a>
        <br><br>
        @if (session('status'))
        <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              {{ session('status') }}</div>
        @endif
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
                @php 
                $i=1;
                @endphp
                @foreach($data as $row)                
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$row->nama}}</td>
                  <td>{{$row->alamat}}</td>
                  <td>{{$row->no_telp}}</td>
                  <td>{{$row->keterangan}}</td>
                  <td style="text-align: center;">
                    <form method="post" action="supplier/{{$row->id}}">
                      <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                      <button 
                        type="button" 
                        class="btn btn-success tomboledit" 
                        data-nama="{{$row->nama}}"
                        data-alamat="{{$row->alamat}}"
                        data-telp="{{$row->no_telp}}"
                        data-keterangan="{{$row->keterangan}}"
                        data-kode="{{$row->id}}">
                          <i class="icon icon-wrench"></i>
                      </button>
                      <button type="submit" onclick="return confirm('Hapus Data ?')" class="btn btn-danger btn-sm"><i class="icon icon-trash"></i></button>
                    </form>
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
     <div id="tambahdata" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Tambah Data Supplier</h3>
              </div>
              <div class="modal-body">
                <form action="{{url('supplier')}}" method="post">
              <div class="row-fluid">
              <div class="span12"></div>
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Nama :</label>
                <div class="controls">
                  <input type="text" class="span11" name="nama" required />
                </div>
              </div>
            </div>
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Alamat :</label>
                <div class="controls">
                  <input type="text" class="span11" name="alamat" required/>
                </div>
              </div>
            </div>
            <div class="span12">
              <div class="control-group">
                <label class="control-label">No.Telp :</label>
                <div class="controls">
                  <input type="text" class="span11" max="14" name="no_telp" required />
                </div>
              </div>
            </div>
            <div class="span12">
              <div class="control-group">
                <label class="control-label">Keterangan :</label>
                <div class="controls">
                  <textarea class="span11" name="keterangan">
                    
                  </textarea>
                  
                </div>
              </div>
            </div>
            @csrf
              </div>
              <div class="form-actions text-right">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </div>
            </form>
              </div>
            </div>



            <div id="editdata" class="modal hide">
              <div class="modal-header">
                
                <h3>Edit Data Supplier</h3>
              </div>
              <div class="modal-body">
                <form action="#" id="formedit" method="post">
              <div class="row-fluid">
              <div class="span12"></div>
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Nama :</label>
                <div class="controls">
                  <input type="text" class="span11" name="nama" id="nama" required />
                </div>
              </div>
            </div>
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Alamat :</label>
                <div class="controls">
                  <input type="text" class="span11" name="alamat" id="alamat" required/>
                </div>
              </div>
            </div>
            <div class="span12">
              <div class="control-group">
                <label class="control-label">No.Telp :</label>
                <div class="controls">
                  <input type="text" class="span11" max="14" id="telp" name="no_telp" required />
                </div>
              </div>
            </div>
            <div class="span12">
              <div class="control-group">
                <label class="control-label">Keterangan :</label>
                <div class="controls">
                  <textarea class="span11" name="keterangan" id="keterangan">
                    
                  </textarea>
                  
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
<script src="{{asset('assets/js/page/supplier.js')}}"></script>
@endsection