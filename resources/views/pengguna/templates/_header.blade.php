<header id="header" class="full-header">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <div id="logo">
                <a href="{{ route('pengguna.home') }}" class="standard-logo" data-dark-logo="images/logo gor 4.png"><img
                        src="{{ asset('images/logo gor 4.png') }}" alt="Canvas Logo"></a>
                <a href="{{ route('pengguna.home') }}" class="retina-logo" data-dark-logo="images/logo gor 4.png"><img
                        src="{{ asset('images/logo gor 4.png') }}" alt="Canvas Logo"></a>
            </div>

            <nav id="primary-menu">
                <ul>
                    <li class="current"><a href="{{ route('pengguna.home') }}">
                            <div>Home</div>
                        </a>
                    </li>
                    <li><a href="{{ route('pengguna.fasilitas') }}">
                            <div>Fasilitas</div>
                        </a>
                    </li>
                    <li class="mega-menu"><a href="{{ route('pengguna.daftar_acara') }}">
                            <div>Acara</div>
                        </a>
                    </li>
                    <li class="mega-menu"><a href="{{ route('pengguna.artikel') }}">
                            <div>Artikel</div>
                        </a>
                    </li>
                </ul>

                {{-- <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i
                            class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value=""
                            placeholder="Type &amp; Hit Enter..">
                    </form>
                </div> --}}
            </nav>
        </div>
    </div>
</header>