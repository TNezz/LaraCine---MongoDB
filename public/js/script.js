$("#registro").click(function(){
	var datoName = $("#movie").val();
	var datoYear = $("#year").val();
	var datoDir = $("#direction").val();
	var route = "http://127.0.0.1:8000/movie";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{'movie': datoName, 'year': datoYear, 'direction': datoDir},

		success:function(){
			$("#msj-success").fadeIn();
		}
	});
});