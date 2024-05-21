<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePoint extends Model
{
    use HasFactory;
    protected $table = "service_point";

    public function food(){
        return $this->belongsTo('App\Models\Food','id_food','id');
    }
}
