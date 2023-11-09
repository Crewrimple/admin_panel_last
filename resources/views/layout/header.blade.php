  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
    <img src="{{ asset('assets/img/logo.png') }}" alt="">
    <span>@lang('header.Admin')</span> </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="" title="Поиск">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle" href="{{ route('home') }}">
                  <i class="bi bi-search"></i>
              </a>
          </li>
          <nav>
           
            <div class="language-switcher">
                <a href="{{ route('setLocale', ['locale' => 'en']) }}" class="language-switcher-link" id="en">EN</a>
                <a href="{{ route('setLocale', ['locale' => 'ru']) }}" class="language-switcher-link" id="ru">RU</a>
            </div>
            

            
        </nav>
          <li class="nav-item dropdown pe-3">
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <img src="{{ asset('assets/img/images.png') }}" alt="Profile" class="rounded-circle" width="40">
                  <span>@lang('header.Admin')</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                      <h6>Admin</h6>
                      <span>@lang('header.Web programmer')</span>
                      
                  </li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>
                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="{{ route('show.profile') }}">
                          <i class="bi bi-person"></i>
                          <span>@lang('header.My Profile')</span>
                          
                      </a>
                  </li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>
                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                          <i class="bi bi-box-arrow-right"></i>
                          <span>@lang('header.Sign Out')</span>
                          
                      </a>
                  </li>
              </ul>
          </li>
      </ul>
  </nav>
  

  </header>