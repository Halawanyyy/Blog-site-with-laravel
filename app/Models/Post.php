<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    function users(){
        return $this->hasOne('users');
    }
    function comments(){
        return $this->hasMany('comments');
    }
}
