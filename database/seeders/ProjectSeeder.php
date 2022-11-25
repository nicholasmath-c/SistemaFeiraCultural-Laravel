<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'id' => 1,
            'country' => 'Japão',
            'classroom' => '1º MTEC Administração (Manhã)',
            'img_flag' => 'jp.png'
        ]);
        Project::create([
            'id' => 2,
            'country' => 'Austrália',
            'classroom' => '1º MTEC Informática (Manhã)',
            'img_flag' => 'au.png'
        ]);
        Project::create([
            'id' => 3,
            'country' => 'Inglaterra',
            'classroom' => '1º MTEC Logística (Manhã)',
            'img_flag' => 'ing.png'
        ]);
        Project::create([
            'id' => 4,
            'country' => 'Espanha',
            'classroom' => '2º MTEC Administração (Manhã)',
            'img_flag' => 'esp.png'
        ]);
        Project::create([
            'id' => 5,
            'country' => 'Holanda',
            'classroom' => '2º MTEC Informática (Manhã)',
            'img_flag' => 'hol.png'
        ]);
        Project::create([
            'id' => 6,
            'country' => 'Argentina',
            'classroom' => '2º MTEC Logística (Manhã)',
            'img_flag' => 'arg.png'
        ]);
        Project::create([
            'id' => 7,
            'country' => 'Portugal',
            'classroom' => '1º MTEC Logística (Tarde)',
            'img_flag' => 'por.png'
        ]);
        Project::create([
            'id' => 8,
            'country' => 'Brasil',
            'classroom' => '1º MTEC Informática (Tarde)',
            'img_flag' => 'bra.png'
        ]);
        Project::create([
            'id' => 9,
            'country' => 'Dinamarca',
            'classroom' => '1º MTEC Logística (Tarde)',
            'img_flag' => 'din.png'
        ]);
        Project::create([
            'id' => 10,
            'country' => 'México',
            'classroom' => '2º MTEC Administração (Tarde)',
            'img_flag' => 'mex.png'
        ]);
        Project::create([
            'id' => 11,
            'country' => 'França',
            'classroom' => '2º MTEC Informática (Tarde)',
            'img_flag' => 'fra.png'
        ]);
        Project::create([
            'id' => 12,
            'country' => 'Estados Unidos',
            'classroom' => '2º MTEC Logística (Tarde)',
            'img_flag' => 'eua.png'
        ]);
    }
}
/*
1
Japão
1º MTEC Administração (Manhã)
jp.png

2
Austrália
1º MTEC Informática (Manhã)
au.png

3
Inglaterra
1º MTEC Logística (Manhã)
ing.png

4
Espanha
2º MTEC Administração (Manhã)
esp.png

5
Holanda
2º MTEC Informática (Manhã)
hol.png

6
Argentina
2º MTEC Logística (Manhã)
arg.png

7
Portugal
1º MTEC Logística (Tarde)
por.png

8
Brasil
1º MTEC Informática (Tarde)
bra.png

9
Dinamarca
1º MTEC Logística (Tarde)
din.png

10
México
2º MTEC Administração (Tarde)
mex.png

11
França
2º MTEC Informática (Tarde)
fra.png

12
Estados Unidos
2º MTEC Logística (Tarde)
eua.png
*/