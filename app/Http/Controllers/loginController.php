<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $fillable = $request->only(['email','password']);

        if (Auth::attempt($fillable)){
            return redirect('/');
        }

    }

}
