<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class OcupacionController extends Controller
{
    public function ViewInsert()
    {
        $sec = App\Sector::all();
        return view('Ocupacion/insert', compact('sec'));
    }

    public function InsertOcupacion(Request $ocu)
    {
        $ocupacion = new App\Ocupacion();
        $ocupacion->OCUPA_Nombre = $ocu->OCUPA_Nombre;
        $ocupacion->OCUPA_Codigo_Hora = $ocu->OCUPA_Codigo_Hora;
        $ocupacion->id_sector = $ocu->id_sector;
        $ocupacion->save();

        return redirect('Ocupacion/view');
    }

    public function ViewOcupacion()
    {
        $ocu = DB::table('ocupacions')
        ->join('sectors', 'sectors.id', '=', 'ocupacions.id_sector')
        ->select('ocupacions.*', 'sectors.SECTO_Nombre')
        ->get();

        return view('Ocupacion/view', compact('ocu'));
    }

    public function DeleteOcupacion($id)
    {
        $ocu = App\Ocupacion::FindOrFail($id);
        $ocu->delete();

        return redirect('Ocupacion/view');
    }

    public function ViewUpdate($id)
    {
        $ocu = App\Ocupacion::FindOrFail($id);
        $sec = App\Sector::all();

        return view('Ocupacion/update', compact('ocu', 'sec'));
    }

    public function UpdateOcupacion(Request $ocu)
    {
        $ocupacion = App\Ocupacion::FindOrFail($ocu->id);
        $ocupacion->OCUPA_Nombre = $ocu->OCUPA_Nombre;
        $ocupacion->OCUPA_Codigo_Hora = $ocu->OCUPA_Codigo_Hora;
        $ocupacion->id_sector = $ocu->id_sector;
        $ocupacion->update();

        return redirect('Ocupacion/view');
    }
}
