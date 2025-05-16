<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
            'prayer_id' => 'nullable|exists:prayers,id',
            'testimony_id' => 'nullable|exists:testimonies,id',
        ]);

        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = auth()->id();

        if ($request->filled('prayer_id')) {
            $comment->prayer_id = $request->input('prayer_id');
        }

        if ($request->filled('testimony_id')) {
            $comment->testimony_id = $request->input('testimony_id');
        }

        $comment->save();

        // Charger l'utilisateur pour l'affichage dynamique
        $comment->load('user');

        return response()->json([
            'id' => $comment->id,
            'content' => $comment->content,
            'user' => [
                'id' => $comment->user->id,
                'name' => $comment->user->name,
            ],
            'user_id' => $comment->user->id,
        ]);
    }


    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment); // seul admin ou auteur
        $comment->delete();
        return response()->json(['deleted' => true]);
    }

}
