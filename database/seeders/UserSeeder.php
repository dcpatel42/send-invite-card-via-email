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
        $user = [
            'full_name' => 'Dhaval Patel',
            'email' => 'dhaval@invitecard.com',
            'password' => bcrypt('Test123#'),
            'gender' => 'male',
        ];
        $user = User::FirstOrCreate(['email' => $user['email']], $user);
    }
}
