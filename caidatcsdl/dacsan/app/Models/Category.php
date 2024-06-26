<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    
    public function monAn(){
        return $this->hasMany('App\Models\Food','id_category','id');
    }
}
