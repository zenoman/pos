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
                <h1>Admin</h1>
      </div>
      
      <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        @if(Auth::user()->level!='admin')
        <a href="{{url('admin/create')}}" class="btn btn-primary">Tambah Data</a>
        @endif
<br><br>
        @if (session('status'))
        <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              {{ session('status') }}</div>
        @endif
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
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No.Telp</th>
                  <th>Level</th>
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
                  <td>{{$row->username}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->no_telp}}</td>
                  <td>{{$row->level}}</td>
                  <td style="text-align: center;">
                    @if(Auth::user()->id==$row->id)
                    -
                    @else
                      @if(Auth::user()->level=='admin')
                      -
                      @elseif(Auth::user()->level=='super_admin')
                        @if($row->level=='programmer')
                          -
                        @else
                            <form method="post" action="admin/{{$row->id}}">
                                              <input type="hidden" name="_method" value="DELETE">
                                              {{csrf_field()}}
                                              <a href="{{url('admin/'.$row->id)}}" class="btn btn-success">
                                          <i class="icon icon-wrench"></i></a>
                                              <button type="submit" onclick="return confirm('Hapus Data ?')" class="btn btn-danger btn-sm"><i class="icon icon-trash"></i></button>
                                          </form>
                          @endif                
                        @else
                        <form method="post" action="admin/{{$row->id}}">
                                              <input type="hidden" name="_method" value="DELETE">
                                              {{csrf_field()}}
                                              <a href="{{url('admin/'.$row->id)}}" class="btn btn-success">
                                          <i class="icon icon-wrench"></i></a>
                                              <button type="submit" onclick="return confirm('Hapus Data ?')" class="btn btn-danger btn-sm"><i class="icon icon-trash"></i></button>
                                          </form>
                      
                        
                      @endif
                    @endif
                    
                    
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
@endsection
@section('js')
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('assets/js/maruti.tables.js')}}"></script>
@endsection