<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Affiche la liste des événements
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Event::selectRaw('id, title, start_date as start, end_date as end')->get();
        }
        
        return view('events.index', [
            'events' => Event::orderBy('start_date')->get()
        ]);
    }

    // Affiche le formulaire de création
    public function create()
    {
        
        $events = Event::orderBy('start_date')->get();
        
        return view('events.create', [
            'events' => $events
        ]);
    }

    // Enregistre un nouvel événement
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date'  => 'required|date',
            'end_date'    => 'nullable|date|after_or_equal:start_date',
        ]);

        Event::create($data);

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Événement créé avec succès.');
    }

    // Affiche le détail d’un événement
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    // Affiche le formulaire d’édition
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    // Met à jour un événement existant
    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date'  => 'required|date',
            'end_date'    => 'nullable|date|after_or_equal:start_date',
        ]);

        $event->update($data);

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Événement mis à jour.');
    }

    // Supprime un événement
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Événement supprimé.');
    }
}