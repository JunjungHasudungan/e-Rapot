<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = [
            [
                'major_code'    => 'AK01',
                'name'          => 'Akutansi'
            ],
            [
                'major_code'    => 'RPL01',
                'name'          => 'Rekayasa Perangkat Lunak'
            ],
        ];

        Major::insert($majors);
    }
}
