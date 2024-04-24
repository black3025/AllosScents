<?php

namespace App\Http\Controllers;

use Session;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; //for password
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function register(Request $request)
    {
        // $user = new Users();
        // $user->name = "mel";
        // $user->email = "mel1@gmail.com";
        // $user->password = 123;
        // $user->save();

        // $users = new Users ([
        //     "name" => "ralph",
        //     "email" => "ralph1@gmail.com",
        //     "password" => "123"
        // ]);

        // $users->save();

        // dump(Users::all());

        //set to redirect if already login
        if( Auth::User()){
            return redirect('/');
        }else{
            return view("register", [
                "users"=> User::all(),
            ]);
        }
    }

    public function signup() {

        // dump(request()->get("user"));

        //hashed password
        $users = new User ([
            "name" => request()->get("name"),
            "email" => request()->get("email"),
            "password" => Hash::make(request()->get("password")),
        ]);

        $users->save();
        
        //rename routes from sign in to log in
        return redirect("login")->with("success","Registration Success");
    }

    //rename routes from sign in to log in
    public function login() {


        return view("signin");
    }

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
