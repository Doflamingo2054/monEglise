@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Médias en direct & replay</h1>

  @if(count($videos) === 0)
    <p>Aucune vidéo trouvée pour l’instant.</p>
  @else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($videos as $video)
        @php
          // Avec search.list, l'ID est dans ['id']['videoId']
          $id  = $video['id']['videoId'];
          $sn  = $video['snippet'];
        @endphp
        <div class="shadow rounded overflow-hidden">
          <iframe
            src="https://www.youtube.com/embed/{{ $id }}"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            class="w-full h-48">
          </iframe>
          <div class="p-4">
            <h2 class="font-semibold">{{ $sn['title'] }}</h2>
            <p class="text-sm text-gray-600">
              {{ \Carbon\Carbon::parse($sn['publishedAt'])->format('d/m/Y H:i') }}
            </p>
          </div>
        </div>
      @endforeach
    </div>
  @endif

</div>
@endsection
