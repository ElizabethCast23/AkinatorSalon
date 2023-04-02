<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Preguntas;
use Illuminate\Http\Request;

class Akinator_level3_Controller extends Controller
{
    public function partE_SI()
    {
        $quest = Preguntas::where('value', "g")->first();
        $data['quest'] = $quest ;

        return view('level.level3.partE_SI')->with($data);
    }

    public function partE_NO()
    {
        $quest = Preguntas::where('value', "h")->first();
        $data['quest'] = $quest ;

        return view('level.level3.partE_NO')->with($data);
    }

    public function partF_SI()
    {
        $quest = Preguntas::where('value', "f")->first();
        $data['quest'] = $quest ;

        return view('level.level3.partF_SI')->with($data);
    }

    public function partF_NO()
    {
        $quest = Preguntas::where('value', "i")->first();
        $data['quest'] = $quest ;

        return view('level.level3.partF_NO')->with($data);
    }

    public function partG_SI()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(10);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level3.partG_SI')->with($data);
    }

    public function partG_NO()
    {
        $quest = Preguntas::where('value', "j")->first();
        $data['quest'] = $quest ;

        return view('level.level3.partG_NO')->with($data);
    }

    public function partH_SI()
    {
        $alumna = Alumnos::find(11);
        $quest = Preguntas::where('value', "f")->first();
        $data['alumna'] = $alumna ;
        $data['quest'] = $quest ;

        return view('level.level3.partH_SI')->with($data);
    }

    public function partH_NO()
    {
        $quest = Preguntas::where('value', "i")->first();
        $data['quest'] = $quest ;

        return view('level.level3.partH_NO')->with($data);
    }
}
