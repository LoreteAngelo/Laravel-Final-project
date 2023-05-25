<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EAVERIFIER extends Controller
{

  
    public function age(Request $request){
        $age = $request->input('age');
        return view('age', compact('age'));


    }

}
