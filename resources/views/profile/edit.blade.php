@extends('layouts.app')

@section('title','Create Profile')

@section('content')
	
		<form class="form-group" method="POST" action="/home/{{$detail->id}}">
			@method('PUT')
			@csrf
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" value="{{$user->email}}" class="form-control">
				<label>Password</label>
				<input type="text" name="password" value="{{$user->password}}" class="form-control">
				<label>Fecha-Nacimiento</label>
				<input type="date" name="fecha_nacimiento"value="{{$detail->fecha_nacimiento}}" class="form-control">
				<label>Genero</label>
				<input type="text" name="genero"value="{{$detail->genero}}" class="form-control">
				<label>Situacion-Sentimental</label>
				<input type="text" name="situacion_sentimental"value="{{$detail->situacion_sentimental}}" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection

