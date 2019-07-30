

  $(function () {
    $('#eventTable').DataTable({
		order: [[0, 'desc']],
		columns: [
		{ orderable: true, width: "5%" },
		{ orderable: true },
		{ orderable: false, width:"10%"  }
		]
		});
		
		
	$('#lombaTable').DataTable({
		order: [[0, 'desc']],
		columns: [
		{ orderable: true, width: "5%" },
		{ orderable: true },
		{ orderable: true },
		{ orderable: true },
		{ orderable: false, width:"10%"  }
		]
		});
		
	});
	