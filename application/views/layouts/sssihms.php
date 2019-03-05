<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.4
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
  <meta name="author" content="Lukasz Holeczek">
  <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
  <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

  <title><?php echo $template['title'];?></title><meta charset="UTF-8" />

  <!-- Icons -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css');?>" />
  <link rel="stylesheet" href="<?=base_url('assets/plugins/simple-line-icons/css/simple-line-icons.css');?>" />
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/datepicker/datepicker3.css');?>">


  <!-- Main styles for this application -->
  <link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet">

  <!-- Styles required by this views -->

</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->


<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">    
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
            <i class="icon-location-pin"></i>
            Admin
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="<?=base_url('assets/img/avatars/Admin.png');?>" class="img-avatar" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates</a>
          <a class="dropdown-item" href="<?=site_url('access/logout');?>"><i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url();?>">
                <i class="icon-speedometer"></i>
                Dashboard
            </a>
          </li>

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>


<!--    
    Because I'm Using Template Engine  
    We Must load JS files before content after CSS
-->
    <!-- Place your JS Here (Start Section)-->  
    <!-- Bootstrap and necessary plugins -->
    <script src="<?=base_url('assets/js/jquery-3.2.1.min.js');?>"></script> 
    <script src="<?=base_url('assets/plugins/popper.js/umd/popper.min.js');?>"></script>   
    <script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>  
    <script src="<?=base_url('assets/plugins/pace/pace.min.js');?>"></script>
    <script src="<?=base_url('assets/plugins/numeral/numeral.min.js');?>"></script>
    <!-- datepicker -->
    <script src="<?=base_url('assets/plugins/datepicker/bootstrap-datepicker.js');?>"></script>
    <!-- Plugins and scripts required by all views -->

    <!-- CoreUI main scripts -->
    <script src="<?=base_url('assets/js/app.js');?>"></script>
    <script src="<?=base_url('assets/js/my.js');?>"></script>
    <!-- Place your JS Here (End Section)-->  
    
    <!-- Main content -->
    <main class="main">
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <div class="container-fluid">
          <?php echo $template['body'];?>
      </div>
      <!-- /.conainer-fluid -->
    </main>
    
    <aside class="aside-menu">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
        </li>
      </ul>

    </aside>
  </div>

  <footer class="app-footer">
    <span>
        <a href="http://pudyastoadi.dev.php.or.id">PAW!</a> © 2017
    </span>
    <span class="ml-auto">
        Powered by <a href="http://coreui.io">CoreUI</a>
    </span>
  </footer>
    <script>
        $(document).ready(function() {
            $('.year').datepicker({
                startView: "year", 
                minViewMode: "years",
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: false,
                autoclose: true,
                format: "yyyy"      
            });
        });
    </script>
</body>
</html>
