<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Invite;
use App\Models\Game;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return view( 'dashboard', [
            'invites' => Invite::orderBy('created_at', 'desc')->paginate(7),
            'games' => $games,
        ]);
    }
}
