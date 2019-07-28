<head>
	<title>Admin | <?php echo $title ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>template/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/bower_components/font-awesome/css/font-awesome.min.css">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/bower_components/Ionicons/css/ionicons.min.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/dist/css/AdminLTE.min.css">
	  <!-- AdminLTE Skins. Choose a skin from the css/skins
		   folder instead of downloading all of them to reduce the load. -->
	  <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/dist/css/skins/_all-skins.min.css">
	  <!-- Morris chart -->
	  <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/bower_components/morris.js/morris.css">
	  <!-- jvectormap -->
	  <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/bower_components/jvectormap/jquery-jvectormap.css">
	  <!-- Date Picker -->
	  <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	  <!-- Daterange picker -->
	  <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	  <!-- bootstrap wysihtml5 - text editor -->
	  <link rel="stylesheet" href="<?php echo base_url() ?>template/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() ?>template/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->

	  <!-- Google Font -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">PPI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> PPI Jateng</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>template/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo ucwords($this->session->userdata('username')); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>template/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo ucwords($this->session->userdata('username')); ?>
                  <small>Sejak 2019</small>
                </p>
              </li>
           
              <!-- Menu Footer-->
              <li class="user-footer">
				  <div class="row">
					  <div class="col-md-6">
						  <a href="#" class="btn btn-default btn-block btn-flat"><span class="" style="color:green;"><i class="fa fa-pencil-square-o"></i> Edit</span></a>
					  </div>
					  <div class="col-md-6">
						  <a href="<?php echo base_url() ?>logout" class="btn btn-default btn-block btn-flat "><span class="" style="color:green;"><i class="fa fa-sign-out"></i> Keluar</span></a>
					  </div>
				  </div>
				 
				  
					  
				
				
                
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

<?php if ($this->session->flashdata('msg_success')) { ?>
<div class="alert alert-success alert-dismissible" style="position:fixed; bottom:0; left:30px; z-index:9999; width:400px;">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Sukses!</h4> <?= $this->session->flashdata('msg_success') ?>
</div>
<?php } ?>
	
<?php if ($this->session->flashdata('msg_error')) { ?>
<div class="alert alert-danger alert-dismissible" style="position:fixed; bottom:0; left:30px; z-index:9999; width:400px;">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-ban"></i> Kesalahan!</h4> <?= $this->session->flashdata('msg_error') ?>
	</div>
<?php } ?>