<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmCajaspFormasPagos;

class AdmCajaspFormasPagosController extends Controller
{
    
    public function index()
    {
        $Adm = AdmCajaspFormasPagos::all();

        return view ('Formas_pagos.formasPagos', compact('Adm'));
    }

    public function create()
    {
        return view ('Formas_pagos.insertar');   
    }

    public function store(Request $request)
    {
        // AdmCajaspFormasPagos::create($request->all());

        $validatedData = $request->validate([
           'id_cajap_tipo' => "required",
            'desc_forma_pago' => "required",
        ]);

        AdmCajaspFormasPagos::create([
          'id_cajap_tipo' => $validatedData['id_cajap_tipo'],
          'desc_forma_pago' => $validatedData['desc_forma_pago'],
        ]);
 
        return redirect()->route('FormasPagos.index');
    }

    public function show($id)
    {
        $Adm = AdmCajaspFormasPagos::findOrFail($id);

        return view ('Formas_pagos.mostrar', compact('Adm'));
    }

    public function edit($id)
    {
        $Adm = AdmCajaspFormasPagos::findOrFail($id);

        return view ('Formas_pagos.modificar', compact('Adm'));
    }

    public function update(Request $request, $id)
    {
        AdmCajaspFormasPagos::findOrFail($id)->update($request->all());

        return redirect()->route('FormasPagos.index');
    }

    public function destroy($id)
    {
        AdmCajaspFormasPagos::findOrFail($id)->delete();

        return redirect()->route('FormasPagos.index');
    }
}
