  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("bower_components/AdminLTE/dist/img/logo.png") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Employeer's Dashboard</span></a></li>
        <!--li><a href="{{ url('employee-management') }}"><i class="fa fa-fighter-jet"></i> <span>Officers Management</span></a></li-->
        
         
        
        <li class="treeview">
          <a href="{{ url('civilian-management') }}"><i class="fa fa-suitcase"></i> <span>Employeers Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('civilian-management') }}"><i class="fa fa-user"></i>Update Records</a></li>
            <li><a href="{{ url('system-management/allowance') }}"><i class="fa fa-graduation-cap"></i>Vacancy</a></li>
           
           
          </ul>
        </li>
        <li><a href="{{ route('mail-management.index')}}"><i class="fa fa-envelope"></i> <span>Mails</span></a></li>
        <li><a href="{{ route('user-management.index') }}"><i class="fa fa-cogs"></i> <span>Update Login Details</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>