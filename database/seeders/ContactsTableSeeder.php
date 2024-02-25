<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Supprimer les données existantes de la table
        Contact::truncate();

        // Ajouter des données de test dans la table
        Contact::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'phone' => '123456789',
            'address' => '123 Main Street',
            'company' => 'ABC Company',
        ]);

        Contact::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'email' => 'jane.smith@example.com',
            'phone' => '987654321',
            'address' => '456 Elm Street',
            'company' => 'XYZ Corporation',
        ]);

        // Ajoutez d'autres entrées si nécessaire
    }
}
