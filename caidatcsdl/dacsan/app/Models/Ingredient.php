<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $table = "ingredient";

    public function food(){
        return $this->belongsTo('App\Models\Food','id_food','id');
    }
}
