<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(){
        $luas=null;
        return view('area',compact('luas'));
    }
    public function hitungLuas(Request $request){
        $panjang = $request->input('angka1');
        $lebar = $request->input('angka2');
        $id = $request->input('field');
        switch ($id){
            case 1 :
                $luas = ($panjang * $lebar)/2;break;
            case 2 :
                $luas = $panjang * $lebar;break;
            case 3 :
                $luas = $panjang * $lebar;break;
        }
        return view('area',compact('luas','id','panjang','lebar'));
    }
}
