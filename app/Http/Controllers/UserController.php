<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index() {
        $users = User::orderBy('last_seen','DESC')->get();
        return view('dashboard',compact('users'));
    }
}
