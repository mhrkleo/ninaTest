<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Location;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        $users = User::with("getLocation")->get();
        return view('user', ['users' => $users]);
    }
}
