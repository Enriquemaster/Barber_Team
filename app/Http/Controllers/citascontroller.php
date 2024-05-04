<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\citas;
use Illuminate\Http\Request;

class citascontroller extends Controller
{
   
    public function index()
    {
        $Cita = citas::latest()->get();
        return view('reservas', ['Cita' => $Cita]);
    }
    
    public function create()
    {
        return view('agendar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'correo' => 'required',
            'nombre' => 'nullable',
            'servicio' => 'required',
            'barbero' => 'required',
            'fecha' => 'required'
        ], [
        
            'correo.required' => 'El campo de correo es obligatorio.',
            'servicio.required' => 'El campo Servicio es obligatorio.',
            'barbero.required' => 'El campo Barbero es obligatorio.',
            'fecha.required' => 'El campo Fecha es obligatorio.',
        ]);

        citas::create($request->all());
        return redirect()->route('agendar')->with('success', 'Cita agendada exitosamente!');
    }

   
    public function show(citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   
     public function edit(citas $cita)
     {
        return view('editar_reserva', ['cita' => $cita]);
     }
 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, citas $cita): RedirectResponse
    {
        $request->validate([
           
            'correo' => 'required',
            'servicio' => 'required',
            'barbero' => 'required',
            'fecha' => 'required'
        ]);

        $cita->update($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(citas $cita): RedirectResponse
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Cita eliminada exitosamente!');
    }
}
