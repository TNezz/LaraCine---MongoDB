@extends('layouts.admin')

@section('content')

<form class="form-group">
	<div class="alert alert-success alert-dismissible" id="msj-success" role="alert" style="display:none">Pelicula creado exitosamente</div>

	@include('movie.form.movie')
	<a class="btn btn-primary" href="#" id="registro">Registrar</a>
</form>

@endsection

@section('scripts')
	    {!!Html::script('js/script.js')!!}
@endsection