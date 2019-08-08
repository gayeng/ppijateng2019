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
        <li class="active">Add</li>
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
			
			<?php echo form_open_multipart('admin/addEvent');?>
            <div class="box-body">
              
                <div class="form-group">
                  <input type="text" class="form-control" name="nama_event" placeholder="Nama acara :" autocomplete="off" autofocus>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="cp_event" placeholder="Contact person :" autocomplete="off"	>
                </div>
				<div class="form-group">
								<select name="jenis_event" class="form-control">
									<option selected disabled>..::: Jenis Event :::..</option>
									<?php foreach($jenis_event as $jenis_event){ ?>
									<option value="<?php echo $jenis_event->id_jenisevent ?>"><?php echo ucwords($jenis_event->nama) ?></option>
									<?php } ?>
								</select>
							</div>
				
				<div class="form-group">
					<div class="file-upload">
						<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Tambah Poster</button>
						<div class="image-upload-wrap">
							<input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="img-poster"/>
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
                  <textarea class="textarea" name="desc_event" placeholder="Deskripsi acara" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; padding: 10px; resize: vertical;"></textarea>
                </div>
              
				
            </div>
            <div class="box-footer clearfix">
				<div class="pull-left">
					<p><span class="text-red">Mohon diisi dengan semestinya. Contoh: nama acara "Pameran Masakan Lokal"</span></p>
					<p><span class="text-red">Jika tidak memiliki contact person, bisa diisi dengan - (tanda strip)</span></p>
				</div>
              <button type="submit" class="pull-right btn btn-flat bg-green">Simpan
                <i class="fa fa-check-circle"></i></button>
            </div>
				</form>
          </div>
	  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->