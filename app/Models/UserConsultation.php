<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserConsultation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function firstProject()
    {
        return $this->belongsTo(Project::class,'first_project_id');
    }

    public function secondProject()
    {
        return $this->belongsTo(Project::class,'second_project_id');
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class,'property_type_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class,'district_id');
    }
}
