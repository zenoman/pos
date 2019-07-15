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
                <h1>Setting</h1>
      </div>
      
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        @if (session('status'))
        <div class="alert alert-danger alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              {{ session('status') }}</div>
        @endif
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-wrench"></i> </span>
            <h5>Edit Setting Website</h5>
          </div>
          <div class="widget-content nopadding">
            @foreach($data as $row)
            <form action="{{url('setting')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Nama Website :</label>
                <div class="controls">
                  <input type="text" class="span11" name="nama" required value="{{$row->webName}}" />
                  <input type="hidden" name="kode" required value="{{$row->idsettings}}" />
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                  <input type="text" class="span11" name="email" required value="{{$row->email}}" />
                </div>
              </div>
            </div>
              </div>
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Alamat :</label>
                <div class="controls">
                  <input type="text" class="span11" name="alamat" required value="{{$row->alamat}}"/>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Kontak 1 :</label>
                <div class="controls">
                  <input type="text" class="span11" name="kontak1" required value="{{$row->kontak1}}"/>
                </div>
              </div>
            </div>
              </div>
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Kontak 2 :</label>
                <div class="controls">
                  <input type="text" class="span11" name="kontak2" required value="{{$row->kontak2}}"/>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Kontak 3 :</label>
                <div class="controls">
                  <input type="text" class="span11" name="kontak3" required value="{{$row->kontak3}}"/>
                </div>
              </div>
            </div>
              </div>

              <div class="row-fluid">
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Deskripsi :</label>
                <div class="controls">
                  <textarea name="keterangan" class="span11">
                    {{$row->keterangan}}
                  </textarea>
                </div>
              </div>
            </div>
              </div>

            <div class="row-fluid">
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Cara Belanja :</label>
                <div class="controls">
                  <textarea name="peraturan" class="span11">
                    {{$row->peraturan}}
                  </textarea>
                </div>
              </div>
            </div>
              </div>

              <div class="row-fluid">
                <div class="span6">
             
              <div class="control-group">

                <label class="control-label">Favicon :</label>
                <div class="controls">
                  <img src="{{asset('img/setting/'.$row->ico)}}" width="10%">
                 <br>
                  <input type="file" class="span11" name="ico" max="13" required accept="image/*"/>
                </div>
              </div>
            </div>

             <div class="span6">
              <img src="" alt="">
              <div class="control-group">
                <label class="control-label">Logo :</label>
                <div class="controls">
                   <img src="{{asset('img/setting/'.$row->logo)}}" width="30%">
                 <br>
                  <input type="file" class="span11" name="logo" max="13" required accept="image/*"/>
                </div>
              </div>
            </div>
            
              </div>
              @csrf
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" onclick="history.go(-1)" class="btn btn-danger">Kembali</button>
              </div>
            </form>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
@endsection