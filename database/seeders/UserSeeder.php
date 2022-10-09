<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'David Patiashvili',
            'email' => 'david.patiashvili@uneformation.fr',
            'password' => bcrypt('DavidPatiashvili'),
        ]);
    }
}
