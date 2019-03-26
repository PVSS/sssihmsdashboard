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


<body >    

  <div class="app-body">
    


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
        <li class="breadcrumb-item active">SSSIHMS Patients Stats Dashboard</li>
      </ol>
      <div class="container-fluid">
          <?php echo $template['body'];?>
      </div>
      <!-- /.conainer-fluid -->
    </main>
    
  </div>

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
