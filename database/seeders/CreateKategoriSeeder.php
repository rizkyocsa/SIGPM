<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class CreateKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoris = [
            [
                'nama_kategori' => 'Standar SPMI',
            ],
            [
                'nama_kategori' => 'Formulir SPMI',
            ],
            [
                'nama_kategori' => 'Manual SPMI',
            ],
            [
                'nama_kategori' => 'Kebijakan SPMI',
            ],
            [
                'nama_kategori' => 'Laporan',
            ],
            [
                'nama_kategori' => 'Kegiatan Mutu',
            ],
        ];

        foreach ($kategoris as $key => $role){
            Kategori::create($role);
        }
    }
}
