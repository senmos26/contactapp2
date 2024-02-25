<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Supprimer les données existantes de la table
        //Company::truncate();

        // Ajouter des données de test dans la table
        Company::create([
            'email' => 'company1@example.com',
            'address' => '123 Main Street',
            'raison_social' => 'Company ABC',
        ]);

        Company::create([
            'email' => 'company2@example.com',
            'address' => '456 Elm Street',
            'raison_social' => 'Company XYZ',
        ]);

        // Ajoutez d'autres entrées si nécessaire
    }
}
