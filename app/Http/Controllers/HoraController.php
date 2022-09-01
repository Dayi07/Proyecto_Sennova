<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class HoraController extends Controller
{
    public function ViewInsert()
    {
        $ocu = App\Ocupacion::all();

        return view('Hora/insert', compact('ocu'));
    }

    public function InsertHora(Request $ho)
    {
        $hora = new App\Hora();
        $hora->HORAS_Monitores  = $ho->HORAS_Monitores;
        $hora->HORAS_Inst_Empresa  = $ho->HORAS_Inst_Empresa;
        $hora->HORAS_Contratista_Externo  = $ho->HORAS_Contratista_Externo;
        $hora->HORAS_Planta  = $ho->HORAS_Planta;
        $hora->HORAS_Total  = $ho->HORAS_Total;
        $hora->id_ocupacion  = $ho->id_ocupacion;
        $hora->save();

        return redirect('Hora/view');
    }

    public function ViewHora()
    {
        $hor = DB::table('horas')
        ->join('ocupacions', 'ocupacions.id', '=', 'horas.id_ocupacion')
        ->select('horas.*', 'ocupacions.OCUPA_Nombre')
        ->get();

        return view('Hora/view', compact('hor'));
    }

    public function DeleteHora($id)
    {
        $hor = App\Hora::FindOrFail($id);
        $hor->delete();

        return redirect('Hora/view');
    }

    public function ViewUpdate($id)
    {
        $hor = App\Hora::FindOrFail($id);
        $ocu = App\Ocupacion::all();

        return view('Hora/update', compact('hor', 'ocu'));
    }

    public function UpdateHora(Request $ho)
    {
        $hora = App\Hora::FindOrFail($ho->id);
        $hora->HORAS_Monitores  = $ho->HORAS_Monitores;
        $hora->HORAS_Inst_Empresa  = $ho->HORAS_Inst_Empresa;
        $hora->HORAS_Contratista_Externo  = $ho->HORAS_Contratista_Externo;
        $hora->HORAS_Planta  = $ho->HORAS_Planta;
        $hora->HORAS_Total  = $ho->HORAS_Total;
        $hora->id_ocupacion  = $ho->id_ocupacion;
        $hora->update();

        return redirect('Hora/view');

    }
}
