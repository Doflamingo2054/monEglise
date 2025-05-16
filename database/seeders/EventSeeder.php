<?php

namespace App\Http\Controllers; // Notez le "\" entre Http et Controllers
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Event::create([
        'titre' => 'Veillée de prière',
        'date' => '2025-05-15',
        'description' => 'Rejoignez-nous pour une nuit de prière intensive !',
    ]);
    }
}