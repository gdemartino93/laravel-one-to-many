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

    public function peopleDetail(){
        return $this->hasOne(peopleDetail :: class);
    }

    public function post(){
        return $this-> hasOne(post :: class);
    }
}
