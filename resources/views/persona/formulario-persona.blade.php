@if ($ruta == 'Persona.update')
    <form action="{{ route($ruta, $id) }}" method="POST">
    @else
        <form action="{{ route($ruta) }}" method="POST">
@endif
<fieldset>
    @csrf
    @method($metodo)
    <!-- Campos del formulario -->
    <div class="mb3">
        <input class="form-control" type="text" name="nombres" placeholder="Nombre"
            value="{{ old('nombres', isset($persona) ? $persona->nombres : '') }}">
    </div>
    <div class="mb3">
        <input class="form-control" type="text" name="apellidos" placeholder="Apellido"
            value="{{ old('apellidos', isset($persona) ? $persona->apellidos : '') }}">
    </div>
    <div class="mb3">
        <input class="form-control" type="text" name="apodo" placeholder="Apodo"
            value="{{ old('apodos', isset($persona) ? $persona->apodo : '') }}">
    </div>
    <div class="mb3">
        <input class="form-control" type="number" name="edad" placeholder="Edad"
            value="{{ old('edad', isset($persona) ? $persona->edad : '') }}">
    </div>
    <div class="mb3">
        <input class="form-control" type="number" name="telefono" placeholder="Telefono"
            value="{{ old('telefono', isset($persona) ? $persona->telefono : '') }}">
    </div>
    <div class="mb3">
        <button class="btn btn-success" type="submit">{{$nombreBoton}}</button>
    </div>
</fieldset>
</form>
