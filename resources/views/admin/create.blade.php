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
        @if (session('status'))
        <div class="alert alert-danger alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              {{ session('status') }}</div>
        @endif
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-plus"></i> </span>
            <h5>Tambah Data Admin</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="{{url('admin')}}" method="POST" class="form-horizontal">
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Username :</label>
                <div class="controls">
                  <input type="text" class="span11" name="username" required/>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Nama :</label>
                <div class="controls">
                  <input type="text" class="span11" name="nama" required/>
                </div>
              </div>
            </div>
              </div>
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                  <input type="email" class="span11" name="email" required/>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">No.Telp :</label>
                <div class="controls">
                  <input type="text" class="span11" name="notelp" max="13" required />
                </div>
              </div>
            </div>
              </div>
              <div class="row-fluid">
                <div class="span6">
              <div class="control-group">
                <label class="control-label">Level :</label>
                <div class="controls">
                  <select name="level" class="span11">
                    <option value="admin">Admin</option>
                    <option value="super_admin">Super Admin</option>
                    <option value="programmer">Programmer</option>
                  </select>
                </div>
              </div>
            </div>
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Password Baru:</label>
                <div class="controls">
                  <input type="password" class="span11" name="password" required />
                 
                </div>
              </div>
            </div>
            
              </div>
              <div class="row-fluid">
                <div class="span6">
              <div class="control-group">
                <label class="control-label">Konfirmasi Password:</label>
                <div class="controls">
                  <input type="password" class="span11" name="konfirmasi_password" required />
                 
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
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
@endsection