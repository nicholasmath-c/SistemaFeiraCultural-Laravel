<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliation extends Model
{
    protected $table='avaliations';

    public function relTeacher(){
        $this->hasOne('App\Models\Teacher', 'id', 'id_teacher');
    }
}
