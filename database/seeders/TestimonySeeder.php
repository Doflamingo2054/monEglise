<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Testimony::create([
            'user_id' => User::where('role', 'admin')->first()->id,
            'title' => 'Témoignage de foi',
            'content' => 'J’ai vu la main de Dieu agir dans ma vie de nombreuses fois. Je suis reconnaissant pour sa grâce et sa miséricorde.',
            'status' => 'published',
        ]);
        \App\Models\Testimony::create([
            'user_id' => User::where('role', 'member')->first()->id,
            'title' => 'Témoignage de guérison',
            'content' => 'Après une longue maladie, j’ai prié et j’ai ressenti une paix intérieure. Peu après, ma santé a commencé à s’améliorer.',
            'status' => 'published',
        ]);
        \App\Models\Testimony::create([
            'user_id' => User::where('role', 'admin')->first()->id,
            'title' => 'Témoignage de protection',
            'content' => 'Dans un moment de danger, j’ai prié et j’ai senti une présence protectrice autour de moi. Je suis en sécurité grâce à Dieu.',
            'status' => 'published',
        ]);
        \App\Models\Testimony::create([
            'user_id' => User::where('role', 'member')->first()->id,
            'title' => 'Témoignage de guidance',
            'content' => 'J’étais perdu et ne savais pas quelle direction prendre. Après avoir prié, j’ai ressenti une clarté et une direction dans ma vie.',
            'status' => 'published',
        ]);
    }
}
