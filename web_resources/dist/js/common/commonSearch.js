

	$('document').ready(function(){

		$("#txtSearch").on("keyup", function() {
			var value = $(this).val().toLowerCase();
				$("#dataTabel tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});

	}); // End Ready (Create # Pradip 25-12-2018)
	
