<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
//    use HasFactory;
    protected $fillable=[
        'festival_id','user_id','name','description','image','status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
