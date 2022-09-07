<?php

namespace App\Http\Controllers;

use App\MunicipioCurso;
use Illuminate\Http\Request;
use App;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;


class MunicipioController extends Controller
{ 
    public function ViewInsert()
    {
        $infodep = App\DepartamentoCurso::all();
        return view('MunicipioCurso/insert', compact('infodep'));
    }
    
    public function InsertMun(Request $municipio)
    {
        $instancia = new App\MunicipioCurso();
        $instancia->MUNIC_Nombre = $municipio->MUNIC_Nombre;
        $instancia->id_departamento = $municipio->id_departamento;
        $instancia->save();

        return redirect('Municipio/view');

    }

    public function ViewMun()
    {
        $infomun = DB::table('municipio_cursos')
        ->join('departamento_cursos', 'departamento_cursos.id', '=', 'municipio_cursos.id_departamento')
        ->select('municipio_cursos.*', 'departamento_cursos.DEPAR_Nombre')
        ->paginate(30);
        return view('MunicipioCurso/view', compact('infomun'));
    }

    public function DeleteMun($id)
    {
        $pais = App\MunicipioCurso::FindOrFail($id);
        $pais->delete();

        return redirect('Municipio/view');
    }
 
    public function DatosUpdate($id)
    {
        $infodep = App\DepartamentoCurso::all();
        $mun = App\MunicipioCurso::FindOrFail($id);
        return view('MunicipioCurso/update', compact('mun', 'infodep'));
    }

    public function Update(Request $mun)
    {
        $instancia = App\MunicipioCurso::FindOrFail($mun->id);
        $instancia->MUNIC_Nombre = $mun->MUNIC_Nombre;
        $instancia->id_departamento = $mun->id_departamento;
        $instancia->update();

        return redirect('Municipio/view');
    } 


    public function resuljson(){
        //$verp =  App\MunicipioCurso::All();
        $verp = DB::table('municipio_cursos')
        ->join('departamento_cursos', 'departamento_cursos.id', '=', 'municipio_cursos.id_departamento')
        ->select('municipio_cursos.*', 'departamento_cursos.DEPAR_Nombre')
        ->get();
        $datos = array('data' => $verp);
        return $datos;
    }



}
