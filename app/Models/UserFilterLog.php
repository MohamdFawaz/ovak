<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFilterLog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class,'property_type_id')->withTrashed();
    }

    public function district()
    {
        return $this->belongsTo(District::class,'district_id')->withTrashed();
    }

    public function developer()
    {
        return $this->belongsTo(DevelopmentCompany::class,'development_company_id')->withTrashed();
    }

    public function unitType()
    {
        return $this->belongsTo(UnitType::class,'unit_type_id')->withTrashed();
    }
}
