<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('/');
        }
        
        //rename routes from sign in to log in
        return redirect("login")->with('error', 'Invalid credentials. Please try again.');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
      }
}
