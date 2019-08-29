<!DOCTYPE html>
<html>
<head>
	<title>Cetak Kode QR</title>
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-responsive.min.css')}}" />
</head>
<body>
	<div class="container-fluid">
        <div class="row-fluid">
        	@foreach($databarang as $brg)
				<div class="span3 text-center" style="border-style: solid;">
          			{!! QrCode::size(200)->generate($brg->kode) !!}<br>
          			Kode Barang : {{$brg->kode}}<br>
          			Nama Barang : {{$brg->nama}}<br>
          			@php $namabarang = $brg->kode; @endphp
				</div>
			@endforeach
			
        </div>
        <div class="row-fluid text-center">
        	@foreach($datavarian as $vrn)
				<div class="span3" style="border-style: solid;">
          			{!! QrCode::size(200)->generate($vrn->kode_varian) !!}<br>
          			Nama Barang : {{$namabarang}}<br>
          			Kode Varian Barang : {{$vrn->kode_varian}}<br>
          			varian : {{$vrn->variasi}}, {{$vrn->subvariasi}}<br>
				</div>
			@endforeach
        </div>
    </div>
     <script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script>   
        $(document).ready(function() {
            window.print();
            window.close(); 
        });
    </script>
</body>
</html>