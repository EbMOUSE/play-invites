<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Invite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class InviteController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // Validation
        request()->validate([
            'title' => 'required|string|min:1|max:35',
            'description' => 'required|string|min:1|max:150',
            'game_id' => 'required|integer',
        ]);

        // Assigning fields
        $invite = new Invite;

        $invite->user_id = Auth::user()->id;
        $invite->title = $request->get('title');
        $invite->description = $request->get('description');
        $invite->game_id = $request->get('game_id');

        $invite->save();
        return redirect()->route('dashboard');
    }

    public function show(Invite $invite)
    {
        $user = User::where('id', $invite->user_id)->first();
        $comments = $invite->comments;

        return view( 'invite.show', [
            'invite' => $invite,
            'user' => $user,
            'comments' => $comments,
        ]);
    }
}
