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
       
                <?php $i=1;?>
                @foreach($data as $row)
                @php
                $databarangnya = DB::table('tb_barang')->where('kode_barang',$row->kode)->get();
                $jumlahbarangnya = DB::table('tb_barang')->where('kode_barang',$row->kode)->count();
                @endphp
               <div class="widget-box">
                  <div class="widget-content nopadding">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="text-align: center;vertical-align: middle;" rowspan="2">Gambar Utama</th>
                          <th style="text-align: center;vertical-align: middle;" rowspan="2">Kode Barang</th>
                          <th style="text-align: center;vertical-align: middle;" rowspan="2">Nama Barang</th>
                          <th style="text-align: center;" colspan="5">Varian</th>
                          <th style="text-align: center;vertical-align: middle;" rowspan="2">Kategori</th>
                          <th style="text-align: center;vertical-align: middle;" rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                          <th style="text-align: center;">
                            @if($row->varian=='')
                              -
                            @else
                              {{$row->varian}}
                            @endif
                          </th>
                          <th style="text-align: center;">
                            @if($row->subvarian=='')
                              -
                            @else
                              {{$row->subvarian}}
                            @endif
                          </th>
                          <th style="text-align: center;">
                            Harga Beli
                          </th>
                          <th style="text-align: center;">
                            Harga Jual
                          </th>
                          <th style="text-align: center;">
                            Stok
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $i=1; @endphp
                         @foreach($databarangnya as $brg)
                          @if($i==1)
                            <tr>
                              <td style="text-align: center;vertical-align: middle;" rowspan="{{$jumlahbarangnya}}"><img src="{{asset('img/barang/'.$row->namagambar)}}" width="80px"></td>
                              <td style="text-align: center;vertical-align: middle;" rowspan="{{$jumlahbarangnya}}">{{$row->kode}}</td>
                              <td style="text-align: center;vertical-align: middle;" rowspan="{{$jumlahbarangnya}}">
                                @if($row->status=='Y')
                                <span class="label label-success">
                                {{$row->nama}}
                                </span>
                                @else
                                <span class="label label-warning">
                                {{$row->nama}}
                                </span>
                                @endif

                              </td>
                               
                                  <td style="text-align: center;vertical-align: middle;">
                                    @if($brg->variasi=='')
                                  -
                                @else
                                  {{$brg->variasi}}
                                @endif</td>
                                  <td style="text-align: center;vertical-align: middle;"> @if($brg->subvariasi=='')
                                  -
                                @else
                                  {{$brg->subvariasi}}
                                @endif</td>
                                  <td style="text-align: center;vertical-align: middle;">{{"Rp ". number_format($brg->harga_beli,0,',','.')}}</td>
                                  <td style="text-align: center;vertical-align: middle;">{{"Rp ". number_format($brg->harga_jual,0,',','.')}}</td>
                                  <td style="text-align: center;vertical-align: middle;">{{$brg->stok}} Pcs</td>
                             
                              <td style="text-align: center;vertical-align: middle;" rowspan="{{$jumlahbarangnya}}">
                                {{$row->namakategori}}
                                @if($row->namasub=='')
                                  -
                                @else
                                  / {{$row->namasub}}
                                @endif
                              </td>
                              <td style="text-align: center;vertical-align: middle;" rowspan="{{$jumlahbarangnya}}">
                                <a href="{{url('cetakqr/'.$row->kode)}}" class="btn btn-button btn-mini" target="blank"><i class="icon icon-print"></i></a>
                                
                                  @if($row->status=='Y')
                                    <a href="{{url('arsipkan/'.$row->kode)}}" class="btn btn-warning btn-mini" onclick="return confirm('Arsipkan Barang ?')"><i class="icon icon-arrow-down"></i></a>
                                  @else
                                    <a href="{{url('tampilkanbarang/'.$row->kode)}}" class="btn btn-info btn-mini" onclick="return confirm('Tampilkan Barang ?')"><i class="icon icon-arrow-up"></i></a>
                                  @endif
                                <a href="{{url('barang/'.$row->kode)}}" class="btn btn-success btn-mini"><i class="icon icon-wrench"></i></a>
                                <a href="{{url('hapusbarang/'.$row->kode)}}" class="btn btn-danger btn-mini" onclick="return confirm('Hapus Data ?')"><i class="icon icon-trash"></i></a>
                              </td>
                            </tr>
                            @else
                            <tr>
                               <td style="text-align: center;vertical-align: middle;">
                                    @if($brg->variasi=='')
                                  -
                                @else
                                  {{$brg->variasi}}
                                @endif</td>
                                  <td style="text-align: center;vertical-align: middle;"> @if($brg->subvariasi=='')
                                  -
                                @else
                                  {{$brg->subvariasi}}
                                @endif</td>
                                  <td style="text-align: center;vertical-align: middle;">{{"Rp ". number_format($brg->harga_beli,0,',','.')}}</td>
                                  <td style="text-align: center;vertical-align: middle;">{{"Rp ". number_format($brg->harga_jual,0,',','.')}}</td>
                                  <td style="text-align: center;vertical-align: middle;">{{$brg->stok}} Pcs</td>
                            </tr>
                           
                            @endif
                            @php $i++; @endphp
                           @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              @endforeach
        
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