

  $(function () {
    $('#eventTable').DataTable({
		order: [[0, 'desc']],
		 responsive: true,
		columns: [
		{ orderable: true, width: "5%" },
		{ orderable: true },
		{ orderable: false, width:"10%"  }
		]
		});
		
		
	
		
	});
	
	 $(function () {
	
	$('#lombaTable').DataTable({
		order: [[0, 'desc']],
		 responsive: true,
		columns: [
		{ orderable: true, width: "5%" },
		{ orderable: true },
		{ orderable: true },
		{ orderable: true },
		{ orderable: false, width:"10%"  }
		]
		});
		
		});