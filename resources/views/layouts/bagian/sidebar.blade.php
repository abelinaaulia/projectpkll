<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                </div>
                <!-- /input-group -->
            </li>
                      <li>
                <a href="{{ route('home') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Home</a>
            </li>
{{--
            <li>
                <a href="{{view('home')}}">Home</a>
            </li> --}}

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Inventaris Sekolah<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{route('barang.index')}}">Barang</a>
                    </li>
                    <li>
                        <a href="{{route('barangmasuk.index')}}">Barang Masuk</a>
                    </li>
                    <li>
                        <a href="{{route('barangkeluar.index')}}">Barang Keluar</a>
                    </li>
                    <li>
                        <a href="{{route('peminjaman.index')}}">Peminjaman</a>
                    </li>
                    <li>
                        <a href="{{route('pengembalian.index')}}">Pengembalian</a>
                    </li>
                     <li>
                        <a href="{{route('laporanpeminjaman.index')}}">Laporan Peminjaman</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
