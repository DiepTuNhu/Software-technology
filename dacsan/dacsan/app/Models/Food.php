<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = "food";

    public function images(){
        return $this->hasMany(Image::class,'id_food','id');
    }

    public function ingredient(){
        return $this->hasMany(Ingredient::class,'id_food','id');
    }
    
    public function servicePoint(){
        return $this->hasMany(ServicePoint::class,'id_food','id');
    }

    public function categories(){
        return $this->belongsTo(Category::class,'id_category','id');
    }
}
