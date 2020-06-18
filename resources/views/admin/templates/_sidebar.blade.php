<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.fasilitas') }}">
          <i class="mdi mdi-apps menu-icon"></i>
          <span class="menu-title">Data Fasilitas</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.acara') }}">
          <i class="mdi mdi-calendar menu-icon"></i>
          <span class="menu-title">Data Acara</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.artikel') }}">
          <i class="mdi mdi-pin menu-icon"></i>
          <span class="menu-title">Data Artikel</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.acara') }}">
          <i class="mdi mdi-clipboard-arrow-down menu-icon"></i>
          <span class="menu-title">Sewa Fasilitas</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-apps menu-icon"></i>
          <span class="menu-title">Fasilitas</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.fasilitas') }}">Data Fasilitas</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="mdi mdi-calendar menu-icon"></i>
          <span class="menu-title">Acara</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.acara') }}">Data Acara</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
          <i class="mdi mdi-pin menu-icon"></i>
          <span class="menu-title">Artikel</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-advanced">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.artikel') }}">Data Artikel</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="mdi mdi-clipboard-arrow-down menu-icon"></i>
          <span class="menu-title">Sewa Fasilitas</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.acara') }}">Data Peminjaman</a></li>
          </ul>
        </div>
      </li> --}}
    </ul>
  </nav>