<h1>Listado de mascotas</h1>
<a href="{{url('/pet/create')}}">Crear</a>
<table>
    <tr>

        <thead>
            <tr><td>#</td>
            <td>Nombre</td>
            <td>Edad</td>
            <td></td></tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id}}</td>
                <td>{{ $pet->name}}</td>
                <td>{{ $pet->age}}</td>
                <td><a href="{{url('/pet/'.$pet->id.'/edit/')}}"> Edit</a></td>
                <td>
                    <form action="{{url('/pet/'.$pet->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Eliminar"
                        onclick="return confirm('¿Desea eliminar el registro?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </tr>
</table>