<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Agenda</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Agenda Administrateur</h1>
    <div id='calendar'></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                editable: true,
                events: @json($events),

                selectable: true,
                select: function(info) {
                    var title = prompt('Titre de l\'événement :');
                    if (title) {
                        $.ajax({
                            url: '{{ route('agenda.store') }}',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                title: title,
                                start: info.startStr,
                                end: info.endStr
                            },
                            success: function () {
                                calendar.refetchEvents();
                            }
                        });
                    }
                },

                eventDrop: function(info) {
                    $.ajax({
                        url: '/agenda/' + info.event.id,
                        method: 'PUT',
                        data: {
                            _token: '{{ csrf_token() }}',
                            start: info.event.start.toISOString(),
                            end: info.event.end ? info.event.end.toISOString() : info.event.start.toISOString()
                        },
                        success: function () {
                            alert('Événement mis à jour.');
                        }
                    });
                },

                eventClick: function(info) {
                    if (confirm('Supprimer cet événement ?')) {
                        $.ajax({
                            url: '/agenda/' + info.event.id,
                            method: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function () {
                                info.event.remove();
                            }
                        });
                    }
                }
            });

            calendar.render();
        });
    </script>
</body>
</html>
