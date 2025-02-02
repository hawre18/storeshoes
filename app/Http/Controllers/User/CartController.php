<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::with('images')->whereId($id)->first();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return back();
    }
    public function removeItem(Request $request, $id){
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($product, $product->id);
        $request->session()->put('cart', $cart);
        return back();
    }

    public function getCart()
    {
        if (Auth::check()){
            $addresses=Address::with('province','city')->where('user_id',Auth::user()->id)->get();
            if($addresses!=null){
                $cart = Session::has('cart') ? Session::get('cart') : null;
                return view('index.user.v1.cart-detail', compact(['cart','addresses']));
            }
            else{
                $cart = Session::has('cart') ? Session::get('cart') : null;
                $addresses=null;
                return view('index.user.v1.cart-detail', compact(['cart','addresses']));
            }

        }
        else{
            $cart = Session::has('cart') ? Session::get('cart') : null;
            $addresses=null;
            return view('index.user.v1.cart-detail', compact(['cart','addresses']));
        }


    }
}
