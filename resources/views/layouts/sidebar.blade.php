  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("bower_components/AdminLTE/dist/img/bg_1.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
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
        <li class="active"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ url('chef-management') }}"><i class="fa fa-users"></i> <span>Chefs Management</span></a></li>



        </li>
            <li><a href="{{ url('system-management/menu') }}"><i class="fa fa-cutlery"></i>Menu</a></li>
            <li><a href="{{ url('system-management/customers') }}"><i class="fa fa-user"></i>Customers</a></li>
            <li><a href="{{ url('system-management/category') }}"><i class="fa fa-coffee"></i>Food Categories</a></li>
            <li><a href="{{ url('system-management/contact') }}"><i class="fa fa-mobile"></i>Contacts</a></li> <!--country-->
            <li><a href="{{ url('system-management/orders') }}"><i class="fa fa-shopping-cart"></i>Orders</a></li> <!--country-->
             <li><a href="{{ url('system-management/payment') }}"><i class="fa fa-cc-mastercard"></i>Payments</a></li> <!--country-->

        <li><a href="{{ route('user-management.index') }}"><i class="fa fa-user"></i> <span>User management</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
