<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'firstname' => 'Ahmed',
                'lastname' => 'Al-Ghurbani',
                'email' => 'ahmed@gmail.com',
                'phonenumber' => '0645678901',
                'street' => 'Kerkstraat',
                'housenumber' => '2',
                'postal_code' => '1203AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('ahmed12345'),
            ],
            [
                'firstname' => 'Ali',
                'lastname' => 'Al-Ghurbani',
                'email' => 'ali@gmail.com',
                'phonenumber' => '0645678901',
                'street' => 'Kerkstraat',
                'housenumber' => '3',
                'postal_code' => '1234AB',
                'city' => 'leiden',
                'password' => bcrypt('ali12345'),
            ],
            [
                'firstname' => 'Sara',
                'lastname' => 'Jansen',
                'email' => 'sara@gmail.com',
                'phonenumber' => '0612345678',
                'street' => 'Dorpsstraat',
                'housenumber' => '12A',
                'postal_code' => '5678CD',
                'city' => 'Amsterdam',
                'password' => bcrypt('sara12345'),
            ],
            [
                'firstname' => 'Omar',
                'lastname' => 'De Vries',
                'email' => 'omar@gmail.com',
                'phonenumber' => '0623456789',
                'street' => 'Hoofdstraat',
                'housenumber' => '7B',
                'postal_code' => '9012EF',
                'city' => 'Rotterdam',
                'password' => bcrypt('omar12345'),
            ],
            [
                'firstname' => 'Fatima',
                'lastname' => 'Van Dijk',
                'email' => 'fatima@gmail.com',
                'phonenumber' => '0634567890',
                'street' => 'Lindelaan',
                'housenumber' => '25',
                'postal_code' => '3456GH',
                'city' => 'Utrecht',
                'password' => bcrypt('fatima12345'),
            ],
            [
                'firstname' => 'Yusuf',
                'lastname' => 'Bakker',
                'email' => 'yusuf@gmail.com',
                'phonenumber' => '0656789012',
                'street' => 'Bergweg',
                'housenumber' => '18C',
                'postal_code' => '7890IJ',
                'city' => 'The Hague',
                'password' => bcrypt('yusuf12345'),
            ],
            
        ]);
    }
}
