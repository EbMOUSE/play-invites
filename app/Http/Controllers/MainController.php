<?php

namespace App\Http\Controllers;
use App\Models\Invite;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $invite = new Invite(
            [
                'title' => 'test',
                'description' => 'bleeeeh :p',
                'game_id' => 1,
            ]
        );

        $invite->save();

        return view('main', [
            'invites' => Invite::all()
        ]
        );
    }
}
