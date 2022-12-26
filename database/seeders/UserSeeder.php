<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name'      => 'Hasudungan Sitorus',
                'email'     => 'hasudungan21@gmail.com',
                'password'  => bcrypt('password'),
                'role_id'   => 1,
                'major_id'  => null,
            ],
            [
                'name'      => 'Renaldi Tarigan',
                'email'     => 'renalditarigan@gmail.com',
                'password'  => bcrypt('password'),
                'role_id'   => 3,
                'major_id'  => 1,
            ],
            [
                'name'      => 'Dani Harianja',
                'email'     => 'daniharianja@gmail.com',
                'password'  => bcrypt('password'),
                'role_id'   => 2,
                'major_id'  => 1,
            ],
            [
                'name'      => 'Caca Cahyana',
                'email'     => 'cacacahyana21@gmail.com',
                'password'  => bcrypt('password'),
                'role_id'   => 2,
                'major_id'  => 2
            ],
            [
                'name'      => 'Yosua Situmorang',
                'email'     => 'yosuasitumorang@gmail.com',
                'password'  => bcrypt('password'),
                'role_id'   => 3,
                'major_id'  => 2,
            ],
        ];

        User::insert($users);
    }
}
