$(document).ready(function(){
	Carga();
});

function Carga(){
		var tablaDatos = $("#datos");
	var route = "/movies";
	var peli = "";
	var año = "";
	var dir = "";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			if (!value.movie) {
				peli=" ";
			} else {
				peli = value.movie;
			}

			if (!value.year) {
				año=" ";
			} else {
				año = value.year;
			}

			if (!value.direction) {
				dir=" ";
			} else {
				dir = value.direction;
			}
			tablaDatos.append("<tr><td>"+peli+"</td><td>"+año+"</td><td>"+dir+"</td><td><button class='btn btn-primary' value="+value._id+" OnClick='Mostrar(this)' data-toggle='modal' data-target='#myModal'>Editar</button></td><td><button class='btn btn-danger' value="+value._id+" OnClick='Eliminar(this)'>Eliminar</button></td></tr>");
		});
	});
}

function Eliminar(btn){
	var route = "/movie/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-success").fadeIn();
			$("#msj-success").delay(5000).fadeOut();
		}

	})
}

function Mostrar (btn){
	var route = "/movie/"+btn.value+"/edit";
	$.get(route, function(res){
		$("#movie").val(res.movie);
		$("#year").val(res.year);
		$("#direction").val(res.direction);
		$("#id").val(res._id);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var datoMovie = $("#movie").val();
	var datoAño = $("#year").val();
	var datoDir = $("#direction").val();
	var route = "/movie/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data:{movie:datoMovie, year:datoAño, direction:datoDir},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
			$("#msj-success").delay(5000).fadeOut();
		}

	})
})
