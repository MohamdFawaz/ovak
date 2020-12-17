<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Project extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public $translatedAttributes = ['name','address','description'];
    protected $guarded = [];

    public function getImageAttribute($value)
    {
        if ($value){
            return asset('images/projects/'.$value);
        }else{
            return asset('img/placeholder/vendor-placeholder-logo.png');
        }
    }

    public function setImageAttribute($image)
    {
        if($image){
            $img_name = time().rand(1111,9999).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/projects/'),$img_name);
            $this->attributes['image'] = $img_name ;
        }
    }

    public function developer()
    {
        return $this->belongsTo(DevelopmentCompany::class,'development_company_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class,'district_id');
    }

    public function finishType()
    {
        return $this->belongsTo(FinishType::class,'finish_type_id');
    }

    public function unitType()
    {
        return $this->belongsTo(UnitType::class,'unit_type_id');
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class,'property_type_id');
    }

    public function property()
    {
        return $this->morphMany(Propertiesables::class, 'propertiesable');
    }

    public function amenity()
    {
        return $this->hasMany(ProjectAmenity::class,'project_id');
    }

    public function utility()
    {
        return $this->hasMany(ProjectUtility::class,'project_id');
    }

    public function gallery()
    {
        return $this->hasMany(ProjectGallery::class,'project_id');
    }
}
