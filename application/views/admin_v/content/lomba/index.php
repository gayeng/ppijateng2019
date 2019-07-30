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
              <h3 class="box-title">All Lomba</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="tbl-area">
              <table id="eventTable" class="table table-bordered table-hovered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Lomba</th>
                  <th>Contact Person</th>
                  <th>Jenis Lomba</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach($lomba as $lomba){ ?>
                <tr>
                  <td><?php echo $lomba->id_lomba ?></td>
                  <td><?php echo $lomba->nama ?></td>
                  <td><?php echo $lomba->cp_lomba ?></td>
                  <td><?php echo $lomba->jenis_lomba ?></td>
                  <td>
					  <div class="btn-group-horizontal">
						  <button class="btn btn-flat bg-olive" value="<?php echo $lomba->id_lomba ?>"  onclick="btnEditLomba(this.value)"><i class="fa fa-pencil"></i></button>
						  <button class="btn btn-flat bg-maroon"><i class="fa fa-trash-o"></i></button>
					  </div>
					  
					</td>
                </tr>
              	<?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Nama Lomba</th>
                  <th>Contact Person</th>
                  <th>Jenis Lomba</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            
            <!-- /.box-body -->
				
          </div>
                
              
            </div>
	</section>
</div>