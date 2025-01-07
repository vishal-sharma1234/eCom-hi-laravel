<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
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

    function orderNow()
    {

        $user_id =  Auth::user()['id'];
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $user_id)
            ->sum('products.price');
        return view('order', ['total' => $total]);
    }

    function payment(Request $req)
    {

        $user_id = Auth::user()['id'];
        // $products = DB::table('cart')->join('products', 'cart.product_id', 'products.id')->select('products.*', 'cart.id as cart_id')->where('cart.user_id', $user_id)->get();

        $products = Cart::where('user_id', $user_id)->get();

        foreach ($products as $product) {
            $order = new Order();
            $order->user_id = $user_id;
            $order->product_id = $product->product_id;
            $order->address = $req->address;
            $order->status = "panding";
            $order->payment_method = $req->payment;
            $order->payment_status = "panding";
            $order->save();
        }
        Cart::where('user_id', $user_id)->delete();

        return redirect('/');
    }


    function myorders()
    {

        $user_id = Auth::user()['id'];
        $products = DB::table('orders')
            ->join('products', 'orders.product_id', 'products.id')
            ->where('orders.user_id', $user_id)
            ->get();
        return view('myorders', ['products' => $products]);
    }
}
