@extends('layouts.app')

@section('title','Create Profile')

@section('content')
	
		<form class="form-group" method="POST" action="/home">
			@csrf
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
				<label>Password</label>
				<input type="text" name="password" class="form-control">
				<label>Fecha-Nacimiento</label>
				<input type="date" name="fechaNacimiento" class="form-control">
				<label>Genero</label>
				<input type="text" name="genero" class="form-control">
				<label>Situacion-Sentimental</label>
				<input type="text" name="situacionSentimental" class="form-control">

			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>

@endsection

