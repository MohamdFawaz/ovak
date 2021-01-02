<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitFinishType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function finishType()
    {
        return $this->belongsTo(FinishType::class,'finish_type_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class,'unit_id');
    }

}
