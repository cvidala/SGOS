<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmCajaspCanjesTipo;

class AdmCajaspCanjesTipoController extends Controller
{
    
    public function index()
    {
        $Adm = AdmCajaspCanjesTipo::all();

        return view ('Canjes_tipo.canjesTipo', compact('Adm'));
    }

    public function create()
    {
        return view ('Canjes_tipo.insertar');   
    }

    public function store(Request $request)
    {
        // AdmCajaspCanjesTipo::create($request->all());

        $validatedData = $request->validate([
           'id_cajap_tipo' => "required",
            'desc_canje_tipo' => "required",
        ]);

        AdmCajaspCanjesTipo::create([
          'id_cajap_tipo' => $validatedData['id_cajap_tipo'],
          'desc_canje_tipo' => $validatedData['desc_canje_tipo'],
        ]);
 
        return redirect()->route('CanjesTipo.index');
    }

    public function show($id)
    {
        $Adm = AdmCajaspCanjesTipo::findOrFail($id);

        return view ('Canjes_tipo.mostrar', compact('Adm'));
    }

    public function edit($id)
    {
        $Adm = AdmCajaspCanjesTipo::findOrFail($id);

        return view ('Canjes_tipo.modificar', compact('Adm'));
    }

    public function update(Request $request, $id)
    {
        AdmCajaspCanjesTipo::findOrFail($id)->update($request->all());

        return redirect()->route('CanjesTipo.index');
    }

    public function destroy($id)
    {
        AdmCajaspCanjesTipo::findOrFail($id)->delete();

        return redirect()->route('CanjesTipo.index');
    }
}
