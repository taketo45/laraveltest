<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'name' => 'ikegai',
            'login_id' => 'ikegai_id',
            'password' => Hash::make('password'),
        ]);
        Admin::factory()->create([
            'name' => 'test',
            'login_id' => 'test_id',
            'password' => Hash::make('password'),
        ]);
    }
}
