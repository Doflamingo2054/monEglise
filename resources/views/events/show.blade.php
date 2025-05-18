@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Détail de l’Événement</h1>
  <div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold">{{ $event->title }}</h2>
    <p class="text-gray-600 mt-2">{{ $event->description }}</p>
    <p class="mt-4"><strong>Début :</strong> {{ $event->start_date->format('d/m/Y H:i') }}</p>
    @if($event->end_date)
      <p><strong>Fin :</strong> {{ $event->end_date->format('d/m/Y H:i') }}</p>
    @endif
    <a href="{{ route('admin.events.index') }}"
       class="inline-block mt-6 px-4 py-2 bg-gray-500 text-white rounded">
       Retour à la liste
    </a>
  </div>
</div>
@endsection
