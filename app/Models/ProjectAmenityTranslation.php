<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectAmenityTranslation extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function setNameAttribute($name)
    {
        if (is_array($name)){
            $this->attributes['name'] =  reset($name);
        }else{
            $this->attributes['name'] = $name;
        }
    }
}
