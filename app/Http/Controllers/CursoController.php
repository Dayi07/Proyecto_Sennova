<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    public function ViewInsert()
    {
        $mun = App\MunicipioCurso::all();
        $sec = App\Sector::all();
        $jor = App\Jornada::all();

        return view('Curso/insert', compact('mun', 'sec', 'jor'));
    }

    public function InsertCurso(Request $cur)
    {
        $curso = new App\Curso();
        $curso->CURSO_Numero = $cur->CURSO_Numero ;
        $curso->CURSO_Nombre = $cur->CURSO_Nombre ;
        $curso->CURSO_Estado = $cur->CURSO_Estado ;
        $curso->CURSO_Tipo = $cur->CURSO_Tipo ;
        $curso->id_municipio = $cur->id_municipio ;
        $curso->id_sector = $cur->id_sector ;
        $curso->id_jornada = $cur->id_jornada ;
        $curso->save();

        return redirect('Curso/view');
    }

    public function ViewCurso()
    {
        $info = DB::table('cursos')
        ->join('municipio_cursos', 'municipio_cursos.id', '=', 'cursos.id_municipio')
        ->join('sectors', 'sectors.id', '=', 'cursos.id_sector')
        ->join('jornadas', 'jornadas.id', '=', 'cursos.id_jornada')
        ->select('cursos.*', 'municipio_cursos.MUNIC_Nombre', 'sectors.SECTO_Nombre', 'jornadas.JORNA_Nombre')
        ->get();

        return view('Curso/view', compact('info'));
    }

    public function DeleteCurso($id)
    {
        $curso = App\Curso::FindOrFail($id);
        $curso->delete();

        return redirect('Curso/view');
    } 

    public function DatosUpdate( Request $cur)
    {
        $mun = App\MunicipioCurso::all();
        $sec = App\Sector::all();
        $jor = App\Jornada::all();

        $curso = App\Curso::FindOrFail($cur->id);
        return view('Curso/update', compact('curso', 'mun', 'sec', 'jor'));
    }

    public function UpdateCurso(Request $cur)
    {
        $curso = App\Curso::FindOrFail($cur->id);
        $curso->CURSO_Numero = $cur->CURSO_Numero ;
        $curso->CURSO_Nombre = $cur->CURSO_Nombre ;
        $curso->CURSO_Estado = $cur->CURSO_Estado ;
        $curso->CURSO_Tipo = $cur->CURSO_Tipo ;
        $curso->id_municipio = $cur->id_municipio ;
        $curso->id_sector = $cur->id_sector ;
        $curso->id_jornada = $cur->id_jornada ;
        $curso->update();

        return redirect('Curso/view');

    }
}
