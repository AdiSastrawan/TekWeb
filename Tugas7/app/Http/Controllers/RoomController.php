<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use App\Models\Room;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        $roomtype = RoomType::all();
        
        return view('frontpage.room',compact('roomtype'));
    }

}
