<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>


<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a class="row mx-3" href="{{ route('admin.dashboard') }}"> 
          <span class="my-3 mr-2"><img alt="image" src="{{ asset('assets/img/logo01.png') }}" class="header-logo" /></span> 
          <span class="logo-name">BVision</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        @can('users_manage')
          <li class="menu-header">@lang('Main')</li>
          <li class="dropdown @if(Str::startsWith($route, 'admin.dashboard'))active @endif">
            <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>@lang('Dashboard')</span></a>
          </li>
        @endcan
                    
        <li class="menu-header">@lang('Users and access')</li>

        @can('users_manage')
          {{-- <li class="dropdown @if(Str::startsWith($route, 'admin.users'))active @endif">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="users"></i><span>@lang('Users Management')</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('admin.users.index') }}">@lang('List')</a></li>
              <li><a href="{{ route('admin.users.create') }}">@lang('Add')</a></li>
            </ul>
          </li>

          <li class="dropdown @if(Str::startsWith($route, 'admin.permissions'))active @endif">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="folder"></i><span>@lang('Permissions Management')</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('admin.permissions.index') }}">@lang('List')</a></li>
              <li><a href="{{ route('admin.permissions.create') }}">@lang('Add')</a></li>
            </ul>
          </li>

          <li class="dropdown @if(Str::startsWith($route, 'admin.roles'))active @endif">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="list"></i><span>@lang('Roles Management')</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('admin.roles.index') }}">@lang('List')</a></li>
                <li><a href="{{ route('admin.roles.create') }}">@lang('Add')</a></li>
              </ul>
          </li> --}}
          <li class="dropdown @if(Str::startsWith($route, 'admin.users') || Str::startsWith($route, 'admin.permissions') || Str::startsWith($route, 'admin.roles'))active @endif">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>@lang('Users Management')</span></a>
            <ul class="dropdown-menu">
              <!-- Users Management -->
              <li class="dropdown @if(Str::startsWith($route, 'admin.users'))active @endif">
                <a href="{{ route('admin.users.index') }}" class="nav-link"><i data-feather="user-plus"></i><span>@lang('Users')</span></a>
              </li>

              {{-- Permissions Management --}}
              <li class="dropdown @if(Str::startsWith($route, 'admin.permissions'))active @endif">
                <a href="{{ route('admin.permissions.index') }}" class="nav-link"><i data-feather="folder"></i><span>@lang('Permissions')</span></a>
              </li>
              
              {{-- Roles Management --}}
              <li class="dropdown @if(Str::startsWith($route, 'admin.roles'))active @endif">
                <a href="{{ route('admin.roles.index') }}" class="nav-link"><i data-feather="list"></i><span>@lang('Roles')</span></a>
              </li>
            </ul>
          </li>
        @endcan

      </ul>
    </aside>
</div> 