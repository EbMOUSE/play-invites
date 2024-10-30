<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sign_up() {
        dump(request()->get( 'user' ));
    }

    public function sign_in() {
        dump($_POST);
    }
}
