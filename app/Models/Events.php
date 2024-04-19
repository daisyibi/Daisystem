<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'date_time',
        'organiser_id',
        'max_capacity',
        'user_id',
        'event_id',
    ];


    public function userProfile()
    {
        return $this->belongsTo(UserProfile::class);
    }
}
