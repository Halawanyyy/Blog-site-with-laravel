<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table='users';
    function posts(){
        return $this->hasMany('posts');
    }
    function comments(){
        return $this->hasMany('comments');
    }
}
