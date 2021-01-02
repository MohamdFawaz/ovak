<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectAmenityTranslation extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function getNameAttribute($name)
    {
        return str_replace( array('[',']','"') , ''  , $name);
    }
}
