@foreach ($events as $event)
  <div class="card mb-3">
    <div class="card-body">
      <h5>{{ $event->titre }}</h5>
      <p>{{ $event->description }}</p>
      <small>{{ $event->date }}</small>
    </div>
  </div>
@endforeach