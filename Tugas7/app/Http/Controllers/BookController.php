<?php

namespace App\Http\Controllers;
use App\Models\RoomType;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $room = RoomType::all();
        return view('bookpage.book',compact('room'));
    }
}
