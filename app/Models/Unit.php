<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Unit extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name','description'];

    protected $guarded = [];

    public function getImageAttribute($value)
    {
        if ($value){
            return asset('images/units/'.$value);
        }else{
            return asset('img/placeholder/vendor-placeholder-logo.png');
        }
    }

    public function setImageAttribute($image)
    {
        if($image){
            $img_name = time().rand(1111,9999).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/units/'),$img_name);
            $this->attributes['image'] = $img_name ;
        }
    }

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    public function property()
    {
        return $this->morphMany(Propertiesables::class, 'propertiesable');
    }

    public function gallery()
    {
        return $this->hasMany(UnitGallery::class,'unit_id');
    }
}
