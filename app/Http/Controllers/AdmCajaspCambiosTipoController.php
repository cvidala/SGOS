<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmCajaspCambiosTipo;

class AdmCajaspCambiosTipoController extends Controller
{
    
    public function index()
    {
        $Adm = AdmCajaspCambiosTipo::all();

        return view ('Cambios_tipo.cambiosTipo', compact('Adm'));
    }

    public function create()
    {
        return view ('Cambios_tipo.insertar');   
    }

    public function store(Request $request)
    {
        // AdmCajaspCambiosTipo::create($request->all());

        $validatedData = $request->validate([
           'id_cajap_tipo' => "required",
            'desc_cambio_tipo' => "required",
        ]);

        AdmCajaspCambiosTipo::create([
          'id_cajap_tipo' => $validatedData['id_cajap_tipo'],
          'desc_cambio_tipo' => $validatedData['desc_cambio_tipo'],
        ]);
 
        return redirect()->route('CambiosTipo.index');
    }

    public function show($id)
    {
        $Adm = AdmCajaspCambiosTipo::findOrFail($id);

        return view ('Cambios_tipo.mostrar', compact('Adm'));
    }

    public function edit($id)
    {
        $Adm = AdmCajaspCambiosTipo::findOrFail($id);

        return view ('Cambios_tipo.modificar', compact('Adm'));
    }

    public function update(Request $request, $id)
    {
        AdmCajaspCambiosTipo::findOrFail($id)->update($request->all());

        return redirect()->route('CambiosTipo.index');
    }

    public function destroy($id)
    {
        AdmCajaspCambiosTipo::findOrFail($id)->delete();

        return redirect()->route('CambiosTipo.index');
    }
}

