<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'full_name' => 'Carlos Costantino',
            'email' => 'carloscostantino@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'full_name' => 'Cynthia Alderete',
            'email' => 'cynthia.alderete@gmail.com',
            'password' => Hash::make('9987654'),
        ]);

        User::factory(10)->create();
    }
}
