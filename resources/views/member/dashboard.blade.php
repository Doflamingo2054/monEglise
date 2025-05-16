@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
  <h1 class="text-2xl font-bold mb-6">Bienvenue {{ Auth::user()->name }}</h1>

  <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
    <a href="{{ route('prayers.create') }}" class="btn-dashboard">Soumettre une prière</a>
    <a href="{{ route('testimonies.create') }}" class="btn-dashboard">Soumettre un témoignage</a>
    <a href="{{ route('prayers.index') }}" class="btn-dashboard">Voir le mur des prières</a>
    <a href="{{ route('testimonies.index') }}" class="btn-dashboard">Voir les témoignages</a>
    <a href="{{ route('multimedia.index') }}" class="btn-dashboard">Médias</a>
     <a href="{{ route('events.index') }}" class="btn-dashboard">Agenda</a>
  </div>
</div>
@endsection
