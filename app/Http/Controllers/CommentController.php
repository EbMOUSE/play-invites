<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CommentController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // Validation
        request()->validate([
            'invite_id' => 'required|integer',
            'comment' => 'required|string|min:1|max:150',
        ]);

        // Assigning fields
        $comment = new Comment;

        $comment->user_id = Auth::user()->id;
        $comment->invite_id = $request->get('invite_id');
        $comment->comment = $request->get('comment');

        $comment->save();

        return redirect()->route('dashboard');
    }
}
