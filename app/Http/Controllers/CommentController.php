<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Invite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CommentController extends Controller
{
    public function store(Request $request, Invite $invite): RedirectResponse
    {
        // Validation
        request()->validate([
            'comment' => 'required|string|min:1|max:150',
        ]);

        // Assigning fields
        $comment = new Comment;

        $comment->user_id = Auth::user()->id;
        $comment->invite_id = $invite->id;
        $comment->comment = $request->get('comment');

        $comment->save();
        return redirect()->route('dashboard');
    }
}
