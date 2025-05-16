@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-blue-500 to-indigo-600 py-20">
  <div class="container mx-auto text-center text-white">
    <h1  class="btn-dashboard bg-white text-blue-600 hover:bg-gray-100 inline-block mr-4">
      Bienvenue aux Missionnaires de Réveil
    </h1>
    <p class="btn-dashboard bg-white text-indigo-600 hover:bg-gray-100 inline-block">
      Rejoignez-nous pour vivre des moments de partage, de prière et d’inspiration.
    </p>
  </div>
</div>

<div class="container mx-auto py-12">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <a href="{{ route('events.index') }}" class="bg-white rounded-lg shadow hover:shadow-lg transition p-6 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-blue-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      <h3 class="text-xl font-semibold mb-2">Agenda</h3>
      <p class="text-gray-600 text-sm">Consultez tous nos prochains événements.</p>
    </a>

    <a href="{{ route('prayers.index') }}" class="bg-white rounded-lg shadow hover:shadow-lg transition p-6 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-green-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c.512-1.023 1.803-2 3.5-2s2.988.977 3.5 2H12z M12 8v10m0 0l-4-4m4 4l4-4" />
      </svg>
      <h3 class="text-xl font-semibold mb-2">Mur des Prières</h3>
      <p class="text-gray-600 text-sm">Partagez vos demandes et soutenez les autres.</p>
    </a>

    <a href="{{ route('testimonies.index') }}" class="bg-white rounded-lg shadow hover:shadow-lg transition p-6 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-yellow-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <h3 class="text-xl font-semibold mb-2">Témoignages</h3>
      <p class="text-gray-600 text-sm">Découvrez et partagez vos expériences de foi.</p>
    </a>

    <a href="{{ route('multimedia.index') }}" class="bg-white rounded-lg shadow hover:shadow-lg transition p-6 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-red-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 000 2.828l6.586 6.586M3 12h18" />
      </svg>
      <h3 class="text-xl font-semibold mb-2">Multimédias</h3>
      <p class="text-gray-600 text-sm">Regardez nos vidéos et replays en direct.</p>
    </a>
  </div>
</div>
@endsection
