<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'code' => '101010',
            'division' => 'Lagos',
            'allegy' => 'None',
            'name' => 'Admin Admin',
            'password' => Hash::make('admin123#'),
            'email' => 'admin@yahoo.com',
            'shirt' => 'M',
            'diet' => 'None',
            'jersey' => 'M',
            'location' => 'VI'
        ]);
    }
}
