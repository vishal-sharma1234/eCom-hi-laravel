<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {

        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    function getProductDetailByID($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    function search(Request $req)
    {

        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }

    function addToCart(Request $req)
    {

        if (Auth::check()) {
            //  Auth::user()['id'];
            $cart = new Cart();
            $cart->user_id = Auth::user()['id'];
            $cart->product_id = $req->input('product_id');
            $cart->save();
            return redirect('/');
        } else {
            return redirect('login');
        }
    }

    static function cartItem()
    {

        if (Auth::check()) {
            $user_id =  Auth::user()['id'];
            return DB::table('cart')->join('products', 'cart.product_id', 'products.id')->select('products.*')->where('cart.user_id', $user_id)->get()->count();
        } else {
            return 0;
        }
    }

    function cartList()
    {

        if (Auth::check()) {
            $user_id =  Auth::user()['id'];
            $data = DB::table('cart')->join('products', 'cart.product_id', 'products.id')->select('products.*', 'cart.id as cart_id')->where('cart.user_id', $user_id)->get();
            return view('cart', ['products' => $data]);
        } else {
            return "your arn't loged in!";
        }
    }

    function removeItem($id)
    {
        Cart::destroy($id);
        return redirect('/cart');
    }
}
