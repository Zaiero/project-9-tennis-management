<?php

namespace Database\Seeders;

use App\Models\Tournament;
use App\Models\TournamentMatch;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CourtSeeder::class,
            BookingSeeder::class,
            MaintenanceScheduleSeeder::class,
            TournamentSeeder::class,
            TournamentRegistrationSeeder::class,
            TournamentMatchSeeder::class,
        ]);
    }
}
