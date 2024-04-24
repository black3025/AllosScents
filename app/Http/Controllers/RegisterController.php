<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
//added for hasing
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    //
    public function signup() {

        // dump(request()->get("user"));

        //hashed password
        $users = new Users ([
            "name" => request()->get("name"),
            "email" => request()->get("email"),
            "password" => Hash::make(request()->get("password")),
        ]);

        $users->save();
        
        //rename routes from sign in to log in
        return redirect("login")->with("success","");
    }
}
