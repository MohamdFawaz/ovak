<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class DevelopmentCompany extends Model implements TranslatableContract
{
    use HasFactory,Translatable,SoftDeletes;

    public $translatedAttributes = ['name','description'];
    public $translationForeignKey = 'dev_company_id';
    protected $guarded = [];

    public function getImageAttribute($value)
    {
        if ($value){
            return asset('images/companies/'.$value);
        }else{
            return asset('img/placeholder/vendor-placeholder-logo.png');
        }
    }

    public function setImageAttribute($image)
    {
        if($image){
            $img_name = time().rand(1111,9999).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/companies/'),$img_name);
            $this->attributes['image'] = $img_name ;
        }
    }

    public function project()
    {
        return $this->hasMany(Project::class,'development_company_id');
    }
}
