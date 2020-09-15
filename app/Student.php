<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'name',
        'email',
        'birth_date',
    ];

    public function courses(){
        return $this->hasMany(Register::class,'student','id');
    }
}
