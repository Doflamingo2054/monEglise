<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.global-style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Multimédia</title>
</head>
<body>
    @include('partials.header')
    <main class="container-lg">
        <div>
        <h1 class="text-2xl font-bold mb-4">Mur des prières</h1>

        @if($prayers->isEmpty())
          <p>Aucune prière publiée pour l’instant.</p>
        @else
          <div class="space-y-6">
            @foreach($prayers as $prayer)
              {{-- Carte prière --}}
              <div class="bg-white rounded shadow p-6">
                <h2 class="text-xl font-semibold">{{ $prayer->title }}</h2>
                <p class="text-gray-600 text-sm">
                  Par {{ $prayer->user->name }} le {{ $prayer->created_at->format('d/m/Y H:i') }}
                </p>
                <div class="mt-2 text-gray-800">
                  {{ $prayer->message }}
                </div>
              </div>

              {{-- Bloc AJAX & commentaires --}}
              <div class="post" data-id="{{ $prayer->id }}">
              <div class="post" data-id="{{ $prayer->id }}" data-type="prayer">
                <div class="bg-gray-50 rounded shadow p-4">
                  <h3 class="font-semibold mb-2">Commentaires</h3>

                  <div class="comments" id="comments-{{ $prayer->id }}">
                    @forelse($prayer->comments as $comment)
                      <div class="comment flex justify-between items-start py-2" data-id="{{ $comment->id }}">
                        <div>
                          <strong>{{ $comment->user->name }}</strong> : {{ $comment->content }}
                        </div>
                        @can('delete', $comment)
                          <button class="text-red-500 btn-delete-comment" data-id="{{ $comment->id }}">×</button>
                        @endcan
                      </div>
                    @empty
                      <p class="text-sm text-gray-600">Pas encore de commentaires.</p>
                    @endforelse
                  </div>

                  @auth
                    <div class="mt-4 flex space-x-2">
                      <textarea
                        class="new-comment flex-1 border rounded px-2 py-1"
                        placeholder="Écrire un commentaire…"
                        rows="2"
                      ></textarea>
                      <button class="btn-add-comment px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        Commenter
                      </button>
                    </div>
                  @endauth
                </div>
              </div>
            @endforeach
          </div>
        @endif
      </div>

      <script>
        window.AUTH_ID = {{ auth()->check() ? auth()->id() : 'null' }};
        window.AUTH_ROLE = {{ auth()->check() ? "'".auth()->user()->role."'" : 'null' }};
      </script>

      <script src="{{ asset('js/comments.js') }}"></script>
    </main>

    @include('partials.footer')

    <style>
        
    </style>

    <script>
    
</script>


</body>
</html>
