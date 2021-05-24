<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user); // if not found user, shows 404 error
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
