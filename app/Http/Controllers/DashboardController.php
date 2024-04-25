<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

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



    public function terms() {
        return view("terms");
    }




    public function dashboard() {
        return view("dashboard");
    }
}
