
<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" href="{{ asset('folder/itdev.ico') }}"" type="image/icon">
    <meta charset="UTF-8">
    <title>IT'sMe | IT System Managements</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('folder/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('folder/plugins/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('folder/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="{{ asset('folder/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('folder/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('folder/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery 2.1.3 -->
    <script src="{{ asset('folder/plugins/jQuery/jQuery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('folder/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{ asset('folder/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>    
    <!-- FastClick -->
    <script src="{{ asset('folder/plugins/fastclick/fastclick.min.js') }} "></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('folder/dist/js/app.min.js') }}" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="{{ asset('folder/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('folder/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>

   

  <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    
  </head>
  <body class="skin-blue fixed">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">IT'sMe</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
         

          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              

               <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('folder/admin.jpg') }}" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"></span>
                </a>

                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset('folder/admin.jpg') }}" class="img-circle" alt="User Image" />
                    <p>
                      
                     {{Session::get('name')}}
                 
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                   
                    </div>
              
                   
                    <div class="pull-right">
                     <a href="/logout" class="btn btn-default btn-flat"> Sign out</a>

                   
                    </div>
                 
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('folder/admin.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p></p>
              
              {{Session::get('name')}}

            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            
            <li class="treeview">
              <a href="#">
                <span>Master Data</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="{{url ('/Transisi/Companies')}}"><i class="fa fa-file-text-o"></i>Companies</a></li>
              </ul>
			  <ul class="treeview-menu">
				<li class=""><a href="{{url ('/Transisi/Employees')}}"><i class="fa fa-file-text-o"></i>Employees</a>
            </li>
            </ul> 
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Selamat Datang
            <small class=""></small>
          </h1>
        </section>
        
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
