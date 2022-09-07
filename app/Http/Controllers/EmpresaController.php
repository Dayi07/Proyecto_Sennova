<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class EmpresaController extends Controller
{
    public function ViewInsert()
    {
        return view('Empresa/insert');
    }

    public function InsertEmpresa(Request $emp)
    {
        $empresa = new App\Empresa();
        $empresa->EMPRE_Tipo_Identificacion = $emp->EMPRE_Tipo_Identificacion;
        $empresa->EMPRE_Nombre = $emp->EMPRE_Nombre;
        $empresa->EMPRE_Id_Empresa = $emp->EMPRE_Id_Empresa;
        $empresa->save();

        return redirect('Empresa/view');
    }

    public function ViewEmpresa()
    {
        $emp = App\Empresa::all();
        return view('Empresa/view', compact('emp'));
    }

    public function DeleteEmpresa($id)
    {
        $empresa = App\Empresa::FindOrFail($id);
        $empresa->delete();

        return redirect('Empresa/view');
    }

    public function DatosUpdate($id)
    {
        $emp = App\Empresa::FindOrFail($id);

        return view('Empresa/update', compact('emp'));
    }

    public function UpdateEmpresa(Request $emp)
    {
        $empresa = App\Empresa::FindOrFail($emp->id);
        $empresa->EMPRE_Tipo_Identificacion = $emp->EMPRE_Tipo_Identificacion;
        $empresa->EMPRE_Nombre = $emp->EMPRE_Nombre;
        $empresa->EMPRE_Id_Empresa = $emp->EMPRE_Id_Empresa;
        $empresa->update();

        return redirect('Empresa/view');
    }

    public function resuljson(){
        $verp = App\Empresa::all();
        $datos = array('data' => $verp);
        return $datos;
    }
}
 