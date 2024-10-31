<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Invite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class GameController extends Controller
{
    public function show(Invite $invite)
    {
        //
    }
}
