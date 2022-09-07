<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class RegionalController extends Controller
{
    public function ViewInsert()
    {
        return view('Regional/insert');
    }

    public function InsertRegional(Request $reg)
    {
        $regional = new App\Regional();
        $regional->REGIO_Nombre = $reg->REGIO_Nombre;
        $regional->save();

        return redirect('Regional/view');
    }

    public function ViewRegional()
    {
        $reg = App\Regional::all();

        return view('Regional/view', compact('reg'));
    }
    
    public function DeleteRegional($id)
    {
        $reg = App\Regional::FindOrFail($id);
        $reg->delete();

        return redirect('Regional/view');
    }

    public function ViewUpdate($id)
    {
        $reg = App\Regional::FindOrFail($id);

        return view('Regional/update', compact('reg'));
    }

    public function UpdateRegional(Request $reg)
    {
        $regional = App\Regional::FindOrFail($reg->id);
        $regional->REGIO_Nombre = $reg->REGIO_Nombre;
        $regional->update();
        
        return redirect('Regional/view');
    }

    public function resuljson(){
        $verp = App\Regional::all();
        $datos = array('data' => $verp);
        return $datos;
    }

}
