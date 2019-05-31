@extends('layouts.admin')

@section('content')

	<form action="/usuario" method="POST">
		@csrf
		<div class="form-group">
			<label>Nombre</label>
			<input name="name" type="text" class="form-control" placeholder="Ingrese el nombre de usuario"></input>
		</div>
		<div class="form-group">
			<label>Correo</label>
			<input name="email" type="text" class="form-control" placeholder="Ingrese el correo del usuario"></input>
		</div>
		<div class="form-group">
			<label>Contraseña</label>
			<input name="password" type="password" class="form-control" placeholder="Ingrese la contraseña del usuario"></input>
		</div>
		<button class="btn btn-primary">Registrar</button>
	</form>

@endsection