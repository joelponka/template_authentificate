<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li>
          <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
              collapse-btn"> <i data-feather="align-justify"></i>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link nav-link-lg fullscreen-btn">
            <i data-feather="maximize"></i>
          </a>
        </li>
        <li>
          <form class="form-inline mr-auto">
            <div class="search-element">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
              <button class="btn" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav navbar-right pt-4">

        <li class="dropdown">
            <a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('assets/img/langue.png')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right pullDown">
                  <div class="dropdown-item has-icon">
                    <a rel="alternate" href="{{route('langue',['locale' => 'en'])}}">@lang('English')</a> <br>
                    <a rel="alternate" href="{{route('langue',['locale' => 'fr'])}}">@lang('Français')</a>
                  </div>
                
            </div>
        </li>

        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
            class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
          </a>
          <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
            <div class="dropdown-header">
              Notifications
              <div class="float-right">
                <a href="#">Mark All As Read</a>
              </div>
            </div>
            <div class="dropdown-list-content dropdown-list-icons">
              <a href="#" class="dropdown-item dropdown-item-unread"> 
                @include('includes.notifications')
              </a>
            </div>
            <div class="dropdown-footer text-center">
              <a href="#">@lang('View All') <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </li>

        <li class="py-2">
            <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">@lang('Hi'),</span>
            <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ Auth::user()->name }}</span>
        </li>
        
        <li class="dropdown">
            <a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{ auth()->user()->avatar ) }}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span>
                {{-- {{ asset('users/images/'.auth()->user()->avatar }} --}}
            </a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">{{ Auth::user()->name }}</div>
                <a href="{{ route('admin.profil') }}" class="dropdown-item has-icon"> 
                    <i class="far fa-user"></i> @lang('Profile')
                </a> 
                {{-- <a href="#" class="dropdown-item has-icon"> 
                    <i class="fas fa-bolt"></i> @lang('Activities')
                </a>  --}}
                <a href="/" class="dropdown-item has-icon"> 
                    <i class="fas fa-cog"></i> @lang('Home')
                </a>
                <div class="dropdown-divider"></div>
                <!-- Authentication -->
                <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i> @lang('Log Out')
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
  </nav>