<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function video()
    {
        return $this->belongsTo('App\Models\Video');
    }
}
