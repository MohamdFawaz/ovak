<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyType extends Model implements TranslatableContract
{
    use HasFactory,Translatable,SoftDeletes;

    public $translatedAttributes = ['name'];
    protected $guarded = [];
}
