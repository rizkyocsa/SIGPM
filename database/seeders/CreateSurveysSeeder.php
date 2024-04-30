<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Survey;

class CreateSurveysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $surveys = [
            [
                'nama_survey' => 'Survey Kepuasaan Lulusan Alumni',
                'tautan_survey' => 'https://forms.gle/xgF5Pqk9izsmxbeUA'
            ],
            [
                'nama_survey' => 'Survey Kepuasaan Mahasiswa',
                'tautan_survey' => 'https://forms.gle/xgF5Pqk9izsmxbeUA'
            ],
            [
                'nama_survey' => 'Survey Kepuasaan Tendik',
                'tautan_survey' => 'https://forms.gle/xgF5Pqk9izsmxbeUA'
            ],
            [
                'nama_survey' => 'Survey Kepuasaan Dosen',
                'tautan_survey' => 'https://forms.gle/xgF5Pqk9izsmxbeUA'
            ]
        ];

        foreach ($surveys as $key => $survey){
            Survey::create($survey);
        }
    }
}
