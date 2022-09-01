<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{
    public function ViewInsert()
    {
     $infopais = App\PaisCurso::all();
     return view('DepartamentoCurso/insert', compact('infopais'));
    }

    public function Insert(Request $dep)
    {
        $departamento = new App\DepartamentoCurso();
        $departamento->DEPAR_Nombre = $dep->DEPAR_Nombre;
        $departamento->id_pais = $dep->id_pais;
        $departamento->save();

        return redirect('Departamento/view');
    }

    public function ViewDepartamento()
    {
        $departamentos = DB::table('departamento_cursos')
        ->join('pais_cursos', 'pais_cursos.id', '=', 'departamento_cursos.id_pais')
        ->select('departamento_cursos.*', 'pais_cursos.PAISC_Nombre')
        ->paginate(30);
        return view('DepartamentoCurso/view', compact('departamentos'));
    }

    public function DeleteDep($id)
    {
        $departamento = App\DepartamentoCurso::FindOrFail($id);
        $departamento->delete();

        return redirect('Departamento/view');
    }

    public function DatosUpdate($id)
    {
        $infopais = App\PaisCurso::all();
        $departamento = App\DepartamentoCurso::FindOrFail($id);
        return view('DepartamentoCurso/update', compact('infopais', 'departamento'));
    }

    public function UpdateDep(Request $dep)
    {
        $departamento = App\DepartamentoCurso::FindOrFail($dep->id);
        $departamento->DEPAR_Nombre = $dep->DEPAR_Nombre;
        $departamento->id_pais = $dep->id_pais;
        $departamento->update();

        return redirect('Departamento/view');

    }


}
