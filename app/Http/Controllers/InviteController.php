<?php

namespace App\Http\Controllers;
use App\Models\Invite;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class InviteController extends Controller
{
    public function store(Request $request): RedirectResponse
    {

        /*
        $invite = Invite::create(
            [
                dump(request()->get('title')),
                dump(request()->get('description')),
                dump(request()->get('game')),
            ]
        );
        */

        $validated = $request->validate([
            'title' => 'required|string|max:35',
            'description' => 'required|string|max:150',
            'game' => 'required|integer',
        ]);

        $request->user()->invites()->create($validated);

        return redirect()->route('main');
    }
}
