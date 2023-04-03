<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Preguntas;
use Illuminate\Http\Request;

class Akinator_level4_Controller extends Controller
{
    public function partI_SI()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(6);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partI_SI')->with($data);
    }

    public function partI_NO()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(4);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partI_NO')->with($data);
    }

    public function partJ_SI()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(7);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partJ_SI')->with($data);
    }

    public function partJ_NO()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(1);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partJ_NO')->with($data);
    }

    public function partK_SI()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(5);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partJ_SI')->with($data);
    }

    public function partK_NO()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(8);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partJ_NO')->with($data);
    }

    public function partL_SI()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(14);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partJ_SI')->with($data);
    }

    public function partL_NO()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(12);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partJ_NO')->with($data);
    }

//

    public function partM_SI()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(9);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partJ_SI')->with($data);
    }

    public function partM_NO()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(2);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partJ_NO')->with($data);
    }

    public function partN_SI()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(13);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partJ_SI')->with($data);
    }

    public function partN_NO()
    {
        $quest = Preguntas::where('value', "g")->first();
        $alumna = Alumnos::find(3);
        $data['quest'] = $quest ;
        $data['alumna'] = $alumna ;

        return view('level.level4.partJ_NO')->with($data);
    }

}
