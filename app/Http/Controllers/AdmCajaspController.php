<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmCajasp;

class AdmCajaspController extends Controller
{
    

    public function index()
    {
        $Adm = AdmCajasp::all();

        return view ('Cajasp.cajasp', compact('Adm'));
    }

    public function create()
    {
        return view ('Cajasp.insertar');   
    }

    public function store(Request $request)
    {
        // AdmCajasp::create($request->all());

        $validatedData = $request->validate([
           'id_cajap_tipo' => "required",
            'desc_cajap' => "required",
        ]);

        AdmCajasp::create([
          'id_cajap_tipo' => $validatedData['id_cajap_tipo'],
          'desc_cajap' => $validatedData['desc_cajap'],
        ]);
 
        return redirect()->route('Cajasp.index');
    }

    public function show($id)
    {
        $Adm = AdmCajasp::findOrFail($id);

        return view ('Cajasp.mostrar', compact('Adm'));
    }

    public function edit($id)
    {
        $Adm = AdmCajasp::findOrFail($id);

        return view ('Cajasp.modificar', compact('Adm'));
    }

    public function update(Request $request, $id)
    {
        AdmCajasp::findOrFail($id)->update($request->all());

        return redirect()->route('Cajasp.index');
    }

    public function destroy($id)
    {
        AdmCajasp::findOrFail($id)->delete();

        return redirect()->route('Cajasp.index');
    }
}
