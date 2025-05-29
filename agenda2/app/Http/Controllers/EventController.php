<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
  
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('agenda.index', compact('events'));
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());
        return response()->json($event);
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return response()->json($event);
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return response()->json(['success' => true]);
    }
}


