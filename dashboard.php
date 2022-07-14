<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>TCM </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="http://119.2.50.170:9093/tb/assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://119.2.50.170:9093/tb/assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="http://119.2.50.170:9093/tb/assets/css/skins/skin-blue.min.css">
    <!-- jQuery 2.2.3 -->
    <script src="http://119.2.50.170:9093/tb/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="http://119.2.50.170:9093/tb/assets/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://119.2.50.170:9093/tb/assets/js/app.min.js"></script>
    <script src="http://119.2.50.170:9093/tb/assets/js/bootstrap-notify.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
     <script type="text/javascript">
    $(document).ready(function() {
              function notify(message,type) {
        $.notify({
                icon: "pe-7s-gift",
                message: message
                
            },{
                type: type,
                timer: 5000,
                placement: {
                    from: 'top',
                    align: 'right'
                }
            });
        }
    })
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TCM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TCM</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-brand">
        PEMERIKSAAN TCM - DKK SEMARANG
      </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://119.2.50.170:9093/tb/assets/img/avatar6.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">ADMIN</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://119.2.50.170:9093/tb/assets/img/avatar6.jpg" class="img-circle" alt="User Image">
                <p>
                  ADMIN                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header> <!-- Left side column. contains the sidebar -->
 <aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
         <!-- Sidebar user panel -->
         <div class="user-panel">
             <div class="pull-left image">
                 <img src="http://119.2.50.170:9093/tb/assets/img/avatar6.jpg" class="img-circle" alt="User Image">
             </div>
             <div class="pull-left info">
                 <p>ADMIN</p>
                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
             </div>
         </div>
         <!-- search form -->
       <form action="#" method="get" class="sidebar-form">
             <div class="input-group">
                 <input type="text" name="q" class="form-control" placeholder="Search...">
                 <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                             class="fa fa-search"></i>
                     </button>
                 </span>
             </div>
         </form>
         <!-- /.search form -->
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu">
             <li class="header">DKK</li>
             <li class="treeview">
                 <a href="dashboard.php">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                 </a>
             </li>
             
             <li class="treeview">
                 <a href="#">
                     <i class="fa fa-check-square-o"></i>
                     <span>TCM</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="input-sample.php"><i class="fa fa-circle-o"></i> Input Sample TCM </a>
                     </li>
                     <li><a href="sisa-sample.php"><i class="fa fa-circle-o"></i> Sisa Sample TCM</a>
                     </li>
               </ul>
             </li>
       </ul>
     </section>
     <!-- /.sidebar -->
 </aside><div class="content-wrapper">
  <section class="content-header">
    
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="active">Dashboard</a></li>
    </ol>
  </section>
<!-- /.content -->
</div><!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> beta-1.0.0
    </div>
    <strong>Copyright &copy; 2017-2019 <a href="http://dinkes.semarangkota.go.id">Dinkes Kota Semarang </a>.</strong> All rights
    reserved.
</footer>