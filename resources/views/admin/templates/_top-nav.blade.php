<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center">
      <a class="navbar-brand brand-logo" href="../../index.html"><img src="{{ asset('assets/images/logo gor 2.png') }}" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="{{ asset('assets/images/logo gor 2.png') }}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      
      <ul class="navbar-nav navbar-nav-right">
        
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="{{ asset('assets/images/user.png') }}" alt="profile"/>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">
              <i class="mdi mdi-settings "></i>
              Settings
            </a>
            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              <i class="mdi mdi-logout"></i>
              Logout
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;">
              @csrf
            </form> 
          </div>
        </li>
        
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
