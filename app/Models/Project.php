<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table='projects';

    public function relAvaliation(){
        $table->hasMany('App\Models\Avaliation', 'id_projeto');
    }
}
