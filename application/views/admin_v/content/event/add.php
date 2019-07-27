<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Tambah Event</li>
      </ol>
    </section>
	<!-- / breadcrumb -->

    <!-- Main content -->
    <section class="content">
		<div class="box box-success">
            <div class="box-header">
              <i class="fa fa-plus"></i>

              <h3 class="box-title">Tambah</h3>
              
            </div>
			<form action="<?php echo base_url('admin/addEvent') ?>" method="post">
            <div class="box-body">
              
                <div class="form-group">
                  <input type="text" class="form-control" name="nama_event" placeholder="Nama acara :">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="cp_event" placeholder="Contact person :">
                </div>
                <div>
                  <textarea class="textarea" name="desc_event" placeholder="Deskripsi acara" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              
            </div>
            <div class="box-footer clearfix">
				<div class="pull-left">
					<p><span class="text-red">Mohon diisi dengan semestinya</span></p>
					<p><span class="text-red">Jika tidak memiliki contact person, bisa diisi dengan - (tanda strip)</span></p>
				</div>
              <button type="submit" class="pull-right btn btn-default">Simpan
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
				</form>
          </div>
	  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->