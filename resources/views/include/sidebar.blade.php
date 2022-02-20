<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
	<div class="navbar-wrapper">
		<div class="navbar-brand header-logo">
			<a href="{{ url('anggota') }}" class="b-brand">
				<div class="b-bg">
					<i class="feather icon-triangle"></i>
				</div>
				<span class="b-title">Perpustakaan</span>
			</a>
		</div>

		<div class="navbar-content scroll-div">
			<ul class="nav pcoded-inner-navbar">
				<li class="nav-item">
					<a href="{{ url('anggota') }}" class="nav-link ">
						<span class="pcoded-micon">
							<i class="feather icon-home"></i>
						</span>
						<span class="pcoded-mtext">Dashboard</span>
					</a>
				</li>

				<li class="nav-item pcoded-hasmenu">
					<a href="javascript:" class="nav-link ">
						<span class="pcoded-micon">
							<i class="feather icon-file-text"></i>
						</span>
						<span class="pcoded-mtext">Master</span>
					</a>
					<ul class="pcoded-submenu">
						<li class=""><a href="{{ url('anggota') }}" class="">Anggota</a></li>
						<li class=""><a href="{{ url('buku') }}" class="">Buku</a></li>
					</ul>
				</li>
				<li class="nav-item pcoded-hasmenu">
					<a href="javascript:" class="nav-link ">
						<span class="pcoded-micon">
							<i class="feather icon-file-text"></i>
						</span>
						<span class="pcoded-mtext">Transaksi</span>
					</a>
					<ul class="pcoded-submenu">
						<li class=""><a href="{{ url('/peminjaman') }}" class="">Peminjaman</a></li>
						<li class=""><a href="{{ url('/pengembalian') }}" class="">Pengembalian</a></li>
					</ul>
				</li>
				<li class="nav-item pcoded-hasmenu">
					<a href="javascript:" class="nav-link ">
						<span class="pcoded-micon">
							<i class="feather icon-file-text"></i>
						</span>
						<span class="pcoded-mtext">Laporan</span>
					</a>
					<ul class="pcoded-submenu">
						<li class=""><a href="{{ url('/data_anggota') }}" class="">Data Anggota</a></li>
						<li class=""><a href="{{ url('/data_buku') }}" class="">Data Buku</a></li>
						<li class=""><a href="{{ url('/data_peminjaman') }}" class="">Data Peminjaman</a></li>
						<li class=""><a href="{{ url('/data_petugas') }}" class="">Data Petugas</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- [ navigation menu ] end -->