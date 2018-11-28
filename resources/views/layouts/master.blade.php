<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper" id="app">
    <!-- Main Header -->
    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>@yield('dashboard')</b>LTE</span>
      </a>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name ?? "Unknown User"}} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>            
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('images/avatar5.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name ?? "Unknown User"}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        @if (!Request::is('admin/*'))
          @if (!Request::is('category'))
            <li class="active"><a href="{{ url('category') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
          @endif
        @endif
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="">
            <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i>add users</a></li>
            <li class="active"><a href="{{ route('list') }}"><i class="fa fa-circle-o"></i>view users</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="js/validation.js"></script>
@if (count($errors) > 0)
<script>
  $(document).ready(function(){
    //show the modal when validation fail
    $('#edit').modal({show: true});
    //keeping old value of select field even after refresh
    const preferredContactOldValue = '{{ old('preferred_mode_of_contact') }}';
    if(preferredContactOldValue !== '') {
      $('#premodcon').val(preferredContactOldValue);
    }
    //keeping old value of radio button even after refresh
    const genderOldValue = '{{old('gender')}}';
    if (genderOldValue != "") {
      if (genderOldValue == 'male') {
        $( "#genmale" ).prop( "checked", true );
      }else{
        $( "#genfemale" ).prop( "checked", true );
      }
    }
  });
</script>
@endif
<script>
  $('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var name = button.data('myname')
    var contact = button.data('mycontact')
    var email = button.data('myemail')
    var precon = button.data('myprecon')
    var gender = button.data('mygender')
    var cat_id = button.data('catid')
    var modal = $(this)
    modal.find('.modal-body #name').val(name)
    modal.find('.modal-body #contact').val(contact)
    modal.find('.modal-body #email').val(email)
    modal.find('.modal-body #premodcon').val(precon)
    if (gender == 'male') {
    modal.find('.modal-body #genmale').prop( "checked", true ); //in jquery use .prop() method to check and uncheck
  }else{
    modal.find('.modal-body #genfemale').prop( "checked", true );
  }
  modal.find('.modal-body #cat_id').val(cat_id)
});

  $('#delete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var cat_id = button.data('catid')
    var modal = $(this)
    modal.find('.modal-body #cat_id').val(cat_id)
  });
</script>
</body>
</html>