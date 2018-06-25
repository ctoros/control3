@extends('layouts.app')

@section('title','Profiles')

@section('content')

    <form class="form-group" method="POST" action="/home">
      @csrf
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" disabled="" value="{{$user->email}}" class="form-control">
        <label>Password</label>
        <input type="text" disabled="" name="password" value="{{$user->password}}" class="form-control">
        <label>Fecha-Nacimiento</label>
        <input type="date" name="fechaNacimiento"disabled="" value="{{$detail->fecha_nacimiento}}" class="form-control">
        <label>Genero</label>
        <input type="text" name="genero" disabled="" value="{{$detail->genero}}" class="form-control">
        <label>Situacion-Sentimental</label>
        <input type="text" name="situacionSentimental" disabled="" value="{{$detail->situacion_sentimental}}" class="form-control">

      </div>
      <a href="/index/{{$detail->id}}/edit" class="btn btn-primary">Editar</a>
    </form>


@endsection

