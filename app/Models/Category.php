<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relacion uno a muchos
    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }
}