@extends('layouts/base')

@section('titulo', 'Editar')

@section('contenido')
    <br>
    <center>
        <h1> editar persona</h1>
    </center>
    <br>
    <div class="container flex">
        <div class="row">

            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

                <!--solucionar el put con el personas y persona-->
                @include('persona.formulario-persona', [
                    'persona' => $persona,
                    'ruta' => 'Persona.update',
                    'id' => $persona->id,
                    'metodo' => 'PUT',
                    'nombreBoton' => 'Editar persona',
                ])
            </div>
            <div class="col-md-8">
            </div>
        </div>
    </div>

@endsection
