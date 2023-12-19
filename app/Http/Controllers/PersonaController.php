<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    public function store(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'nombres' => 'required|string',
                'apellidos' => 'required|string',
                'apodo' => 'required|string',
                'edad' => 'required|integer',
                'telefono' => 'required|integer'

            ]);

            $nuevaPersona = Persona::create([
                'nombres' => $validatedData['nombres'],
                'apellidos' => $validatedData['apellidos'],
                'apodo' => $validatedData['apodo'],
                'edad' => $validatedData['edad'],
                'telefono' => $validatedData['telefono']
            ]);

            return redirect()->route('Persona.index')->with('succes', 'Persona creada exitosamente');
        } catch (\Exception $e) {
            return redirect()->route('error')->with('error', 'Hubo un error al actualizar la persona: ' . $e->getMessage());
        }
    }

    public function editar($id)
    {
        $persona = Persona::findOrFail($id);

        return view('persona.editar', compact('persona'));
    }

    public function update(Request $request, $id)

    {
        try {
            //dd($request);
            $validatedData = $request->validate([
                'nombres' => 'required|string',
                'apellidos' => 'required|string',
                'apodo' => 'required|string',
                'edad' => 'required|integer',
                'telefono' => 'required|integer',
            ]);
            $persona = Persona::findOrFail($id);
            //dd($validatedData, $persona);
            $persona->update($validatedData);

            return redirect()->route('Persona.index');
        } catch (\Exception $e) {
            return redirect()->route('error');
        }
    }

    public function delete($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();

        return redirect()->route('Persona.index')->with('success', 'Persona eliminada exitosamente');
    }

    public function getTrucho(){
        return view("persona.plantilla");
    }
}
