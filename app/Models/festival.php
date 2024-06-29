<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class festival extends Model
{
//    use HasFactory;
    protected $fillable=[
        'festival','description','status'
    ];

    public function getRouteKeyName()
    {
        return 'festival';
    }

    public function pillars()
    {
        return $this->hasMany(Pillar::class);
    }

//    public function news()
//    {
//        return $this->hasMany('App\news');
//    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
