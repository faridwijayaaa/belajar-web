<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    //
    static function viewWelcome() {
        // $user['email'] = "io@sipintar";
        // $user['pass'] = "12345";
        return view('welcome');
    }
}
