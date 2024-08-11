<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Type = [
            [
                'id' => 1,
                'nama' => 'Kedas Resort',
            ],
            [
                'id' => 2,
                'nama' => 'Dragon Village',
            ],
        ];
        Type::query()->insert($Type);
    }
}
