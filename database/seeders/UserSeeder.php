<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
            'role_id' => '1',
            'name' => 'Ellic',
            'email' => 'ellic@gmail.com',
            'password' => Hash::make('tes'),
        ]);
        User::create([
            'role_id' => '2',
            'name' => 'Resta',
            'email' => 'resta@gmail.com',
            'password' => Hash::make('tes'),
        ]);
    }
}
