<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmCajaspCanjeDestino;

class AdmCajaspCanjeDestinoController extends Controller
{

    public function index()
    {
        $Adm = AdmCajaspCanjeDestino::all();

        return view ('Canje_destino.canjeDestino', compact('Adm'));
    }

    public function create()
    {
        return view ('Canje_destino.insertar');   
    }

    public function store(Request $request)
    {
        // AdmCajaspCanjeDestino::create($request->all());

        $validatedData = $request->validate([
           // 'id_cajap_tipo' => "required",
            'desc_canje_destino' => "required",
        ]);

        AdmCajaspCanjeDestino::create([
          // 'id_cajap_tipo' => $validatedData['id_cajap_tipo'],
          'desc_canje_destino' => $validatedData['desc_canje_destino'],
        ]);
 
        return redirect()->route('CanjeDestino.index');
    }

    public function show($id)
    {
        // $Adm = AdmCajaspCanjeDestino::findOrFail($id);

        // return view ('Canje_destino.mostrar', compact('Adm'));

        $Adm = AdmCajaspCanjeDestino::findOrFail($id);

        return view ('Canje_destino.mostrar', compact('Adm'));
    }

    public function edit($id)
    {
        $Adm = AdmCajaspCanjeDestino::findOrFail($id);

        return view ('Canje_destino.modificar', compact('Adm'));
    }

    public function update(Request $request, $id)
    {
        AdmCajaspCanjeDestino::findOrFail($id)->update($request->all());

        return redirect()->route('CanjeDestino.index');
    }

    public function destroy($id)
    {
        AdmCajaspCanjeDestino::findOrFail($id)->delete();

        return redirect()->route('CanjeDestino.index');
    }
}
