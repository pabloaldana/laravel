<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    public function run()
    {
        // Define los nombres de las áreas
        $areas = ['Matematica', 'Lengua', 'Literatura', 'Naturales', 'Historia'];

        // Crea un registro para cada área
        foreach ($areas as $area) {
            Area::create(['nombre' => $area]);
        }
    }
}
