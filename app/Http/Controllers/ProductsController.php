<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function shop(Request $request)
    {
        // Initialize the products query
        $productsQuery = Products::query();

        // Filter products by category if specified
        if ($request->has('category') && $request->input('category') !== 'all') {
            $category = $request->input('category');
            $productsQuery->where('category', $category);
        }

        // Filter products by search query if provided
        if ($request->has('search')) {
            $search = $request->input('search');
            $productsQuery->where(function($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                    ->orWhere('gender', 'like', "%$search%")
                    ->orWhere('category', 'like', "%$search%")
                    ->orWhere('price', 'like', "%$search%");
            });
        }

        // Paginate the filtered products with 9 items per page
        $products = $productsQuery->paginate(9);

        // Return the view with paginated products
        return view("shop", [
            "products" => $products,
        ]);
    }

    //add to cart function
    public function addToCart($id)
    {
        $product = Products::findorFail($id);
        $cart = session()->get('cart',[]);

        //if product already in cart - add quantity instead of adding new entry
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            //for new product - add new entry
            $cart[$id] = [
                "product_name"=> $product->name,
                "cover" => $product->cover,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        // push cart to session cart
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product added to cart!');
    }

    //checkout
    public function checkout()
    {
        return view("checkout");
    }
}
