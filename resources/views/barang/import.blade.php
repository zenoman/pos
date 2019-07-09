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
        <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> <span class="icon"><i class="icon-magnet"></i></span>
                <h5>Cara Import</h5>
                </a> </div>
            </div>
            <div class="accordion-body collapse" id="collapseGOne" style="height: 0px;">
              <div class="widget-content">
                <ol>
                  <li>
                    Download file template yang dibutuhkan
                  </li>
                  <li>
                    Berdoa dahulu sebelum upload
                  </li>
                  <li>
                    upload file yang di butuhkan
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> <span class="icon"><i class="icon-magnet"></i></span>
                <h5>Download Template</h5>
                </a> </div>
            </div>
            <div class="accordion-body collapse" id="collapseGTwo" style="height: 0px;" align="center">
              <br>
              <button class="btn btn-primary">Download Kategori</button>
              <button class="btn btn-warning">Download Warning</button>
              <button class="btn btn-success">Download Template</button>
              <br><br>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse"> <span class="icon"><i class="icon-magnet"></i></span>
                <h5>Upload Barang</h5>
                </a> </div>
            </div>
            <div class="accordion-body in collapse" id="collapseGThree" style="height: auto;">
              <div class="widget-content">
                <form action="#" method="get">
              <div class="row-fluid">
              <div class="span12">
              <div class="control-group">
                <label class="control-label">Upload File :</label>
                <div class="controls">
                  <input type="file" class="span11"/>
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
          </div>
        </div>
             <button type="button" onclick="history.go(-1)" class="btn btn-danger">Kembali</button>
      </div>
    </div>
  </div>
    </div>
@endsection