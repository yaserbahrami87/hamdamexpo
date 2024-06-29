<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pillar extends Model
{
//    use HasFactory;
    protected $fillable=[
        'fname','lname','position','biography','image','insert_user_id','festival_id','status'
    ];

    public function festival()
    {
        return $this->belongsTo('App\festival');
    }
}
