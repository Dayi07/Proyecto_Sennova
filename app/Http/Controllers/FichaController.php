<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class FichaController extends Controller
{
    public function ViewInsert() 
    {
        $jor = App\Jornada::all();
        $prog = App\ProgramaFormacion::all();
        $cen = App\Centro::all();

        return view('Ficha/insert', compact('jor', 'prog', 'cen'));
    }

    public function InsertFicha(Request $fic)
    {
        $ficha = new App\Ficha;
        $ficha->FICHA_Identificador_Unico = $fic->FICHA_Identificador_Unico;
        $ficha->FICHA_Fecha_Inicio = $fic->FICHA_Fecha_Inicio;
        $ficha->FICHA_Fecha_Terminacion = $fic->FICHA_Fecha_Terminacion;
        $ficha->FICHA_Etapa = $fic->FICHA_Etapa;
        $ficha->FICHA_Nombre_Responsable = $fic->FICHA_Nombre_Responsable;
        $ficha->id_centro = $fic->id_centro;
        $ficha->id_jornada = $fic->id_jornada;
        $ficha->id_programa_formacion = $fic->id_programa_formacion;
        $ficha->save();

        return redirect('Ficha/view');

    }

    public function ViewFicha()
    {        

        $ficha = DB::table('fichas')
        ->join('centros', 'centros.id', '=', 'fichas.id_centro')
        ->join('jornadas', 'jornadas.id', '=', 'fichas.id_jornada')
        ->join('programa_formacions', 'programa_formacions.id', '=', 'fichas.id_programa_formacion')
        ->select('fichas.*', 'centros.CENTR_Nombre', 'jornadas.JORNA_Nombre', 'programa_formacions.PROGR_Nombre')
        ->get();

        return view('Ficha/view', compact('ficha'));
    }
 
    public function DeleteFicha($id)
    {
        $ficha = App\Ficha::FindOrFail($id);
        $ficha->delete();

        return redirect('Ficha/view');
    }

    public function ViewUpdate($id)
    {
        $fic = App\Ficha::FindOrFail($id);
        $jor = App\Jornada::all();
        $prog = App\ProgramaFormacion::all();
        $cen = App\Centro::all();

        return view('Ficha/update', compact( 'fic', 'jor', 'prog', 'cen'));
    }

    public function UpdateFicha(Request $fic)
    {
        $ficha = App\Ficha::FindOrFail($fic->id);
        $ficha->FICHA_Identificador_Unico = $fic->FICHA_Identificador_Unico;
        $ficha->FICHA_Fecha_Inicio = $fic->FICHA_Fecha_Inicio;
        $ficha->FICHA_Fecha_Terminacion = $fic->FICHA_Fecha_Terminacion;
        $ficha->FICHA_Etapa = $fic->FICHA_Etapa;
        $ficha->FICHA_Nombre_Responsable = $fic->FICHA_Nombre_Responsable;
        $ficha->id_centro = $fic->id_centro;
        $ficha->id_jornada = $fic->id_jornada;
        $ficha->id_programa_formacion = $fic->id_programa_formacion;
        $ficha->update();

        return redirect('Ficha/view');

    }

    public function resuljson(){
        $verp = DB::table('fichas')
        ->join('centros', 'centros.id', '=', 'fichas.id_centro')
        ->join('jornadas', 'jornadas.id', '=', 'fichas.id_jornada')
        ->join('programa_formacions', 'programa_formacions.id', '=', 'fichas.id_programa_formacion')
        ->select('fichas.*', 'centros.CENTR_Nombre', 'jornadas.JORNA_Nombre', 'programa_formacions.PROGR_Nombre')
        ->get();
        $datos = array('data' => $verp);
        return $datos;
    }
}
 