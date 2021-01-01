<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Wahana Tirta Lestari</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">WTL</a>
      </div>
      <ul class="sidebar-menu">
          @if (auth()->user()->level=="master")
          <li class="menu-header">Master Admin WTL</li>
          <li ><a class="nav-link" href="{{route('dashboard')}}"><i class="fas fa-crown"></i> <span>Master</span></a></li>
          @endif

          <li class="menu-header">Admin WTL</li>
          <li class="{{request()->is('adm') ? 'active' : ''}}"><a class="nav-link" href="{{route('dashboard')}}"><i class="fas fa-paper-plane"></i> <span>Dashboard</span></a></li>
          <li class="{{request()->is('adm/user*') ? 'active' : ''}}"><a class="nav-link" href="{{route('user-admin')}}"><i class="far fa-user"></i> <span>Auth</span></a></li>
          <li class="{{request()->is('adm/product*') ? 'active' : ''}}"><a class="nav-link" href="{{route('product-admin')}}"><i class="fas fa-swatchbook"></i> <span>Produk</span></a></li>
          <li class="{{request()->is('adm/pesanan*') ? 'active' : ''}}"><a class="nav-link" href="{{route('pesanan-admin')}}"><i class="fas fa-handshake"></i> <span>Pesanan</span></a></li>
          <li class="{{request()->is('adm/article*') ? 'active' : ''}}"><a class="nav-link" href="{{route('article-admin')}}"><i class="far fa-file-alt"></i> <span>Artikel</span></a></li>
          <li class="{{request()->is('adm/penjualan*') ? 'active' : ''}}"><a class="nav-link" href="{{route('penjualan-admin')}}"><i class="fas fa-book"></i> <span>Laporan Penjualan</span></a></li>
          {{-- <li class="{{request()->is('adm/contact') ? 'active' : ''}}"><a class="nav-link" href="{{route('contact-index')}}"><i class="far fa-envelope"></i> <span>Pesan</span></a></li> --}}

        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="{{route('home')}}" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Go to main website
          </a>
        </div>
    </aside>
  </div>
