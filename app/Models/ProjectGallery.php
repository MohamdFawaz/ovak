<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    use HasFactory;

    protected $table = 'project_gallery';

    protected $guarded = [];

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('images/project_gallery/' . $value);
        } else {
            return asset('img/placeholder/vendor-placeholder-logo.png');
        }
    }

    public function setImageAttribute($image)
    {
        if ($image) {
            $img_name = time() . rand(1111, 9999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/project_gallery/'), $img_name);
            $this->attributes['image'] = $img_name;
        }

    }

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }
}
