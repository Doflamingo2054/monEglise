@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Liste des Événements</h1>
  @can('create', App\Models\Event::class)
  <a href="{{ route('admin.events.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">
    Créer un événement
  </a>
  @endcan

  <table class="min-w-full bg-white mt-4">
    <thead>
      <tr>
        <th class="px-4 py-2">Titre</th>
        <th class="px-4 py-2">Début</th>
        <th class="px-4 py-2">Fin</th>
        <th class="px-4 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($events as $event)
      <tr>
        <td class="border px-4 py-2">{{ $event->title }}</td>
        <td class="border px-4 py-2">{{ $event->start_date->format('d/m/Y H:i') }}</td>
        <td class="border px-4 py-2">{{ optional($event->end_date)->format('d/m/Y H:i') }}</td>
        <td class="border px-4 py-2">
          <a href="{{ route('admin.events.show', $event) }}" class="text-blue-600">Voir</a>
          <a href="{{ route('admin.events.edit', $event) }}" class="text-yellow-600 ml-2">Modifier</a>
          <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="text-red-600 ml-2"
                    onclick="return confirm('Supprimer cet événement ?')">
              Supprimer
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
