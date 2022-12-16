<?php

namespace App\Http\Controllers;
use App\Models\RoomType;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $rooms = RoomType::with('room')->get();
        return view('bookpage.book',compact('rooms'));
    }
    public function store(Request  $request){
        $rent = new Rent;
        Room::where('id_room',$request->room)->update(['occupied'=>true]);
        $count = Room::where('id_room_type',$request->paket)->where('occupied',false)->count();
        RoomType::where('id_room_type',$request->paket)->update(['available'=>$count]);
        Auth::check();
        $room = Room::where('id_room',$request->room)->get(['room_number','id_room_type']);
        $user_name = User::where('id',Auth::id())->get(['name']);
        $rent->id_user = Auth::id();
        $rent->id_room = $request->room;
        $rent->date_started = date("Y-m-d");
        $date = date_create(date("Y-m-d"));
        date_add($date, date_interval_create_from_date_string("30 days"));
        $rent->date_ended = date_format($date, 'Y-m-d');
        $rent->save();
        return view('bookpage.order',compact('user_name','room','rent'));
    }
}
