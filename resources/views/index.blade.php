@extends('layouts.main')
	@section('content')

		<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-info">
				<h1>BIG HERO 6</h1>
				<form>
					<div class="form-group">
						<label>Usuario</label>
						<input type="email" class="form-control" placeholder="ingrese usuario">
					</div>
					<dv class="form-group">
						<label>Contraseña</label>
						<input type="password" class="form-control" placeholder="Ingrese contraseña">
					</dv>
				<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
		<div class="review-slider">

		</div>
	@endsection