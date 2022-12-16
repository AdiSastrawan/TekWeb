<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        $room = Rent::where('id_user', '=', Auth::id())->with(['room','room.roomType'])->get()->first();
        $user = User::where('id', '=', Auth::id())->get(['name','email','password'])->first();
        return view('dashboard.dashboard',compact('user', 'room'));
    }
    public function removeRent($id){
        $update= Rent::with('room','room.roomType')->where('id_rent', '=', $id)->get()->first();
        Room::where('id_room',$update->room['id_room'])->update(['occupied'=>false]);
        $count = Room::where('id_room_type',$update->room['id_room_type'])->where('occupied',false)->count();
        RoomType::where('id_room_type',$update->room['id_room_type'])->update(['available'=>$count]);
        Rent::where('id_rent', $id)->firstorfail()->delete();
        $update->save();
        return redirect('/user');
    }
    public function editPage(){
        $user = User::findorFail(Auth::id());
        return view('dashboard.edit',compact('user'));
    }
    public function update(Request $request,$id){
        $user = User::findorFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/user');

    }
}
