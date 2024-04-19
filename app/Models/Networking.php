<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\userProfiles;

class Networking extends Model
{
    use HasFactory;

    protected $fillable = [
        'desired_company',
        'salary_expectation',
        'work_experience',
        'skills',
        'degree',
        'user_id',
    ];

    // Define relationship with user profiles
    public function userProfiles()
    {
        return $this->belongsTo(UserProfiles::class);
    }
}
