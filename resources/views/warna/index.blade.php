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
                <h1>Warna</h1>
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
                @php
                $i=1;
                @endphp
               @foreach($data as $row)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$row->kode}}</td>
                  <td>{{$row->warna}}</td>
                  <td style="text-align: center;">
                    <span class="label label-default" style="background-color:{{$row->hex}};">
                      {{$row->hex}}
                    </span>
                  </td>
                  <td style="text-align: center;">
                   <form method="post" action="warna/{{$row->id}}">
                                              <input type="hidden" name="_method" value="DELETE">
                                              {{csrf_field()}}
                                              <a href="#editdata{{$row->id}}" data-toggle="modal" class="btn btn-success"><i class="icon icon-wrench"></i></a>
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
       <div class="span4">
         <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-plus"></i> </span>
            <h5>Tambah Data Warna</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="warna" method="post" class="form-horizontal">
            @csrf
              <div class="control-group">
                <label class="control-label">Kode :</label>
                <div class="controls">
                  <input type="text" class="span11" name="kode" required />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Warna :</label>
                <div class="controls">
                  <input type="text" class="span11" name="warna" required />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Hexa :</label>
                <div class="controls">
                  <input type="color" class="span11" name="hex" required />
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
    @foreach($data as $row)
    <div id="editdata{{$row->id}}" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Edit Data Warna</h3>
              </div>
              <div class="modal-body">
                <form action="{{url('warna/'.$row->id)}}" method="post">
              <div class="row-fluid">
              <div class="span12"></div>
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Kode :</label>
                <div class="controls">
                  <input type="text" class="span11" name="kode" value="{{$row->kode}}" />
                </div>
              </div>
            </div>
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Warna :</label>
                <div class="controls">
                  <input type="text" class="span11" name="warna" value="{{$row->warna}}"/>
                </div>
              </div>
            </div>
            <div class="span12">
              <div class="control-group">
                <label class="control-label">Hexa :</label>
                <div class="controls">
                  <input type="color" class="span3" name="hex" value="{{$row->hex}}" />
                </div>
              </div>
            </div>
            @csrf
            <input type="hidden" name="_method" value="PUT">
              </div>
              <div class="form-actions text-right">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </div>
            </form>
              </div>
            </div>
          @endforeach
@endsection
@section('js')
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('assets/js/maruti.tables.js')}}"></script>
@endsection