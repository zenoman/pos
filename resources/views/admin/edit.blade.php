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
            <h5>Edit Data Admin</h5>
          </div>
          <div class="widget-content nopadding">
            @foreach($data as $row)
            <form action="{{url('admin/'.$row->id)}}" method="POST" class="form-horizontal">
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Username :</label>
                <div class="controls">
                  <input type="text" class="span11" name="username" value="{{$row->username}}" required/>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Nama :</label>
                <div class="controls">
                  <input type="text" class="span11" name="nama" value="{{$row->name}}" required/>
                </div>
              </div>
            </div>
              </div>
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                  <input type="email" class="span11" name="email" value="{{$row->email}}" required/>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">No.Telp :</label>
                <div class="controls">
                  <input type="text" class="span11" name="notelp" max="13" value="{{$row->no_telp}}" required />
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
                    <option value="admin"<?php if($row->level=='admin'){echo "selected";}?>>Admin</option>
                    <option value="super_admin"<?php if($row->level=='super_admin'){echo "selected";}?>>Super Admin</option>
                    <option value="programmer"<?php if($row->level=='programmer'){echo "selected";}?>>Programmer</option>
                  </select>
                </div>
              </div>
            </div>
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Password Baru:</label>
                <div class="controls">
                  <input type="password" class="span11" name="password"/>
                  <span class="help-block">Isi apabila password ingin di ganti</span>
                </div>
              </div>
            </div>
            
              </div>
              <div class="row-fluid">
                <div class="span6">
              <div class="control-group">
                <label class="control-label">Konfirmasi Password:</label>
                <div class="controls">
                  <input type="password" class="span11" name="konfirmasi_password"/>
                  <span class="help-block">Isi apabila password ingin di ganti</span>
                </div>
              </div>
            </div>
              </div>
              @csrf
              <input type="hidden" name="_method" value="PUT">
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