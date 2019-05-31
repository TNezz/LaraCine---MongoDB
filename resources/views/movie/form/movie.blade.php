<form class="form-group">
		<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
		<label>Nombre</label>
		<input type="text" name="nombre" id="movie" class="form-control" placeholder="ingresa el nombre">
		<label>Año</label>
		<input type="year" name="year" id="year" class="form-control" placeholder="ingresa el año">
		<label>Director</label>
		<input type="text" name="direction" id="direction" class="form-control" placeholder="ingresa el director">

</form>