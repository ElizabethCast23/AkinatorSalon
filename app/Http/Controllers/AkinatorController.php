<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Preguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkinatorController extends Controller
{
    public function partA()
    {
        $quest = Preguntas::where('value', "a")->first();
        $data['quest'] = $quest ;

        return view('level.partA')->with($data);
    }

    public function partB_SI()
    {
        $quest = Preguntas::where('value', "b")->first();
        $data['quest'] = $quest ;

        return view('level.partB_SI')->with($data);
    }

    public function partB_NO()
    {
        $quest = Preguntas::where('value', "c")->first();
        $data['quest'] = $quest ;

        return view('level.partB_NO')->with($data);
    }


}
