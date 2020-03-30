@extends('layout')
@section('title', 'Insertar autor')


@section('content')
    

<form action="{{url('/autores')}}" method="post">

@csrf

<div class="form-group">
	<label for="">Nombre del Autor</label>
	<input type="text" class="form-control" name="nombre_autor" id="" value="">
</div>

<div class="form-group">
	<label for="">Apellido del Autor</label>
	<input type="text" class="form-control" name="apellido_autor" id="" value="">
</div>

<div class="form-group">
	<label for="">Pais del Autor</label>
	<input type="text" class="form-control" name="pais_autor" id="" value="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>

</form>

@endsection

