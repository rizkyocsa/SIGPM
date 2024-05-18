<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kriteria;

class CreateAkreditasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Kriteria = [
            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Penetapan',
                'no_urut' => '1',
                'nama_dokumen' => 'Penetapan 1',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],
            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Penetapan',
                'no_urut' => '2',
                'nama_dokumen' => 'Penetapan 2',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],
            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Penetapan',
                'no_urut' => '4',
                'nama_dokumen' => 'Penetapan 4',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],

            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Pelaksanaan',
                'no_urut' => '1',
                'nama_dokumen' => 'Pelaksanaan 1',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],
            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Pelaksanaan',
                'no_urut' => '2',
                'nama_dokumen' => 'Pelaksanaan 2',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],
            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Pelaksanaan',
                'no_urut' => '3',
                'nama_dokumen' => 'Pelaksanaan 3',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],

            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Evaluasi',
                'no_urut' => '1',
                'nama_dokumen' => 'Evaluasi 1',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],
            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Evaluasi',
                'no_urut' => '2',
                'nama_dokumen' => 'Evaluasi 2',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],
            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Evaluasi',
                'no_urut' => '3',
                'nama_dokumen' => 'Evaluasi 3',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],

            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Pengendalian',
                'no_urut' => '1',
                'nama_dokumen' => 'Pengendalian 1',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],
            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Pengendalian',
                'no_urut' => '2',
                'nama_dokumen' => 'Pengendalian 2',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],
            [
                'kategori' => 'kriteria_1',
                'elemen' => 'Pengendalian',
                'no_urut' => '3',
                'nama_dokumen' => 'Pengendalian 3',
                'tautan_dokumen' => 'https://drive.google.com/file/d/1aJjHIabSSnZWWBSeLXOb0mdbrgmfSaU4/view?usp=drive_link',
            ],
        ];

        foreach ($Kriteria as $key => $item){
            Kriteria::create($item);
        }
    }
}
