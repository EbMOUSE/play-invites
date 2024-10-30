<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Invite;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $invite = new Invite();
        $invite->user_id = Auth::user()->id;
        $invite->title = request('title');
        $invite->description = request('description');
        $invite->game_id = request('game');
        $invite->save();

        return view('main', [
            'invites' => Invite::all()
        ]
        );
    }
}
