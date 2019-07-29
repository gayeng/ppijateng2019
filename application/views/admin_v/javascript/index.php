<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>template/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>template/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>template/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>template/admin/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>template/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>template/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>template/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>template/admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>template/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>template/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>template/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>template/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>template/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>template/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>template/admin/dist/js/demo.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url() ?>template/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- Initialize table event -->
<script src="<?php echo base_url() ?>template/admin/dist/js/loadTable.js"></script>

<script>

window.setTimeout(function() {
    $(".alert").fadeTo(2000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 1800);
</script>


<script>
	
    
function btnEdit(value)
{
    $('#modalEdit').modal('show');
    var addr_p ="<?php echo base_url('admin/editEvent/') ?>"+value;
    
    $.ajax({
        type: "GET",
        url: addr_p,
        dataType: "html",
        success: function(response)
        {
            $("#editContainer").html(response);
        }
    });
}

//simpan edit
$(".tbl-simpanedit").click(function(){
			var data = $('.form-edit').serialize();
            var alamatjs = "<?php echo base_url('template/admin/dist/js/loadTable.js') ?>";
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url('admin/updateEvent') ?>",
				data: data,
				success: function() {
				//$('#loader').modal({backdrop: 'static', keyboard: false});  
            	$('.form-edit').trigger("reset");
					$('#modalEdit').modal('hide');
					$('#eventTable').DataTable().destroy();
					$("#tbl-area").load(" #tbl-area",function()
										{
											$.ajax({
												url: alamatjs,
												dataType: 'script'
											});
										});
					
					alert('Berhasil');
					//$('#loader').modal('hide');
				}
			});
		});
</script>