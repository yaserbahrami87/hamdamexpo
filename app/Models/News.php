<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
//    use HasFactory;

    protected $fillable=[
        'title','description','content','festival_id','user_id','date_fa','time_fa','image'
    ];

    public function festival()
    {
        return $this->belongsTo(festival::class);
    }
}
