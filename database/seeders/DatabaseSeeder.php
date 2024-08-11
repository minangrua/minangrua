<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(KonservasiSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(WisataSeeder::class);
        $this->call(RestareaSeeder::class);
    }
}