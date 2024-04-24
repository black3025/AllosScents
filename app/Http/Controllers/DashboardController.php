<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Signin;

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




    public function dashboard() {
        return view("dashboard");
    }
}
