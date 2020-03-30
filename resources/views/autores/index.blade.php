 <table class="">
    <thead class="">
        <tr>
            <th>#</th>
            <th>Nombre(s)</th>
            <th>Apellido(s)</th>
            <th>País</th> 
            <th>Acciones</th>        
        </tr>
    <thead>
        
    <tbody>
        @foreach($autores as $autor)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$autor->nombre_autor}}</td>
                <td>{{$autor->apellido_autor}}</td>
                <td>{{$autor->pais_autor}}</td>
                <td>
                    <a href=" {{ url("/autores/{$autor->id}/edit") }} "> Editar </a>
                 |                     
                    <form method="post" action="{{ url("/autores/{$autor->id}") }}">
                        <button type="submit" onclick="return confirm('¿Borrar?');"> Borrar </button>
                            @csrf               
                            @method('DELETE')
                    </form>                                  
                </td>
            </tr> 
        @endforeach
        
        
    </tbody>
</table> 
