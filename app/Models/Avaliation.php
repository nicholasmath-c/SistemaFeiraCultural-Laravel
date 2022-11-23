<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Avaliation extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='avaliations';
    
    protected $fillable=['id_teacher', 'email_visitor', 'project', 'mention', 'comment'];

    public function relTeacher(){
        $this->hasOne('App\Models\Teacher', 'id', 'id_teacher');
    }

    public function relVisitor(){
        $this->hasOne('App\Models\Visitor', 'id', 'id_visitor');
    }
}
