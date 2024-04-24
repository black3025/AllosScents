<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Signin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function about() {
        return view("about");
    }

    public function contact() {
        return view("contact");
    }

    public function profile() {
        return view("profile");
    }

    public function shop(Request $request) {
        $products = Products::query();

        if ($request->has('category') && $request->input('category') !== 'all') {
            $category = $request->input('category');
            $products->where('category', $category);
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $products->where(function($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                    ->orWhere('gender', 'like', "%$search%")
                    ->orWhere('category', 'like', "%$search%")
                    ->orWhere('price', 'like', "%$search%");
            });
        }

        $filteredProducts = $products->get();

        return view("shop", [
            "products" => $filteredProducts,
        ]);
    }

    public function terms() {
        return view("terms");
    }

    //rename routes from sign in to log in
    public function login() {


        return view("signin");
    }

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

    public function dashboard() {
        return view("dashboard");
    }
}
