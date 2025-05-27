<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class PrayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Prayer::create([
            'title' => 'Prière pour la paix mondiale',
            'status' => 'published',
            'user_id' => User::where('role', 'admin')->first()->id,
            'message' => 'Prions ensemble pour la paix dans le monde entier. Que les cœurs soient apaisés et que les conflits cessent.',
        ]);
        \App\Models\Prayer::create([
            'title' => 'Prière pour la guérison',
            'status' => 'published',
            'user_id' => User::where('role', 'member')->first()->id,
            'message' => 'Demandons à Dieu de guérir ceux qui souffrent, tant physiquement que spirituellement.',
        ]);
        \App\Models\Prayer::create([
            'title' => 'Prière pour la sagesse',
            'status' => 'published',
            'user_id' => User::where('role', 'admin')->first()->id,
            'message' => 'Prions pour que nous puissions tous recevoir la sagesse nécessaire pour prendre de bonnes décisions dans nos vies.',
        ]);
        \App\Models\Prayer::create([
            'title' => 'Prière pour les familles',
            'status' => 'published',
            'user_id' => User::where('role', 'member')->first()->id,
            'message' => 'Prions pour que chaque famille soit unie et remplie d’amour et de compréhension.',
        ]);
        \App\Models\Prayer::create([
            'title' => 'Prière pour les dirigeants',
            'status' => 'published',
            'user_id' => User::where('role', 'admin')->first()->id,
            'message' => 'Demandons à Dieu de guider les dirigeants du monde afin qu’ils prennent des décisions justes et équitables.',
        ]);
        \App\Models\Prayer::create([
            'title' => 'Prière pour les jeunes',
            'status' => 'published',
            'user_id' => User::where('role', 'member')->first()->id,
            'message' => 'Prions pour que les jeunes trouvent leur voie et soient protégés des influences négatives.',
        ]);
        \App\Models\Prayer::create([
            'title' => 'Prière pour la communauté',
            'status' => 'published',
            'user_id' => User::where('role', 'admin')->first()->id,
            'message' => 'Prions pour que notre communauté soit unie et forte, et que nous puissions tous nous soutenir mutuellement.',
        ]);
    }
}
