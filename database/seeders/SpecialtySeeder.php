<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SpecialtySeeder extends Seeder
{
    public function run()
    {
        DB::table('specialties')->insert([
            'name'      => "Terapia Ocupacional",
            'img'       => "terapia_ocupacional.jpg",
            'route'     => "specialties.terapia-ocupacional",
            'position'  => 0,
            'visible'   => True,
        ]);
        DB::table('specialties')->insert([
            'name'      => "Fonoaudiología",
            'img'       => "fonoaudiologia.jpg",
            'route'     => "specialties.fonoaudiologia",
            'position'  => 1,
            'visible'   => True,
        ]);
        DB::table('specialties')->insert([
            'name'      => "Nutrición",
            'img'       => "nutricion.jpg",
            'route'     => "specialties.nutricion",
            'position'  => 2,
            'visible'   => True,
        ]);
        DB::table('specialties')->insert([
            'name'      => "Psicología",
            'img'       => "psicologia.jpg",
            'route'     => "specialties.psicologia",
            'position'  => 3,
            'visible'   => True,
        ]);
        DB::table('specialties')->insert([
            'name'      => "Psicopedagogía",
            'img'       => "psicopedagogia.jpg",
            'route'     => "specialties.psicopedagogia",
            'position'  => 4,
            'visible'   => True,
        ]);
        DB::table('specialties')->insert([
            'name'      => "Educación diferencial",
            'img'       => "educacion_diferencial.jpg",
            'route'     => "specialties.educacion_diferencial",
            'position'  => 5,
            'visible'   => True,
        ]);
        DB::table('specialties')->insert([
            'name'      => "Neuropsicología",
            'img'       => "neuropsicologia.jpg",
            'route'     => "specialties.neuropsicologia",
            'position'  => 6,
            'visible'   => True,
        ]);
        DB::table('specialties')->insert([
            'name'      => "Médico General",
            'img'       => "medico_general.jpg",
            'route'     => "specialties.medico_general",
            'position'  => 7,
            'visible'   => True,
        ]);
    }
}
