<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App; 
use App\MunicipioCurso;

class PaisController extends Controller
{
    public function ViewInsert()
    {
        return view('PaisCurso/insert');
    }

    public function Insert(Request $pais)
    {
        $instancia = new App\PaisCurso();
        $instancia->PAISC_Nombre = $pais->PAISC_Nombre;
        $instancia->save();

        return redirect('Pais/view');
    }

    public function View()
    {
        $objeto = App\PaisCurso::all();
        return view('PaisCurso/view', compact('objeto'));
    }

    public function DeletePais($id)
    {
        $pais = App\PaisCurso::FindOrFail($id);
        $pais->delete();

        return redirect('Pais/view');
    }

    public function DatosUpdate($id)
    {
        $pais = App\PaisCurso::FindOrFail($id);
        return view('PaisCurso/update', compact('pais'));
    }


    public function Update(Request $pais)
    {
        $instancia = App\PaisCurso::FindOrFail($pais->id);
        $instancia->PAISC_Nombre = $pais->PAISC_Nombre;
        $instancia->update();

        return redirect('Pais/view');
    }



}
