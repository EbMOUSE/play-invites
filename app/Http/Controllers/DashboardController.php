<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Invite;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /* Why is none of this working???
    public function index() {
        // Query data using the Eloquent model
        //$invites = Invite::all();
        $invites = DB::table('invites')->get();

        return view( 'dashboard', [
            'invites' => $invites,
            //'invites' => Invite::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
    */
}
