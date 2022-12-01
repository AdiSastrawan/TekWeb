<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    public function facility(){
        return $this->hasOne(Facility::class,'id_facility','id_facility');
    }
}
