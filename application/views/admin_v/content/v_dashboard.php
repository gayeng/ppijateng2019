<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
	<!-- / breadcrumb -->

    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header">
						<i class="fa fa-info-circle text-primary"></i>
						<h3 class="box-title">Informasi</h3>
              			
              			
					</div>
					<div class="box-body">
						<h2>Halo, <?php echo ucwords($this->session->userdata('username')); ?>!</h2>
						<p>Selamat datang di web admin</p>
						<p>Web Admin berfungsi sebagai mengubah konten yang ada pada guest situs utama atau pengunjung</p>
						<p>Silahkan gunakan menu yang ada sebelah kiri untuk melakukan perubahan konten yang dikehendaki</p>
					</div>
					
				</div>
			</div>
			
			
		</div>
	  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->