<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // validate

        $validatedAttributes = request()->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required', Password::min(5), 'confirmed'],
        ]);

        // create a user
        $user = User::create($validatedAttributes);

        // dd($validatedAttributes);

        // log in
        Auth::login($user);

        // redirect somewhere
        return redirect('jobs');
    }
}
