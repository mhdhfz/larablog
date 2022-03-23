<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:25|min:2',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:50',
        ]);

        User::create($attributes);

        return redirect('/');
    }
}
