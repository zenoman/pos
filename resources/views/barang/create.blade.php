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
          <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Kode Barang :</label>
                <div class="controls">
                  <input type="text" class="span11" value="BRG0001" readonly="" />
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Nama Barang :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
              </div>
              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Kategori :</label>
                <div class="controls">
                  <select name="" id="" class="span11">
                    <option value="">Baju</option>
                    <option value="">Kemeja</option>
                    <option value="">Jilbab</option>
                    <option value="">Kaos Oblong</option>
                  </select>
                </div>
              </div>
            </div>
             <div class="span6">
              <div class="control-group">
                <label class="control-label">Diskon :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
           </div>

              <div class="row-fluid">
              <div class="span6">
              <div class="control-group">
                <label class="control-label">Harga Beli :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="control-group">
                <label class="control-label">Harga Jual :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
           
              </div>
              <div class="row-fluid">
                 <div class="span6">
              <div class="control-group">
                <label class="control-label">Foto :</label>
                <div class="controls">
                  <input type="file" class="span11" placeholder="" />
                </div>
              </div>
            </div>
              </div>
              <div class="row-fluid">
                 <div class="span12">
              <div class="control-group">
                <label class="control-label">Deskripsi</label>
                <div class="controls">
                  <textarea name="" id="" class="span11">
                    
                  </textarea>
                </div>
              </div>
            </div>
              </div>
              <hr>
              <div id="newlink">
              <div class="row-fluid">
              <div class="span4">
              <div class="control-group">
                <label class="control-label">Ukuran :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
             <div class="span4">
              <div class="control-group">
                <label class="control-label">Warna :</label>
                <div class="controls">
                  <select name="" id="" class="span11">
                    <option value="">Merah</option>
                    <option value="">Biru</option>
                    <option value="">Hitam</option>
                    <option value="">Ungu</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="control-group">
                <label class="control-label">Stok :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
           </div>
         </div>
           <div id="addnew">
           </div>
              <div class="form-actions">
                <a href="javascript:new_link()" class="btn btn-warning"><i class="fa fa-plus"></i> Tambah Variasi</a>
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
            <div id="newlinktpl" style="display:none" class="form-group">
            <hr>
            <div class="row-fluid">
              <div class="span4">
              <div class="control-group">
                <label class="control-label">Ukuran :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
                </div>
              </div>
            </div>
             <div class="span4">
              <div class="control-group">
                <label class="control-label">Warna :</label>
                <div class="controls">
                  <select name="" id="" class="span11">
                    <option value="">Merah</option>
                    <option value="">Biru</option>
                    <option value="">Hitam</option>
                    <option value="">Ungu</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="control-group">
                <label class="control-label">Stok :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="" />
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