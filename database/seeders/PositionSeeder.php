<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $positions = [
            ['name' => 'Chambre', 'tag_position' => '#chambre'],
            ['name' => 'Salon', 'tag_position' => '#salon'],
            ['name' => 'Salle a manger', 'tag_position' => '#salle-manger'],
            ['name' => 'Cuisine', 'tag_position' => '#cuisine'],
            ['name' => 'Salle de bain', 'tag_position' => '#salle-bain'],
            ['name' => 'Bureau', 'tag_position' => '#bureau'],
        ];

        foreach ($positions as $position) {
            Position::create($position);
        }

    }
}
