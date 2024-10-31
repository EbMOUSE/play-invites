<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Invite;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        // Query data using Eloquent Models
        $invites = Invite::all();

        return view( 'main', [
            'invites' => Invite::orderBy('created_at', 'desc'),
        ]);
    }
}
