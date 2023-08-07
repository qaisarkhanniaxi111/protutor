<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'student',
            'last_name' => 'st',
            'email' => 'student@example.com',
            'email_verified_at' => now(),
            'role' => 4,
            'user_status' => 1,
            'password' => '036a8b709875bbb4e7286eb7ac7cb95a', // qaisar1234*
            'email_verify' => 1,
        ]);
    }
}
