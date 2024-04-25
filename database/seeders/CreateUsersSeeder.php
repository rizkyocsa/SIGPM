<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama' => 'GPM',
                'email' => 'gpm@gmail.com',
                'id_role' => 1,
                'noHP' => '089655313595',
                'password' => Hash::make('12345')
            ],
            [
                'nama' => 'Dekan',
                'email' => 'dekan@gmail.com',
                'id_role' => 2,
                'noHP' => '089655313595',
                'password' => Hash::make('12345')
            ],
            [
                'nama' => 'Wakil Dekan 1',
                'email' => 'wakil.dekan.1@gmail.com',
                'id_role' => 2,
                'noHP' => '089655313595',
                'password' => Hash::make('12345')
            ],
            [
                'nama' => 'Prodi',
                'email' => 'prodi@gmail.com',
                'id_role' => 3,
                'noHP' => '089655313595',
                'password' => Hash::make('12345')
            ],
        ];

        foreach ($users as $key => $user){
            User::create($user);
        }
    }
}
