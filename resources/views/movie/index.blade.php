@extends('layouts.admin')
@section('content')
@include('movie.modal')
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  		<strong> Pelicula actualizada correctamente.</strong>
	</div>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Año</th>
			<th>Dirección</th>
		</thead>
		<tbody id="datos"></tbody>
	</table>

@endsection

@section('scripts')
	    {!!Html::script('js/script2.js')!!}
@endsection