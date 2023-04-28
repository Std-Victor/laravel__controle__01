<?php

namespace Database\Seeders;

use App\Models\Livre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $livres = [];
        foreach(range(1,2) as $index){
            $livre = [
                'titre' =>   fake()->word(3, true),
                'auteur' =>  fake()->name(),
                'prix' => fake()->numberBetween(45,125),
                'annee' => fake()->year('now'),
                'couverture' => './storages/app/public/pictures/photo__0'.$index.'.png',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $livres[] = $livre;
        }

        Livre::insert($livres);
    }
}
