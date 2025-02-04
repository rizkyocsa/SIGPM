<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'nama' => 'GPM',
            ],
            [
                'nama' => 'Dekan',
            ],
            [
                'nama' => 'Industri',
            ],
            [
                'nama' => 'Informatika',
            ],
            [
                'nama' => 'Sipil',
            ],
        ];

        foreach ($roles as $key => $role){
            Role::create($role);
        }
    }
}
