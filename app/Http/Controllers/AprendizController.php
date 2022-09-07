<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class AprendizController extends Controller
{ 
    public function ViewInsert()
    {
        $ficha = App\Ficha::all();

        return view('Aprendiz/insert', compact('ficha'));
    }

    public function InsertAprendiz(Request $apre)
    {
        $aprendiz = new App\Aprendiz();
        $aprendiz->APREN_Nombre = $apre->APREN_Nombre;
        $aprendiz->APREN_Tipo_Documento = $apre->APREN_Tipo_Documento;
        $aprendiz->APREN_Documento = $apre->APREN_Documento;
        $aprendiz->APREN_Correo = $apre->APREN_Correo;
        $aprendiz->APREN_Genero = $apre->APREN_Genero;
        $aprendiz->APREN_Estado = $apre->APREN_Estado;
        $aprendiz->APREN_Telefono = $apre->APREN_Telefono;
        $aprendiz->id_ficha = $apre->id_ficha;
        $aprendiz->save(); 

        return redirect('Aprendiz/view');
    }

    public function ViewAprendiz()
    {
        $info = DB::table('aprendizs')
        ->join('fichas', 'fichas.id', '=', 'aprendizs.id_ficha')
        ->select('aprendizs.*', 'fichas.FICHA_Identificador_Unico')
        ->get();

        return view('Aprendiz/view', compact('info'));
    }

    public function DeleteAprendiz($id)
    {
        $apr = App\Aprendiz::FindOrFail($id);
        $apr->delete();

        return redirect('Aprendiz/view');
    }

    public function ViewUpdate($id)
    {
        $apr = App\Aprendiz::FindOrFail($id);
        $ficha = App\Ficha::all();

        return view('Aprendiz/update', compact('apr', 'ficha'));
    }

    public function UpdateAprendiz(Request $apre)
    {
        $aprendiz = App\Aprendiz::FindOrFail($apre->id);
        $aprendiz->APREN_Nombre = $apre->APREN_Nombre;
        $aprendiz->APREN_Tipo_Documento = $apre->APREN_Tipo_Documento;
        $aprendiz->APREN_Documento = $apre->APREN_Documento;
        $aprendiz->APREN_Correo = $apre->APREN_Correo;
        $aprendiz->APREN_Genero = $apre->APREN_Genero;
        $aprendiz->APREN_Estado = $apre->APREN_Estado;
        $aprendiz->APREN_Telefono = $apre->APREN_Telefono;
        $aprendiz->id_ficha = $apre->id_ficha;
        $aprendiz->update();

        return redirect('Aprendiz/view');

    }

    public function resuljson(){
        $verp = DB::table('aprendizs')
        ->join('fichas', 'fichas.id', '=', 'aprendizs.id_ficha')
        ->select('aprendizs.*', 'fichas.FICHA_Identificador_Unico')
        ->get();
        $datos = array('data' => $verp);
        return $datos;
    }

}
 