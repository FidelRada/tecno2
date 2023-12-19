@extends('layouts/base')

@section('titulo', 'Principal')

@section('contenido')

    @include('layouts/sidebar')
    <br>
    <center>
        <h1>Agenda de contactos</h1>
    </center>
    <br>


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                {{-- @include('persona.formulario-persona', [
                    'personas' => $personas,
                    'ruta' => 'Persona.store',
                    'metodo' => 'POST',
                    'nombreBoton' => 'Crear persona',
                ]) --}}
                @include('persona.plantilla', [])
            </div>
            <div class="col-md-12 col-lg-8">
               
                @include('persona.add-button', [
                    'ruta' => 'Persona.gettrucho',
                    'metodo' => 'GET',
                ])

                @include('persona.tabla-persona', ['personas' => $personas])
            </div>
        </div>
    </div>

@endsection
