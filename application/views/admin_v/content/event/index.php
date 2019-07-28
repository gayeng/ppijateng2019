<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class=""><?php echo $title; ?></li>
        <li class="active">All</li>
      </ol>
    </section>
	<!-- / breadcrumb -->

    <!-- Main content -->
    <section class="content">
              <div class="box box-success">
            <div class="box-header">
              <h4>All Event</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="eventTable" class="table table-bordered table-hovered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Event</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach($event as $event){ ?>
                <tr>
                  <td><?php echo $event->id_event ?></td>
                  <td><?php echo $event->nama_event ?></td>
                  <td>
					  <div class="btn-group-horizontal">
						  <button class="btn btn-flat bg-olive"><i class="fa fa-pencil"></i></button>
						  <button class="btn btn-flat bg-red"><i class="fa fa-trash-o"></i></button>
					  </div>
					  
					</td>
                </tr>
              	<?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Nama Event</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            
            <!-- /.box-body -->
				<div class="box-footer clearfix">
				updated on 2190
            </div>
          </div>
                
              
            </div>
            
				
         
	  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->