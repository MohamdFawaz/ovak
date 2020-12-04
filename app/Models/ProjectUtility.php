<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectUtility extends Model
{
    use HasFactory;

    protected $with = ['utility'];

    public function utility()
    {
        return $this->belongsTo(Utility::class,'utility_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }
}
