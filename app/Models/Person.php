<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

    public function personDetail(){
        return $this->hasOne(personDetail :: class);
    }

    public function post(){
        return $this-> hasMany(Post :: class);
    }
}
