<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmCajaspTipoMov;

class AdmCajaspTipoMovController extends Controller
{
    
    public function index()
    {
        $Adm = AdmCajaspTipoMov::all();

        return view ('Tipo_mov.tipoMov', compact('Adm'));
    }

    public function create()
    {
        return view ('Tipo_mov.insertar');   
    }

    public function store(Request $request)
    {
        // AdmCajaspTipoMov::create($request->all());

        $validatedData = $request->validate([
           'id_cajap_tipo' => "required",
            'desc_cajap_mov' => "required",
        ]);

        AdmCajaspTipoMov::create([
          'id_cajap_tipo' => $validatedData['id_cajap_tipo'],
          'desc_cajap_mov' => $validatedData['desc_cajap_mov'],
        ]);
 
        return redirect()->route('TipoMov.index');
    }

    public function show($id)
    {
        $Adm = AdmCajaspTipoMov::findOrFail($id);

        return view ('Tipo_mov.mostrar', compact('Adm'));
    }

    public function edit($id)
    {
        $Adm = AdmCajaspTipoMov::findOrFail($id);

        return view ('Tipo_mov.modificar', compact('Adm'));
    }

    public function update(Request $request, $id)
    {
        AdmCajaspTipoMov::findOrFail($id)->update($request->all());

        return redirect()->route('TipoMov.index');
    }

    public function destroy($id)
    {
        AdmCajaspTipoMov::findOrFail($id)->delete();

        return redirect()->route('TipoMov.index');
    }
}