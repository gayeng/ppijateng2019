

  $(function () {
    $('#eventTable').DataTable({
		order: [[0, 'desc']],
		columns: [
		{ orderable: true, width: "5%" },
		{ orderable: true },
		{ orderable: false, width:"10%"  }
		]
		
		});
	});
