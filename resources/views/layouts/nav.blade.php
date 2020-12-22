<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand text-warning" href="/">
        <strong>Wahana Tirta Lestari </strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link active" href="/">Home
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#"">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#"">Produk</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#"">Berita</a>
            </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons ml-2">
            <!-- Authentication Links -->
        @guest
            @if (Route::has('register'))
                <li class="nav-item mr-2">
                    <a href="{{ route('login') }}" class="nav-link border border-light rounded">
                        {{ __('Login') }}
                    </a>
                </li>
            @endif
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link text-white rounded">
                        {{ __('Register') }}
                    </a>
                </li>

            @else



                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-user"></i>  {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if (auth()->user()->level!="user")
                            <a href="{{ route('dashboard') }}" class="dropdown-item">Halaman Dashboard</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </li>
            @endguest
        </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->