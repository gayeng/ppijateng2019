<!-- Main content -->
<div class="box box-success">
	<div class="box-header">
	</div>
	<form action="" method="post" class="form-edit">
		<div class="box-body">
			<?php foreach($event as $event){ ?>
			<div class="form-group">
				<input type="text" class="form-control" name="nama_event" placeholder="Nama acara :" autocomplete="off" autofocus value="<?php echo $event->nama_event ?>">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="cp_event" placeholder="Contact person :" autocomplete="off" value="<?php echo $event->cp_event ?>">
			</div>
			<div>
				<textarea class="textarea" name="desc_event" placeholder="Deskripsi acara" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; padding: 10px; resize: vertical;"><?php echo $event->desc_event ?></textarea>
			</div>
			<?php } ?>
		</div>
	</form>
</div>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>template/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script>$('.textarea').wysihtml5();</script>