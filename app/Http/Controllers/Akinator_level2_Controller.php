<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use Illuminate\Http\Request;

class Akinator_level2_Controller extends Controller
{
    public function partC_SI()
    {
        $quest = Preguntas::where('value', "d")->first();
        $data['quest'] = $quest ;

        return view('level.level2.partC_SI')->with($data);
    }

    public function partC_NO()
    {
        $quest = Preguntas::where('value', "e")->first();
        $data['quest'] = $quest ;

        return view('level.level2.partC_NO')->with($data);
    }

    public function partD_SI()
    {
        $quest = Preguntas::where('value', "f")->first();
        $data['quest'] = $quest ;

        return view('level.level2.partD_SI')->with($data);
    }

    public function partD_NO()
    {
        $quest = Preguntas::where('value', "f")->first();
        $data['quest'] = $quest ;

        return view('level.level2.partD_NO')->with($data);
    }

}
