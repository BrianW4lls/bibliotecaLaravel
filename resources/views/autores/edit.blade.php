<form action="{{ url("/autores/{$autor->id}") }}" method="post">

@csrf               
@method('PATCH')

<label for="">Nombre del Autor</label>
<input type="text" name="nombre_autor" id="" value="{{ $autor->nombre_autor }}">

<label for="">Apellido del Autor</label>
<input type="text" name="apellido_autor" id="" value="{{ $autor->apellido_autor }}">

<label for="">Pais del Autor</label>
<input type="text" name="pais_autor" id="" value="{{ $autor->pais_autor }}">


<input type="submit" value="Actualizar">
</form>
