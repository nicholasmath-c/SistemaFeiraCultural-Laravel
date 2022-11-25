<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'name' => 'ADIL APARECIDO SOARES',
            'registration' => '41054'
        ]);
        Teacher::create([
            'name' => 'ANA FLAVIA ROSA DE LIMA',
            'registration' => '61259'
        ]);
        Teacher::create([
            'name' => 'ANDERSON DA SILVA SPERA',
            'registration' => '41046'
        ]);
    }
}
