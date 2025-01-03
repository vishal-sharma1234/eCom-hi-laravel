<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('search', ['products' => $data]);;
    }

    function addToCart(Request $req){

        if(Auth::check()){
            //  Auth::user()['id'];
             $cart = new Cart();
             $cart->user_id = Auth::user()['id'];
             $cart->product_id = $req->input('product_id');
             $cart->save();
             return redirect('/');
        }else{
            return redirect('login');
        }

    }

    static function cartItem(){

        if(Auth::check()){
            return Cart::all()->count();
        }else{
            return 0;
        }

    }

}
