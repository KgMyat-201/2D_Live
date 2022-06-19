 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary sidebar-dark  elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light ">2D</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info ml-2">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('adminDashboard')}}" class="nav-link {{ Request::is('adminDashboard') ? ' active' : null }}">
              <i class="nav-icon fa fa-th-large"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
             
             <li class="nav-item">
                <a href="{{route('adminDashboard')}}" class="nav-link {{ Request::is('adminDashboard') ? ' active' : null }}">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
             {{-- <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Permissons</p>
                </a>
              </li> --}}
            </ul>
           
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('users.index')}}" class="nav-link {{ Request::is('users.index') ? ' active' : null }}">
              <i class="nav-icon fa fa-th-large"></i>
              <p>
                Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link  {{ Request::is('admin/users') ? ' active' : null }}">
                  <i class="far fa-user nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li> --}}
              {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permissions</p>
                </a>
              </li> --}}
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>