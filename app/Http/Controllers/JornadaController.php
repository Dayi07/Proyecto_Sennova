<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class JornadaController extends Controller
{
    public function ViewInsert()
    {
        return view('Jornada/insert');
    }

    public function InsertJornada(Request $jor)
    {
        $jornada = new App\Jornada;
        $jornada->JORNA_Nombre = $jor->JORNA_Nombre;
        $jornada->save();

        return redirect('Jornada/view');
    }

    public function ViewJornada()
    {
        $jornada = App\Jornada::all();
        return view('Jornada/view', compact('jornada'));
    }

    public function DeleteJornada($id)
    {
        $jor = App\Jornada::FindOrFail($id);
        $jor->delete();

        return redirect('Jornada/view');
    }

    public function DatosUpdate(Request $jornada)
    {
        $jor = App\Jornada::FindOrFail($jornada->id);

        return view('Jornada/update', compact('jor'));
    }

    public function UpdateJornada(Request $jor)
    {
        $jornada = App\Jornada::FindOrFail($jor->id);
        $jornada->JORNA_Nombre = $jor->JORNA_Nombre;
        $jornada->update();

        return redirect('Jornada/view');
    }
}
