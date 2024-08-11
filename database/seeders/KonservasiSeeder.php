<?php

namespace Database\Seeders;

use App\Models\Konservasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KonservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Konservasi = [
            [
                'id' => 1,
                'nama' => 'Konservasi Penyu',
                'gambar' => 'gambar.png',
                'keterangan' => 'Salah satu pantai di Indonesia yang memiliki penangkaran penyu sendiri adalah Pantai Minang Rua. Pasalnya, di pantai ini seringkali menjadi tempat persinggahan bagi penyu-penyu ketika bermigrasi untuk bertelur. Penangkaran penyu ini tentunya menjadi daya tarik bagi para pengunjung yang berwisata ke Pantai Minang Rua. Pada saat musim bertelur penyu, pokdarwis akan berjaga malam untuk menyelamatkan telur tersebut dan berusaha menetaskannya Setelah proses penetasan, kemudian bayi-bayi penyu (tukik) akan dilepas liarkan ketika mereka sudah memasuki USia yang cukup untuk bertahan hidup.'
            ],
            [
                'id' => 2,
                'nama' => 'Konservasi Penyu 2',
                'gambar' => 'gambar.png',
                'keterangan' => 'Salah satu pantai di Indonesia yang memiliki penangkaran penyu sendiri adalah Pantai Minang Rua. Pasalnya, di pantai ini seringkali menjadi tempat persinggahan bagi penyu-penyu ketika bermigrasi untuk bertelur. Penangkaran penyu ini tentunya menjadi daya tarik bagi para pengunjung yang berwisata ke Pantai Minang Rua. Pada saat musim bertelur penyu, pokdarwis akan berjaga malam untuk menyelamatkan telur tersebut dan berusaha menetaskannya Setelah proses penetasan, kemudian bayi-bayi penyu (tukik) akan dilepas liarkan ketika mereka sudah memasuki USia yang cukup untuk bertahan hidup.'
            ],
        ];
        Konservasi::query()->insert($Konservasi);
    }
}
