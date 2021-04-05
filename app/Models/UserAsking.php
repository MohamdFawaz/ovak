<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAsking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,"user_id");
    }

    public function project()
    {
        return $this->belongsTo(Project::class,"project_id")->withTrashed();
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class,'unit_id')->withTrashed();
    }
}
