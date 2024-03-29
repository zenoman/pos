<!DOCTYPE html>
<html lang="en">
	
<head>
  @yield('header')
		
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap-responsive.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/maruti-style.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/maruti-media.css')}}" class="skin-color"/>
  @yield('css')	
	</head>
	<body>
<div id="header">
  <h1><a href="#">AMARTA LINK</a></h1>
</div>
<div id="user-nav" class="navbar navbar-inverse"><ul class="nav">
    
    <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text">{{ Auth::user()->name }}</span> <b class="caret"></b></a>
      <ul class="dropdown-menu text-left">
        <li><a class="sInbox" title="" href="{{url('admin/'.Auth::user()->id)}}">Edit Profile</a></li>
        <li>
           <a class="sAdd" title="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </li>
      </ul>
    </li>
    <li class=""><a title="" href="{{url('setting')}}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
  
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
        <li><a href="{{url('uom-barang')}}">UOM</a></li>
        <li><a href="{{url('warna')}}">Warna</a></li>
        <li><a href="{{url('merk-barang')}}">Merk</a></li>
      </ul>
    </li>
    <li class="active"><a href="{{url('barang')}}"><i class="icon icon-th-large"></i> <span>Data Barang</span></a>
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
		 <div class="row-fluid">
      <div id="footer" class="span12">Develop By <a href="#">Joyoboyo Intermedia</a> </div>
    </div>
            <script src="{{asset('assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery.ui.custom.js')}}"></script>
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/js/maruti.js')}}"></script>
            @yield('js')
	</body>

</html>
