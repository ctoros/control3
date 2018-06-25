@extends('layouts.app')

@section('title','List Profiles')

@section('content')
	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Genero</th>
      <th scope="col">Editar</th>git 
      <th scope="col">Borrar2</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($details as $detail)
    <tr>
      <th scope="row">{{$detail->user_id}}</th>
      <td>{{$detail->genero}}</td>
      <td><a href="/index/{{$detail->id}}"> editar</a></td>
      <td><a href="/delete/{{ $detail->id }}">Delete</a></td>
    </tr>
    @endforeach	
  </tbody>
</table>




@endsection

