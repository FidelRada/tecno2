<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Apodo</th>
            <th scope="col">Edad</th>
            <th scope="col">Telefono</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($personas as $per)
            <tr>
                <th scope="row">{{ $per->id }}</th>
                <td>{{ $per->nombres }}</td>
                <td>{{ $per->apellidos }}</td>
                <td>{{ $per->apodo }} </td>
                <td>{{ $per->edad }} </td>
                <td>{{ $per->telefono }}</td>
                <td>
                    <a class="btn btn-primary"
                        href="{{ route('Persona.editar', $per->id) }}">editar</a>
                    <form action="{{ route('Persona.eliminar', $per->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                <td>
            </tr>
        @endforeach
    </tbody>
</table>