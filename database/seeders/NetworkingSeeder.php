<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Networking;
use App\Models\UserProfile;

class NetworkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Networking::factory(10)->create();
    }
}
