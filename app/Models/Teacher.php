<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table='teachers';

    public function relAvaliation(){
        $this->hasMany('App\Models\Avaliation', 'id_teacher');
    }
}
