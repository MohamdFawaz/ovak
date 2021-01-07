<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertiesables extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['property'];

    public function propertiesable()
    {
        return $this->morphTo();
    }

    public function property()
    {
        return $this->belongsTo(Property::class,'property_id');
    }
}
