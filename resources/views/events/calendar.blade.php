@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Calendrier des Événements</h1>
  <div id="calendar"></div>
</div>
@endsection

@push('scripts')
<script type="module">
  import { Calendar } from '@fullcalendar/core';
  import dayGridPlugin from '@fullcalendar/daygrid';

  document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendar');
    let calendar = new Calendar(calendarEl, {
      plugins: [ dayGridPlugin ],
      initialView: 'dayGridMonth',
      events: '{{ route('admin.events.calendar') }}',
    });
    calendar.render();
  });
</script>
@endpush