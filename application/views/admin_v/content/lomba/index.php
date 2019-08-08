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
				<div class="box box-success">
					<div class="box-header">
					</div>
					<form action="" method="post" id="formTambahLomba">
						<div class="box-body">
							<div class="form-group">
								<input type="text" class="form-control" name="nama_lomba" placeholder="Nama Lomba :" autocomplete="off" autofocus value="">
							</div>
							<div class="form-group">
								<select name="jenis_lomba" class="form-control">
									<option selected disabled>..::: Pilih Jenis :::..</option>
									<?php foreach($jenis_lomba as $jenis_lomba){ ?>
									<option value="<?php echo $jenis_lomba->id_jenislomba ?>"><?php echo $jenis_lomba->nama ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="cp_lomba" placeholder="Contact person :" autocomplete="off" value="">
							</div>
							<div class="form-group">
								<div class="file-upload">
									<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Tambah Poster</button>
									<div class="image-upload-wrap">
										<input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="poster"/>
										<div class="drag-text">
											<h3>Drag and drop a file</h3>
										</div>
									</div>
									<div class="file-upload-content">
										<img class="file-upload-image" src="#" alt="your image" />
										<div class="image-title-wrap">
											<button type="button" onclick="removeUpload()" class="remove-image">Hapus <span class="image-title">Uploaded Image</span></button>
										</div>
									</div>
								</div>
                </div>
				
							<div>
								<textarea class="textarea" name="desc_lomba" placeholder="Deskripsi acara" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; padding: 10px; resize: vertical;"></textarea>
							</div>
							
						</div>
					</form>
					<div class="box-footer clearfix">
						<div class="pull-left">
							<p><span class="text-red">Mohon diisi dengan semestinya. Contoh: Nama Lomba "Lomba Musik Lokal"</span></p>
							<p><span class="text-red">Jika tidak memiliki contact person, bisa diisi dengan - (tanda strip)</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-flat bg-red pull-left" data-dismiss="modal">Batal <i class="fa fa-times"></i></button>
                <button type="button" class="btn btn-default bg-green btn-flat" id="saveLombaBtn">Simpan <i class="fa fa-check-circle"></i></button>
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

<!-- java script area -->
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>template/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script>$('.textarea').wysihtml5();</script>