<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ArithmeticController extends Controller
{
    public function index(){
        $value=[];

        return view('arithmetic',compact('value'));
    }
    public function hitungJumlah(Request $request){

        $x = $request->input('angka1');
        $y = $request->input('angka2');
        $n = $request->input('n');
        $value=[$x];
        for($i=1;$i<=$n-1;$i++){
            $value[$i] = $value[$i-1]+$y;
        }
        return view('arithmetic',compact('value'));
    }
}
