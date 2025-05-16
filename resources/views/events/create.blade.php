@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Nouvel Événement</h1>

    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Titre</label>
            <input type="text" name="title" required 
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Description</label>
            <textarea name="description" 
                      class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" 
                      rows="3"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2">Date de début</label>
            <input type="datetime-local" name="start_date" required 
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 mb-2">Date de fin (optionnelle)</label>
            <input type="datetime-local" name="end_date" 
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" 
                class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors">
            Créer l'événement
        </button>
    </form>
</div>
@endsection