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


    public function partC_SIanswer(Request $request)
    {
        $type_value = $request->type_value ?? "";

        if($type_value == 0){
            return view('level.level3.partE_SI');

        }else{
            return view('level.level3.partE_NO');
        }

    }


    public function partC_NO()
    {
        $quest = Preguntas::where('value', "e")->first();
        $data['quest'] = $quest ;

        return view('level.level2.partC_NO')->with($data);
    }

    public function partC_NOanswer(Request $request)
    {
        $type_value = $request->type_value ?? "";

        if($type_value == 0){
            return view('level.level3.partF_SI');

        }else{
            return view('level.level3.partF_NO');
        }
    }

    public function partD_SI()
    {
        $quest = Preguntas::where('value', "f")->first();
        $data['quest'] = $quest ;

        return view('level.level2.partD_SI')->with($data);
    }

    public function partD_SIanswer(Request $request)
    {
        $type_value = $request->type_value ?? "";

        if($type_value == 0){
//            finnnnnnnn
            return view('level.level3.partG_SI');

        }else{
            return view('level.level3.partG_NO');
        }
    }

    public function partD_NO()
    {
        $quest = Preguntas::where('value', "f")->first();
        $data['quest'] = $quest ;

        return view('level.level2.partD_NO')->with($data);
    }

    public function partD_NOanswer(Request $request)
    {
        $type_value = $request->type_value ?? "";

        if($type_value == 0){
//            finnnnnnnn
            return view('level.level3.partH_SI');

        }else{
            return view('level.level3.partH_NO');
        }
    }



}
