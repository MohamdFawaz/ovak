<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubscription extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCreatedAtAttribute($value) : string
    {
        return Carbon::parse($value)->format('d-M-yy');
    }
}
