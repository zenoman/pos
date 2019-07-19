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
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-plus"></i> </span>
            <h5>Tambah Data Barang</h5>
          </div>
          <div class="widget-content">
             <div class="row-fluid">
                <div class="span12">
            <div class="widget-box" id="informasi-produk">
              <div class="widget-title">
                <span class="icon">
                  <i class="icon-th-list"></i>
                </span>
                <h5>Informasi Produk</h5>
              </div>
              <div class="widget-content">
                <div class="form-horizontal">
                  <div class="control-group">
                <label class="control-label">Nama Produk :</label>
                <div class="controls">
                  <input type="text" class="span11">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Deskripsi Produk :</label>
                <div class="controls">
                  <textarea name="" class="span11" rows="3"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Kategori & sub Kategori :</label>
                <div class="controls">
                  <select name="halo" id="" class="span5">
                    <option value="">halo</option>
                    <option value="">halo</option>
                    <option value="">halo</option>
                  </select>
                  <select name="halo" id="" class="span6">
                    <option value="">halo</option>
                    <option value="">halo</option>
                    <option value="">halo</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Merk :</label>
                <div class="controls">
                  <select name="halo" id="" class="span11">
                    <option value="">halo</option>
                    <option value="">halo</option>
                    <option value="">halo</option>
                  </select>
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Asal Produk :</label>
                <div class="controls">
                  <input type="text" class="span11">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Bahan :</label>
                <div class="controls">
                  <input type="text" class="span11">
                </div>
              </div>
                </div>
                
              </div>
            </div>
            <div class="widget-box" id="informasi-penjualan">
              <div class="widget-title">
                <span class="icon">
                  <i class="icon-th-list"></i>
                </span>
                <h5>Informasi Penjualan</h5>
              </div>
              <div class="widget-content">
                <div class="form-horizontal">
                  <div class="control-group">
                <label class="control-label">Variasi 1 :</label>
                <div class="controls">
                  <input type="text" class="span10">
                  <button class="btn btn-primary add-on">Tambah</button>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Variasi 2 :</label>
                <div class="controls">
                  <input type="text" class="span10">
                  <button class="btn btn-primary add-on">Tambah</button>
                </div>
              </div>
                </div>
                <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  
                  <th>Nama</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
              </tbody>
            </table>
              </div>
            </div>
            <div class="widget-box" id="informasi-produk">
              <div class="widget-title">
                <span class="icon">
                  <i class="icon-th-list"></i>
                </span>
                <h5>Pengaturan Media</h5>
              </div>
              <div class="widget-content">
                <div class="form-horizontal">
                  <div class="control-group">
                <label class="control-label">Foto Produk :</label>
                <div class="controls">
                  <input type="text" class="span11">
                </div>
              </div>
             
                </div>
                
              </div>
            </div>
          </div>
                <!-- <div class="span3">
              <div class="widget-box">
              <div class="widget-title">
               
                <h5>Navigation</h5>
              </div>
              <div class="widget-content">
               <a href="#informasi-produk" class="btn btn-primary btn-block">Informasi Produk</a>
               <a href="#informasi-penjualan" class="btn btn-primary btn-block">Informasi Penjualan</a>
               <a href="#informasi-produk" class="btn btn-primary btn-block">Pengaturan Media</a>
              </div>
            </div>
            
          </div> -->
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
        @endsection

        @section('js')
     
        <script type="text/javascript">
         
var ct = 1;
function new_link()
{
    ct++;
    var div1 = document.createElement('div');
    div1.id = ct;
    // link to delete extended form elements
    var delLink = '<div align="right"><br><a href="javascript:delIt('+ ct +')" class="btn btn-danger" style="margin-right:20px;"><i class="fa fa-trash"></i> Hapus Variasi</a><br></br></div>';
    div1.innerHTML = document.getElementById('newlinktpl').innerHTML + delLink;
    document.getElementById('newlink').appendChild(div1);
}
// function to delete the newly added set of elements
function delIt(eleId)
{
    d = document;
    var ele = d.getElementById(eleId);
    var parentEle = d.getElementById('newlink');
    parentEle.removeChild(ele);
}
function validate(frm)
{
    var ele = frm.elements['feedurl[]'];
    if (! ele.length)
    {
        alert(ele.value);
    }
    for(var i=0; i<ele.length; i++)
    {
        alert(ele[i].value);
    }
    return true;
}
function add_feed()
{
    var div1 = document.createElement('div');
    div1.innerHTML = document.getElementById('newlinktpl').innerHTML;
    document.getElementById('newlink').appendChild(div1);
}
</script>
@endsection