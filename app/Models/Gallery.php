<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
//    use HasFactory;
    protected $fillable=[
        'fname','lname','description','image','gallery_category_id','status','insert_user_id','festival_id'
    ];

    public function gallery_category()
    {
        return $this->belongsTo('App\gallery_category','gallery_category_id','id');
    }

    public function festival()
    {
        return $this->belongsTo('App\festival');
    }
}
