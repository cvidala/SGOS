<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmCajaspTipo;

class AdmCajaspTipoController extends Controller
{
    
    public function index()
    {
        $Adm = AdmCajaspTipo::all();

        return view ('Tipo.tipo', compact('Adm'));
    }

    public function create()
    {
        return view ('Tipo.insertar');   
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
           'id_boveda' => "required",
            'desc_cajap' => "required",
        ]);

        AdmCajaspTipo::create([
          'id_boveda' => $validatedData['id_boveda'],
          'desc_cajap' => $validatedData['desc_cajap'],
        ]);
 
        return redirect()->route('Tipo.index');
    }

    public function show($id)
    {
        $Adm = AdmCajaspTipo::findOrFail($id);

        return view ('Tipo.mostrar', compact('Adm'));
    }

    public function edit($id)
    {
        $Adm = AdmCajaspTipo::findOrFail($id);

        return view ('Tipo.modificar', compact('Adm'));
    }

    public function update(Request $request, $id)
    {
        AdmCajaspTipo::findOrFail($id)->update($request->all());

        return redirect()->route('Tipo.index');
    }

    public function destroy($id)
    {
        AdmCajaspTipo::findOrFail($id)->delete();

        return redirect()->route('Tipo.index');
    }
}