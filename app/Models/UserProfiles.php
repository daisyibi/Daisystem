<?php

namespace App\Models;

// app/Models/UserProfiles.php


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Events;

class UserProfiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'bio',
        'contact_information',
        'preferences',
    ];

    // Define relationship with events
    public function events()
    {
        return $this->hasMany(Events::class, 'user_id', 'id');
        // Assuming that 'user_id' is the foreign key column in the 'events' table
        // and 'id' is the primary key column in the 'user_profiles' table
    }

    // Define relationship with networking
    public function networking()
    {
        return $this->belongsTo(Networking::class);
    }
}
