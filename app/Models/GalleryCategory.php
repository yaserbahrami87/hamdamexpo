<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
//    use HasFactory;
    protected $fillable=[
        'category','status'
    ];

    public function getRouteKeyName()
    {
        return 'category';
    }

    public function gallery()
    {
        return $this->hasMany('App\gallery','gallery_category_id','id');
    }
}
