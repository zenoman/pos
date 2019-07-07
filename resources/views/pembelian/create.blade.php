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
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-plus"></i> </span>
            <h5>Tambah Data Pembelian</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Pembuat :</label>
                <div class="controls">
                  <input type="text" class="span11" value="subandi" readonly />
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Tanggal :</label>
                <div class="controls">
                  <input type="text" class="span11" readonly="" value="{{date('Y-m-d')}}" />
                </div>
              </div>
            </div>
              </div>
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Supplier :</label>
                <div class="controls">
                  <select name="" id="" class="span11">
                    <option value="">TA Store</option>
                    <option value="">GMK</option>
                    <option value="">D'vina</option>
                    <option value="">CV. Maju Mundur</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Status :</label>
                <div class="controls">
                  <select name="" id="" class="span11">
                    <option value="">Lunas</option>
                    <option value="">Belum Lunas</option>
                  </select>
                </div>
              </div>
            </div>
              </div>
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Total Biaya :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Telah Dibayar :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
              </div>
              <hr>
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Barang :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Jumlah(Pcs) :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
              </div>
              <div class="form-actions">
                <button type="button" class="btn btn-primary">Tambah Barang</button>
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