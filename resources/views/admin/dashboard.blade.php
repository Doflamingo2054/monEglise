@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Tableau de bord - Administrateur</h1>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <a href="{{ route('admin.prayers.index') }}" class="btn-dashboard">Gérer les Prières</a>
    <a href="{{ route('admin.testimonies.index') }}" class="btn-dashboard">Gérer les Témoignages</a>
    <a href="{{ route('admin.events.index') }}" class="btn-dashboard">Gérer les Événements</a>
    <a href="{{ route('multimedia.index') }}" class="btn-dashboard">Multimédia</a>
    <a href="{{ route('prayers.create') }}" class="btn-dashboard">Soumettre une prière</a>
    <a href="{{ route('testimonies.create') }}" class="btn-dashboard">Soumettre un témoignage</a>
  </div>
</div>
@endsection
