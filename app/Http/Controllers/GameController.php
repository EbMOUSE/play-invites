<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Symfony\Component\HttpFoundation\RedirectResponse;

class GameController extends Controller
{
    public function show()
    {
        $games = Game::all();

        return view( 'games', [
            'games' => $games,
        ]);
    }
}
