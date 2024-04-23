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
                'email' => 'admin@gmail.com',
                'level' => 1,
                'password' => Hash::make('12345')
            ],
            [
                'email' => 'dekan@gmail.com',
                'level' => 2,
                'password' => Hash::make('12345')
            ],
            [
                'email' => 'prodi@gmail.com',
                'level' => 3,
                'password' => Hash::make('12345')
            ],
            [
                'email' => 'alumni@gmail.com',
                'level' => 4,
                'password' => Hash::make('12345')
            ],
            [
                'email' => 'mahasiswa@gmail.com',
                'level' => 5,
                'password' => Hash::make('12345')
            ]
        ];

        foreach ($users as $key => $user){
            User::create($user);
        }
    }
}
