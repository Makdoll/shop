<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class registerController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function create(Request $request)
    {

        User::create([
            'login' => $request->email,
            'password' => Hash::make($request->psw),
            'email_address' => $request->email,
            'status' =>0,
        ]);
            return redirect('/');
    }
}
