<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user); // if not found user, shows 404 error
        return view('home', [
            'user' => $user
        ]);
    }
}
