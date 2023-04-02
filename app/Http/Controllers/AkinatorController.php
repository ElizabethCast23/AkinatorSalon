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

    public function partAanswer(Request $request)
    {
        $type_value = $request->type_value ?? "";

        if($type_value == 0){
            return view('level.partB_SI');

        }else{
            return view('level.partB_NO');
        }

    }

    public function partB_SI()
    {
        $quest = Preguntas::where('value', "b")->first();
        $data['quest'] = $quest ;

        return view('level.partB_SI')->with($data);
    }

    public function partB_SIanswer(Request $request)
    {
        $type_value = $request->type_value ?? "";

        if($type_value == 0){
            return view('level.level2.partC_SI');

        }else{
            return view('level.level2.partC_NO');
        }

    }



    public function partB_NO()
    {
        $quest = Preguntas::where('value', "c")->first();
        $data['quest'] = $quest ;

        return view('level.partB_NO')->with($data);
    }


    public function partB_NOanswer(Request $request)
    {
        $type_value = $request->type_value ?? "";

        if($type_value == 0){
            return view('level.level2.partD_SI');

        }else{
            return view('level.level2.partD_NO');
        }

    }

}
