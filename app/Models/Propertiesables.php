<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertiesables extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function propertiesable()
    {
        return $this->morphTo();
    }

}
