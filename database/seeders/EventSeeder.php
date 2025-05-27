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
            'title' => 'Veillée de prière',
            'description' => 'Rejoignez-nous pour une nuit de prière intensive !',
            'start_date' => '2025-05-15 20:00:00',
            'end_date' => '2025-05-16 06:00:00',
        ]);
        \App\Models\Event::create([
            'title' => 'Conférence des jeunes',
            'description' => 'Une journée dédiée à l\'épanouissement spirituel des jeunes.',
            'start_date' => '2025-06-10 09:00:00',
            'end_date' => '2025-06-10 18:00:00',
        ]);
        \App\Models\Event::create([
            'title' => 'Atelier de louange',
            'description' => 'Apprenez à diriger la louange et à jouer des instruments.',
            'start_date' => '2025-07-05 14:00:00',
            'end_date' => '2025-07-05 17:00:00',
        ]);
        \App\Models\Event::create([
            'title' => 'Sortie communautaire',
            'description' => 'Une journée de service et de partage dans la communauté locale.',
            'start_date' => '2025-08-20 08:00:00',
            'end_date' => '2025-08-20 16:00:00',
        ]);
        \App\Models\Event::create([
            'title' => 'Séminaire sur la famille',
            'description' => 'Renforcez les liens familiaux grâce à des enseignements bibliques.',
            'start_date' => '2025-09-12 10:00:00',
            'end_date' => '2025-09-12 16:00:00',
        ]);
        \App\Models\Event::create([
            'title' => 'Culte spécial d\'action de grâce',
            'description' => 'Un culte pour remercier Dieu pour ses bienfaits.',
            'start_date' => '2025-11-23 10:00:00',
            'end_date' => '2025-11-23 12:00:00',
        ]);
        \App\Models\Event::create([
            'title' => 'Noël en communauté',
            'description' => 'Célébrons la naissance du Christ ensemble avec chants et partage.',
            'start_date' => '2025-12-24 19:00:00',
            'end_date' => '2025-12-24 22:00:00',
        ]);
        \App\Models\Event::create([
            'title' => 'Réunion de prière du Nouvel An',
            'description' => 'Commencez l\'année dans la prière et la louange.',
            'start_date' => '2026-01-01 00:30:00',
            'end_date' => '2026-01-01 02:00:00',
        ]);
    }
}