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
				<i class="fa fa-eye"></i>
              <h3 class="box-title">All Event</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="tbl-area">
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
						  <button class="btn btn-flat bg-olive" value="<?php echo $event->id_event ?>"  onclick="btnEdit(this.value)"><i class="fa fa-pencil"></i></button>
						  <button class="btn btn-flat bg-maroon"><i class="fa fa-trash-o"></i></button>
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
<div class="modal fade" id="modalEdit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                
                <h4 class="modal-title">Edit event</h4>
              </div>
              <div class="modal-body">
				  <div id="editContainer">
					  
				  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default tbl-simpanedit"><span class="text-green ">Simpan
                <i class="fa fa-check-circle"></i></span></button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
