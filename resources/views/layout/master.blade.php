<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>AmartaLink</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap-responsive.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/maruti-style.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/maruti-media.css')}}" class="skin-color" />	
	</head>
	<body>
		
		
<!--Header-part-->
<div id="header">
  <h1><a href="#">AMARTA LINK</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<!-- <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div> -->
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse"><ul class="nav">
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text">Jhon Doe</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sInbox" title="" href="#">Edit Profile</a></li>
        <li><a class="sAdd" title="" href="#">Logout</a></li>
      </ul>
    </li>
    
  
  </ul>
</div>
<!--close-top-Header-menu-->

	<div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-th-list"></i> Grid Layout</a><ul>
    <li class="active"><a href="{{url('dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
   
    <li class="submenu"> <a href="#"><i class="icon icon-user"></i> <span>Akun</span></a>
      <ul>
        <li><a href="{{url('admin')}}">Admin</a></li>
        <li><a href="{{url('user')}}">User</a></li>
        <li><a href="{{url('supplier')}}">Suplier</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-tasks"></i> <span>Master Data</span></a>
      <ul>
        <li><a href="{{url('kategori-barang')}}">Kategori Barang</a></li>
        <li><a href="{{url('uom-barang')}}">UOM</a></li><!-- 
        <li><a href="form-wizard.html">Suplier</a></li> -->
      </ul>
    </li>
    <li class="active"><a href="#"><i class="icon icon-th-large"></i> <span>Data Barang</span></a>
    </li>
    <li class="active"><a href="{{url('pembelian')}}"><i class="icon icon-plus"></i> <span>Pembelian</span></a>
    </li>
    <li class="active"><a href="#"><i class="icon icon-shopping-cart"></i> <span>Penjualan</span></a>
    </li>
    <li class="active"><a href="#"><i class="icon icon-file"></i> <span>Laporan</span></a>
    </li>
    
  </ul>
		
		</div>
		
		@yield('content')
		
            <script src="{{asset('assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery.ui.custom.js')}}"></script>
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/js/maruti.js')}}"></script>
            @yield('js')
	</body>

</html>
