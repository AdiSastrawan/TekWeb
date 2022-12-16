<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $table = 'rent';
    protected $primaryKey = 'id_rent';
    protected $fillable = [
        'user_id',
        'room_id'
        
    ];
    public function room(){
        return $this->hasOne(Room::class,'id_room','id_room');
    }
}
