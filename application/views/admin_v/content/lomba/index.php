<div class="content-wrapper">
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
	<section class="content">
		<div class="box box-success">
			<div class="box-header">
				<i class="fa fa-eye"></i>
				<h3 class="box-title">All Lomba</h3>
				<div class="pull-right box-tools">
					<button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="tooltip" title="Tambah" onclick="btnTambah()"><i class="fa fa-plus"></i></button>
					<button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="tooltip" title="Kosongkan! (Hati-hati)"><i class="fa fa-trash-o"></i></button>
				</div>
			</div>
            <!-- /.box-header -->
			<div class="box-body" id="tbl-area">
				<table id="lombaTable" class="display table table-bordered table-hovered table-striped responsive nowrap" style="width:100%">
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
			</div>
		</div>
	</section>
</div>


<!-- Modal Dialog -->

<div class="modal fade" id="modalTambah"> <!-- modal tambah -->
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah <?php echo $title; ?></h4>
			</div>
			<div class="modal-body">
				<div id="tambahContainer">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-flat bg-red pull-left" data-dismiss="modal">Batal <i class="fa fa-times"></i></button>
                <button type="button" class="btn btn-default tbl-simpanedit bg-green btn-flat">Simpan <i class="fa fa-check-circle"></i></button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modalEdit"> <!-- modal edit-->
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit <?php echo $title; ?></h4>
			</div>
			<div class="modal-body">
				<div id="editContainer">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-flat bg-red pull-left" data-dismiss="modal">Batal <i class="fa fa-times"></i></button>
                <button type="button" class="btn btn-default tbl-simpanedit bg-green btn-flat">Simpan <i class="fa fa-check-circle"></i></button>
			</div>
		</div>
	</div>
</div>