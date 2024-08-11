<?php

namespace Database\Seeders;

use App\Models\Wisata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Wisata = [
            [
                'id' => 1,
                'nama' => 'Kedas Resort',
                'gambar' => 'gambar.png',
                'keterangan' => 'Rencanakan staycation atau acara pertemuan Anda di Kedas Hotel & Resort yang menggabungkan kenyamanan kamar modern dengan nuansa tradisional Bali. Nikmati pemandangan yang memukau sambil menikmati fasilitas seperti kolam renang, cafe, dan area bermain, semuanya tersedia dalam 8 bangunan kamar yang terpisah.'
            ],
            [
                'id' => 2,
                'nama' => 'Dragon Village',
                'gambar' => 'gambar.png',
                'keterangan' => 'Dragon Village adalah penginapan yang memiliki konsep bangunan dan ornamen rumah Joglo modern. Terdapat 8 buah bangunan kamar yang terpisah, kolam renang, cafe, dan pelataran serta halaman bermain.'
            ],
        ];
        Wisata::query()->insert($Wisata);
    }
}